报告书（项目简介）： https://mikumiku-666.github.io/AttachFiles/NetworkExp/Readme.docx

### 如何部署？

一台前端低性能服务器，安装 Ubuntu Apache2 网页服务工具（确保可以支持 php，并将 Apache2 用户设置为高权限。设置为管理员可以一劳永逸，但存在一点风险~~）。

一台后端高性能服务器，安装 Ubuntu，与相关CUDA环境。

将前端部分的代码直接放入前端服务器的 Apache2 根目录下。
后端由于引用了其他开源项目，需要按照开源项目的安装方法调整 Python 环境。

最后，将代码中涉及到前后端通信部分的 ip 地址进行修改。

