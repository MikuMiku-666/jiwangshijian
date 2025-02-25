《计算机网络》课程项目汇报书
 
小组成员
组长： 李哲彦
组员： 邹品聪，华圣佳，连亮瑜
项目概览
基于实时socket通信的图像修复平台
【项目背景】随着计算机网络以及个人移动终端的发展，电子图像已经成为了我们日常生活中必不可少的一部分，我们经常会遇到如下这一问题：有些图像拍糊了，亦或是一些老照片不太清晰。尽管，网络上已经有许多相关的图像修复网站，但是往往都收费高昂，且种类过多，用户难以挑选。
【项目目标】因此，我们在本次实践项目中，希望以计算机网络通信技术为基础，结合最新或经典的图像处理算法，创建一个实时的图像修复平台，处理用户上传的图像，并提供预览与下载服务。
 
图1：项目概览——流程图
 
图2：项目概览——技术栈
 
图3：项目概览——项目架构
   
项目详述
由于部分算法需要使用到性能较高的 GPU 硬件资源，我们借用了学校实验室的高性能服务器。但这也引发了一个问题，即我们在服务器上没有足够高的权限，难以在其上部署网页以提供良好的图形界面服务。因此，我们将服务端分为了前端服务器与后端服务器两部分，其中前端服务器无需较高的性能，仅使用我们的笔记本电脑即可满足要求。
前后端socket通信
在我们的项目流程中，前端服务器接收到一张用户上传的图片，随后我们需要将该图像传输给后端服务器，后端服务器利用我们部署的算法处理完成后，回传给前端服务器进行后续处理。
针对这一过程，我们在应用层上创建了一个自定义的图片传输协议。
【协议构成 Version1.0】
 
图4：请求报文
 
图5：应答报文


我们设计的协议分为协议首部和数据部分（即需传输的图片），协议首部包含了多个服务内容。为了协议的灵活性与扩充性，我们不规定每个字段的具体长度，而是采取固定首部长度（64字节），并使用特殊分隔符号"/"分割以区分不同字段的方式。
基于需求不同，用户端发起的请求报文和服务端发送的应答报文，需要的字段也不相同。例如，不同用户对于图片的质量与大小有不同需求，因此请求报文中包含了分辨率字段要求。对于服务端的应答报文来说，由于存在多张生成结果，客户端希望知道每个应答报文对应的处理算法，因此需要包含处理算法id字样。当所有结果图片报文接受完成后，前端和后端服务器则应断开当前连接。
特殊分隔符号的选取：考虑到在windows系统中"\、/、*、?、"、<、>、|"是文件名保留字符，而在unix/linux系统中只有"/"字符是文件名保留字符，因此二者取交集，我们选用"/"作为特殊分隔符号。
图像名称字段的替换：考虑到用户上传的图片名称可能很长或者为空等多种特殊情况，出于提高传输效率和避免潜在bug的考量，我们在处理时将图像名称替换成我们为用户生成的id，以便统一处理。
字节填充的考量：由于我们采用特殊分隔符号对头部进行分割，而图像中有可能存在与特殊分隔符相同的字节，因此我们考量了是否需要填充转义字符来避免冲突。但是，图像数据包往往较大，如果采用遍历填充转义字符的方式，处理效率会很低，因此我们最终采用了固定头部字段数量的方式，并且将头部字段中的值均定义为除特殊分隔符号以外的数值或字母的ASCII码，加以一定的编程技巧，最终无需对图像填充转义字符即可实现，提高了处理效率。
Version1.0协议没有考虑对各类状态进行传递，因此我们在附录中更新了协议Version1.1版本，加入了对于各类错误状态的考量。
【传输层协议的选择】
socket分为基于TCP的流式socket、基于udp的数据报socket和基于IP协议的原始socket。我们无法容忍传输的图像内容出现错误，故选择 TCP 作为传输层协议。此外，由于 TCP 提供可靠传输服务，我们无需在应用层协议中对图像相关信息的正确性、完整性等方面进行校验。因此应用层协议也就不包含校验码部分。
【多线程并发】
考虑到在同一时间可能会有多个用户访问服务，为了更好的用户体验，我们采用多线程并发技术，每个客户端连接都会创建一个新的线程来处理，并使用线程锁来保证线程安全，特别是在修改共享资源时。此外我们在代码中维护了一个用户id池，保证每个客户端连接都被分配一个唯一的id，用于标识和管理客户端连接。
【端口绑定和解绑】
在测试时，我们一开始遇到了端口已被使用的错误，排查后发现是因为在退出程序时，服务器端没有解绑端口，为此我们编写了handle_exit 函数，为 server 脚本添加垃圾回收机制，确保在程序退出时，所有的资源（包括客户端和服务端的socket对象）都被正确地释放。
后端服务器
【图像处理方法】
在后端的高性能服务器上，我们部署了如下六个图像处理方法：
其中Sharpen和Denoise算法为自行实现，GFPGAN, Colorize使用了开源模型。
【main.py逻辑】
程序统筹调用：由于这些开源算法的作者自行设定了调用算法的启动命令，手动修改、统一其命令过于复杂，为了实现方便，我们在一个 python 脚本 main 中使用subprocess.run调用多个外部程序。
图像类型转换：由于有些模型只能处理jpg和png类型的图像，为了提高我们平台所能处理图像格式的多样性，针对其他类型的图片，我们在main.py的开始统一转成jpg格式，从而达成了对各种图像类型的兼容。

前端服务器
【脚本处理】
前端网页服务会对用户上传的文件进行类型检查，并将正确上传的图像文件保存在一个指定目录中，接着调用 client 端服务脚本，与后端服务器建立 TCP 连接，按照我们制定的私有图像传输协议，将图像发送给 server 脚本，待 server 脚本处理完成后，再依次接收 server 回传的图像。



【网页部署】
APache2
网页端我们使用了 apache2 来提供网页服务。
在部署 apache2 时我们遇到了一定的困难，即按照默认流程安装好之后，直接使用 php 语言是无法调用我们自行写出的 python 脚本的。经过查阅，这涉及到 apache2 底层的服务实现：所有 apache2 的服务在服务器上都是由一个默认权限较低的 Liunx 用户来执行的，一般名称为
apache 或 www-data。在 Liunx 系统中调高该用户的权限之后，即可正常调用和访问服务器上的其他文件。
【动态响应式网页制作】
我们采用了Bootstrap这一动态响应式框架，并结合HTML、CSS和JavaScript等前端技术进行网页的构建和美化。对于前端需要实现的复杂逻辑，我们选择了PHP语言来处理，例如存储用户上传的图像和调用Python脚本等功能。这样的技术栈选择，既保证了网页的美观和用户体验，也满足了后端逻辑处理的需求。
【网页跳转逻辑】
在此简要介绍前端网页的跳转逻辑：
main.php 处理用户上传逻辑，跳转到 loading.php。
loading.php 显示加载界面，调用 working.php 页面。
working.php 实际上不会显示，而是会立即跳转至 result 界面。
为了区分不同的任务，每次在 loading 时会复制一份新的 result 界面，同时也方便用户可以重复访问之前的生成结果。

未来工作展望
【图像处理方法】
在未来还可以对项目支持的图像处理方法进行扩充，除了修复以外还可以考虑加入图像编辑、背景更换、人像美化等功能，更多元地满足用户需求。
【服务器部署】
此外，我们目前部署的是apache2服务器，最多支持http2，未来可以考虑部署到其他服务器上，增加对http3的支持。


【异步响应】
目前我们的平台是同步响应，用户等待时间稍微较长，未来可修改服务端代码，做到异步响应，即每跑出一个模型的结果就直接展示到结果界面。
【图片传输协议】
优化协议为持久连接。当同个用户多次请求处理图片时，无需多次建立TCP连接。

优化协议报文首部。目前报文首部格式为固定首部长度并使用分隔符区分字段，改进为固定字段长度会在面对大量小图片时更节省资源。                       
优化异常处理。目前我们项目对传输或处理中出现异常的处理较为薄弱，未来可以考虑在报文首部加入状态码，将各类异常状态（如算法运行失败等情况）告知前端，方便前端进行区分。

Version1.1内容：
 
图：请求报文(v1.1)
 
图：应答报文(v1.1)
主动探询机制：
考虑到如果后端服务器已经进入无法提供服务的错误状态后，前端服务器应当及时提醒用户，而不是等到用户上传完成后才发现服务器无法使用，本次协议修订在原先的基础请求、应答报文以外额外添加了探询机制。每隔一定时间（如5分钟），则前端服务器会主动向后端服务器发起探询消息，此时后端服务器使用对应报文回复前端服务器。如果后端服务器一定时间后无回应，或回复的状态码属于错误类型，则前端服务器可以及时在网页上提醒用户相关服务无法使用。

 
图：前端探询报文
 
图：探询回复报文
报文类型：在所有报文的最前面都应加上报文类型字段，从而区分请求报文、应答报文以及两种探询报文。由于本协议较为简单，此处只需要使用一字节，分别用1,2,3,4依次对应所有种类的报文即可。例如，如果后端服务器收到的报文的第一个字节为3，说明这是一条前端探询报文，则后端服务器只需根据当前状态回复一条探询回复报文即可。
组标识符：前文提到，我们希望一个用户处理多个请求时，可以不用多次创造不同的TCP连接，而是在同一个TCP连接上处理多次图片修复请求。因此每次修复请求完成后，服务端与客户端不会立即断开TCP连接，而是等待用户退出浏览器或超时后再关闭。这就要求我们用一组id标识符来确认每一报文属于同一用户的哪一请求。（组的概念：一次图片修复请求的请求内容、回复内容都为同一组）
状态码：为了让前端更好地识别错误类型，我们仿照http的状态码设计了我们自己的状态码，分别对应不同的响应情况。此字段统一占用3字节。
1xx 信息性状态码
•	100 ：客户端可以继续发送请求的剩余部分。
•	101 ：服务器根据客户端的请求切换使用的模型。
2xx 成功状态码
•	200 ：请求成功，返回图片内容
•	202 ：请求成功，但没有图片内容（仅在探询回复报文中使用）
4xx 客户端错误状态码
•	400 ：图片格式错误
•	401 ：图片无法打开
•	402 ：客户端网络问题
•	403 ：请求过于频繁（客户行为异常）
5xx 服务器错误状态码
•	501 ：后台GPU显存溢出
•	502 ：Cuda环境异常
•	503 ：Python环境异常
•	504 ：模型无图片输出
•	505 ：API 网络连接问题
•	506 ：找不到该模型（可能是错误删除或移动了模型的路径）
•	507 ：服务器后端未响应
•	508 ：服务端过载（同一时间客户端请求数目过多）
•	509 ：API 密钥错误

对于探询回复报文，如果一切正常，则可以使用 202状态码进行回复。否则回复其他错误状态码。



实践结果
下面列出用户视角的全流程：
1、访问主页: http://10.26.63.81  




2、点击start now! 按钮，跳转到图像上传界面。
 
3、选择好图像后，点击上传图像按钮。   
 



4、进入等待界面，等待服务器返回结果图像。 
  

5、 服务器处理完成后，自动跳转到对应的 result 页面。
 


6、向下划动，可以看到各个算法处理的结果预览图。 
 
7、点击对应结果的 "下载图像" 按钮，将触发浏览器的下载机制，向服务器发起下载图像的 http请求。下载完成后，即可得到服务器处理过后的图像。

 



8、如果生成出错，会跳转至workerror页面。 

 9、此外，我们也在网页上简要介绍了我们项目的工作流程，可以通过访问其他页面浏览，如：
 
实践感想
李哲彦
在这次计网课程项目的实践中，我作为本小组的组长，收获颇丰。
首先是项目的技术实现部分。本次实践我们主要分为了前后端两个服务器，他们具体实现哪些功能、怎么实现、用什么语言实现，都是我们小组要讨论与思考的问题。由于吸取了以前其他课程的大作业实践的教训，这次实践我们在实际写代码之前，经过了充分的讨论，采用了模块化设计的思想来各自完成自己的部分。这其实与计算机网络中 TCP/IP体系各个层级间的关系不谋而合：设计某一个模块（层级）时，只考虑自己当前这一模块（层级）的功能与实现方法，而不用去关注上层或其他模块（层级）的功能与具体实现方法。例如，在实现后端 server 通信模块与各个算法调用模块时，由于这两个模块均较为复杂，交给一个人来写在一个脚本中，不仅可读性差，还会导致工作量分配不均。因此，在实现算法调用模块时，按照约定提供了一个接口格式，通信模块直接调用即可启动后续算法。如此设计也可以方便多线程的实现。除此之外，对于前端网页的实现部分，我们自学了以前从未接触过的 php 脚本语言。这一语言是我们前端网页实现过程中极其重要的组成部分。
其次是与组员们的配合问题。在多人合作的项目中，沟通是一个极其重要的因素。只有良好的沟通才能让各个组员负责的部分在最后可以良好的拼接到一起。本次实践项目中，我们组事先沟通良好，每个人之间都有明确的分工界限。
总而言之，本次实践项目让我受益匪浅，将成为我大学生涯中的宝贵经历。
华圣佳
    在本次计网项目中，我们原打算复现一篇有关DDos攻击的论文，但由于某些不可抗的政策因素，我们拿不到所需的数据集，因此只好中途更换了选题。新的项目需要实现一个图像修复平台，在这一过程中我们需要分别学习前端和后端的相关知识，以及探究如何实现前后端的通信。最终我们采用课程所学的socket通信的方式并加以改进，辅以我们自定义的图片传输协议，实现了一个能并发响应多客户端请求的图像修复平台。
    最终一整个项目的完成，不仅使我学到了许多新的技术栈，积累了编程经验，更让我对团队的沟通与交流有了新的理解。在此感谢组长和其他组员们对项目的辛苦付出，很高兴借着这个项目结识了厉害的小伙伴们！
邹品聪
	在本次计网项目中，我实现了前后端的多线程 socket 通信以及部分前端 php 脚本。前后端通信部分中，我在原课程 socket 实验上更进一步，使用 python 语言实现了多线程的通信，相比于多进程而言更省资源；同时，根据我们图片传输的应用层需求，设计了图片自定的传输协议。在前端脚本部分，我学习并使用 php 脚本，成功实现了前端脚本的调用。
	综上，通过整个项目，我接触到了多线程的线程安全、原子操作以及线程锁等概念，设计图片传输协议也让我对计算机网络的应用层和传输层的理解更进一步，而最后 php 脚本的学习与尝试让我在前端学习上更进一步，受益匪浅。
连亮瑜
在这次计算机网络与通信课程的实验作业中，我为能够同队长和几位队友一起制作这个项目，感到非常荣幸。
这次的项目属于论文复现，整个实现的过程十分顺利而且收获颇丰。在选题方面，我们查阅了大量已有论文，在分析了可行性和制作意义之后，在老师建议之下选择了这个传输微型服务器的制作。在接下来的实现过程中，我们经历了创建服务器，核心算法的调用与补充，前端网页的建立等等诸多过程，我们一起查阅了诸多有用的算法和模板，在大家合理的分工合作之下成功地完成了这个图片修复的网站的制作。成品网站看着比较小，但是整个服务器倾注了我们大量的心血，我也充分体会了网站制作的不容易。这也让我们更加充分地了解了网站前后端服务器通信的原理，以及一些实用的技巧，比如python和php语言的使用以及不同算法和模块的分工合作等等。
由于自身能力和知识储备的受限，我在这次项目的参与程度不算很高，但也积极配合整个小组参与了前端网页的制作。在这次被大佬带飞的过程中带给了我极大的收获，也对我个人水平有了较大的提升，积累了足够的经验和知识储备，受益匪浅。


人员分工
李哲彦：
前后端服务器基础配置、后端算法部署、前端网页与php脚本实现、图片传输协议制定、项目报告撰写
华圣佳：
后端部分算法、模型和api部署，前端main页面制作，流程图绘制，ppt制作，项目报告修改完善
邹品聪：
前后端多线程socket通信、图片传输协议制定、前端php脚本
连亮瑜：
整理模型信息，制作鸣谢页面

