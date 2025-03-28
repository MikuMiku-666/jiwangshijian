<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/slick/slick.css" rel="stylesheet">
    <link href="assets/vendors/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/vendors/elagent-icon/style.css" rel="stylesheet">
    <link href="assets/vendors/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="assets/vendors/icomoon/style.css" rel="stylesheet">
    <link href="assets/vendors/themify-icon/themify-icons.css" rel="stylesheet">
    <link href="assets/vendors/animation/animate.css" rel="stylesheet">
    <link href="assets/vendors/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/vendors/themify-icon/themify-icons.css" rel="stylesheet">
    <link href="assets/vendors/ui-fliter/jquery-ui.css" rel="stylesheet">
    <link href="assets/vendors/nice-select/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <title>Bookjar</title>
</head>

<body data-scroll-animation="true">
    

    <div class="body_wrapper">

        <div class="toast-container position-fixed p-3">
            <div id="cartToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Cart Update</strong>
                    <small>just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Item added to the cart!
                </div>
            </div>
        </div>

        <header class="header_area header_relative">
            <nav class="navbar navbar-expand-lg menu_one" id="header">
                <div class="container">
                    
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ms-auto me-auto">
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="index.html" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    HOME
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Two</a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>
                        
                       
                    </div>
                </div>
            </nav>
        </header>

        <!-- breadcrumb area  -->
        <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
            <div class="bg_one" data-bg-image="assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
            <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="assets/img/breadcrumb/book_left1.png" alt="">
            </div>
            <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="assets/img/breadcrumb/book-left2.png" alt="">
            </div>
            <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="assets/img/breadcrumb/plane-1.png" alt="">
            </div>
            <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="assets/img/breadcrumb/plan-3.png" alt="">
            </div>
            <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 80}' src="assets/img/breadcrumb/plan-2.png" alt="">
            </div>
            <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -60}' src="assets/img/breadcrumb/book-right.png" alt="">
            </div>
            <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"x": 50}' src="assets/img/breadcrumb/book-right2.png" alt="">
            </div>
            <div class="container">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Book Shope</h2>
                <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop Single</li>
                </ol>
            </div>
        </section>
        <!-- breadcrumb area  -->
        <section class="product_details_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row gy-xl-0 gy-3">
                    <div class="col-xl-12">
                        <div class="bj_book_single me-xl-3">
                            <div class="bj_book_img flip">
                                <div class="front"><img class="img-fluid" src="assets/img/book-single1.jpg" alt="">
                                </div>
                                <div class="back"><img class="img-fluid" src="assets/img/book-single.jpg" alt=""></div>
                                <div class="pr_ribbon">
                                    <span class="product-badge">New</span>
                                </div>
                            </div>
                            <div class="bj_book_details">
                                <h2>A Storytelling Workbook</h2>
                                <ul class="list-unstyled book_meta">
                                    <li>By:<a href="author-single.html">Phillip Siphron</a></li>
                                    <li>Category:<a href="shop-sidebar.html">Drama</a></li>
                                    <li>Tag:<a href="shop-sidebar.html">Best Sellers</a></li>
                                </ul>
                                <div class="ratting review">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-stroke"></i>
                                        <span>4.5</span>
                                    </div>
                                    <a href="#product_review" class="woocommerce-review-link">
                                        <span class="count"> 50 </span>Reviews
                                    </a>
                                </div>
                                <div class="price">$10</div>
                                <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed
                                    quia consequuntur.</p>
                                <ul class="product_meta list-unstyled">
                                    <li><span>Publisher:</span>Avery</li>
                                    <li><span>Publication date:</span>July 20, 2024</li>
                                    <li><span>Print length:</span>320 pages</li>
                                    <li><span>ISBN:</span>3288365629</li>
                                    <li><span>Language:</span>English</li>
                                </ul>
                                <div class="d-flex">
                                    <a href="#" class="bj_theme_btn strock_btn flip_btn">Flip to Back</a>
                                    <a href="http://www.googleguide.com/print/adv_op_ref.pdf" class="bj_theme_btn strock_btn gallerypdf"><i class="fa-regular fa-eye"></i>
                                        Look inside</a>
                                </div>


                                <div class="single_product_price_variation">
                                    <label class="variation_single">
                                        <input class="variation_single_input" name="variation_single" type="radio" checked>
                                        <span class="price-details">
                                            <span class="price-type">Handcover</span>
                                            <span class="price-cost">$10</span>
                                        </span>
                                    </label>
                                    <label class="variation_single">
                                        <input class="variation_single_input" name="variation_single" type="radio">
                                        <span class="price-details">
                                            <span class="price-type">eBook</span>
                                            <span class="price-cost">$20</span>
                                        </span>
                                    </label>
                                    <label class="variation_single">
                                        <input class="variation_single_input" name="variation_single" type="radio">
                                        <span class="price-details">
                                            <span class="price-type">Print</span>
                                            <span class="price-cost">$30</span>
                                        </span>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="bj_book_single_tab_area me-xl-3">
                            <ul class="nav nav-tabs bj_book_single_tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="product_description-tab" data-bs-toggle="tab" data-bs-target="#product_description" type="button" role="tab" aria-controls="product_description" aria-selected="true">Product
                                        Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="product_aurhor_desc-tab" data-bs-toggle="tab" data-bs-target="#product_aurhor_desc" type="button" role="tab" aria-controls="product_aurhor_desc" aria-selected="false">About Author</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="product_review-tab" data-bs-toggle="tab" data-bs-target="#product_review" type="button" role="tab" aria-controls="product_review" aria-selected="false">Review</button>
                                </li>
                            </ul>
                            <div class="tab-content bj_book_single_tab_content mt-4">
                                <div class="tab-pane fade show active" id="product_description" role="tabpanel" aria-labelledby="product_description-tab">
                                    <div class="product_book_content_details">
                                        <div>
                                            <h5 class="content_header mb-2">Key benefits</h5>
                                            <ul class="content_text mb-2">
                                                <li>
                                                    Third edition of the bestselling, widely acclaimed Python machine
                                                    learning book
                                                </li>
                                                <li>
                                                    Clear and intuitive explanations take you deep into the theory and
                                                    practice of Python machine learning
                                                </li>
                                                <li>
                                                    Fully updated and expanded to cover TensorFlow 2, Generative
                                                    Adversarial
                                                    Network models, reinforcement learning, and best practices
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="content_header mb-2">Description</h5>
                                            <p class="content_text mb-2">Python Machine Learning, Third Edition is a
                                                comprehensive guide to machine learning and deep learning with Python.
                                                It
                                                acts as both a step-by-step tutorial, and a reference you'll keep coming
                                                back to as you build your machine learning systems.
                                                Packed with clear explanations, visualizations, and working examples,
                                                the
                                                book covers all the essential machine learning techniques in depth.
                                                While
                                                some books teach you only to follow instructions, with this machine
                                                learning
                                                book, Raschka and Mirjalili teach the principles behind machine
                                                learning,
                                                allowing you to build models and applications for yourself.
                                                Updated for TensorFlow 2.0, this new third edition introduces readers to
                                                its
                                                new Keras API features, as well as the latest additions to scikit-learn.
                                                It's also expanded to cover cutting-edge reinforcement learning
                                                techniques
                                                based on deep learning, as well as an introduction to GANs. Finally,
                                                this
                                                book also explores a subfield of natural language processing (NLP)
                                                called
                                                sentiment analysis, helping you learn how to use machine learning
                                                algorithms
                                                to classify documents.
                                                This book is your companion to machine learning with Python, whether
                                                you're
                                                a Python developer new to machine learning or want to deepen your
                                                knowledge
                                                of the latest developments.</p>
                                        </div>
                                        <div>
                                            <h5 class="content_header mb-2">What you will learn</h5>
                                            <ul class="content_text mb-2">
                                                <li>
                                                    Master the frameworks, models, and techniques that enable machines
                                                    to
                                                    learn from data
                                                </li>
                                                <li>
                                                    Use scikit-learn for machine learning and TensorFlow for deep
                                                    learning
                                                </li>
                                                <li>
                                                    Apply machine learning to image classification, sentiment analysis,
                                                    intelligent web applications, and more
                                                </li>
                                                <li>
                                                    Build and train neural networks, GANs, and other models
                                                </li>
                                                <li>
                                                    Discover best practices for evaluating and tuning models
                                                </li>
                                                <li>
                                                    Predict continuous target outcomes using regression analysis
                                                </li>
                                                <li>
                                                    Dig deeper into textual and social media data using sentiment
                                                    analysis
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_aurhor_desc" role="tabpanel" aria-labelledby="product_aurhor_desc-tab">
                                    <div class="tab_slider_content">
                                        <div class="bj_author_single d-flex align-items-center">
                                            <img src="assets/img/home/author.jpg" alt="">
                                            <div class="bj_author_single_content">
                                                <h2>Phillip Siphron</h2>
                                                <p>Diam, urna, ornare leo facilisis suspendisse eu rutrum id
                                                    augue
                                                    cursus tincidunt nisl eget ornare pharetra ac pharetra,
                                                    pulvinar
                                                    ipsum.
                                                </p>
                                                <ul class="book_info">
                                                    <li><span>Position:</span> Book Writer</li>
                                                    <li><span>Book Count:</span>23</li>
                                                    <li><span>Born:</span>1973</li>
                                                    <li><span>Category:</span><a href="#">Biography,</a><a href="#">Fantasy,</a><a href="#">Sci-Fi</a></li>
                                                    <li><span>Language:</span><a href="#">English,</a><a href="#">German</a>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled f_social_round">
                                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa-brands fa-reddit"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-brands fa-quora"></i></a>
                                                    </li>
                                                </ul>
                                                <a href="author-single.html" class="bj_theme_btn text_btn">More
                                                    Details<i class="arrow_right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_review" role="tabpanel" aria-labelledby="product_review-tab">
                                    <div class="reviews-item " id="scrollspyReviews">
                                        <div class="d-flex flex-wrap justify-content-between mb-40 gap-3">
                                            <h4 class="review-title d-flex flex-wrap">50 Reviews <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.9</span></h4>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fas fa-edit"></i>Write a Review
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog  modal-dialog-centered">
                                                        <div class="modal-content modal-item">
                                                            <div class="modal-header border-0 p-0">
                                                                <h4 class="modal-title mb-50" id="exampleModalLabel">
                                                                    Hello
                                                                    Jason</h4>
                                                                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
                                                            </div>
                                                            <div class="d-flex admin-content">
                                                                <div class="user-img">
                                                                    <img src="assets/img/profile-img.png" alt="Admin">
                                                                </div>
                                                                <div>
                                                                    <p class="admin-title">Corey Baptista</p>
                                                                    <p class="admin-sub-title">Posting publicly
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="star-icon">
                                                                <div class="dynamic-star-rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>

                                                                </div>
                                                                <input type="hidden" name="rating" class="dynamic-star-rating-input" value="0">
                                                                <textarea class="admin-text form-control dynamic-rating-text" placeholder="Share details of your own experience at this place" cols="30" rows="5"></textarea>
                                                            </div>
                                                            <div class="admin-galley">
                                                                <label for="formAdminImgFile">
                                                                    <i class="fas fa-image"></i>
                                                                </label>
                                                                <input class="d-none" id="formAdminImgFile" type="file">
                                                            </div>
                                                            <div class="modal-footer border-0">
                                                                <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="post-btn">Post</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-lg-0 gy-3">
                                            <div class="col-lg-5">
                                                <div class="your-rating-review">
                                                    <h5>Your rating & review</h5>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>

                                                    </div>
                                                    <p class="review">Good book, I understood many important theories
                                                        from the book.</p>
                                                    <button type="button" class="bj_theme_btn strock_btn btn_small_two" data-bs-toggle="modal" data-bs-target="#editReviewModal">Update
                                                        Your
                                                        Review</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editReviewModal" tabindex="-1" aria-labelledby="editReviewModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog  modal-dialog-centered">
                                                            <div class="modal-content modal-item">
                                                                <div class="modal-header border-0 p-0">
                                                                    <h4 class="modal-title mb-50" id="editReviewModalLabel">
                                                                        Hello
                                                                        Jason</h4>
                                                                    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
                                                                </div>
                                                                <div class="d-flex admin-content">
                                                                    <div class="user-img">
                                                                        <img src="assets/img/profile-img.png" alt="Admin">
                                                                    </div>
                                                                    <div>
                                                                        <p class="admin-title">Corey Baptista</p>
                                                                        <p class="admin-sub-title">Posting publicly
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="star-icon">
                                                                    <div class="dynamic-star-rating">
                                                                        <i class="fas fa-star active"></i>
                                                                        <i class="fas fa-star active"></i>
                                                                        <i class="fas fa-star active"></i>
                                                                        <i class="fas fa-star active"></i>
                                                                        <i class="fas fa-star active"></i>

                                                                    </div>
                                                                    <input type="hidden" name="rating" class="dynamic-star-rating-input" value="0">
                                                                    <textarea class="admin-text form-control dynamic-rating-text" placeholder="Share details of your own experience at this place" cols="30" rows="5">Good book, I understood many important theories from the book.</textarea>
                                                                </div>
                                                                <div class="admin-galley">
                                                                    <div class="gallery-item">
                                                                        <button class="delete-btn"><i class="fa-regular fa-trash-can"></i></button>
                                                                        <img src="./assets/img/shop/best_book1.jpg" alt="">
                                                                    </div>

                                                                    <label for="formAdminImgFile2">
                                                                        <i class="fas fa-image"></i>
                                                                    </label>
                                                                    <input class="d-none" id="formAdminImgFile2" type="file">
                                                                </div>
                                                                <div class="modal-footer border-0">
                                                                    <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="post-btn">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <ul class="reviews-box list-unstyled">
                                                    <li class="d-flex">5 Stars <span><span></span></span> (35)</li>
                                                    <li>4 Stars <span><span></span></span> (10)</li>
                                                    <li>3 Stars <span><span></span></span> (3)</li>
                                                    <li>2 Stars <span><span></span></span> (2)</li>
                                                    <li>1 Stars <span><span></span></span> (0)</li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="review-content">
                                            <div class="d-flex flex-sm-row flex-column justify-content-between gap-3 mb-40">
                                                <h4>Reviews</h4>
                                                <div class="review-right">
                                                    <div class="sorting-select review-sort selectpickers">
                                                        <select id="sort-select">
                                                            <option value="SortBy Newest" selected>Relevent</option>
                                                            <option value="SortBy Oldest">Newest </option>
                                                            <option value="SortBy Popular">Oldest</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-md-flex">
                                                <div>
                                                    <img class="admin-img" src="assets/img/profile-img.png" alt="Admin">
                                                </div>
                                                <div class="review-text">
                                                    <p class="r-title sub-regular-2">Muaz Bin</p>
                                                    <div class="r-icon">
                                                        <div>
                                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 5
                                                        </div>
                                                        <span>⋅ Nov 5, 2021</span>
                                                    </div>
                                                    <p class="small-2">A Storytelling Workbook is a gem for anyone looking to enhance their narrative skills! The exercises are engaging and practical, making it easy to dive into storytelling with confidence. A must-have for aspiring writers!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-md-flex">
                                            <div>
                                                <img class="admin-img" src="assets/img/profile-img.png" alt="Admin">
                                            </div>
                                            <div class="review-text">
                                                <p class="r-title sub-regular-2">Ryan Aminoff</p>
                                                <div class="r-icon">
                                                    <div>
                                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 5
                                                    </div>
                                                    <span>⋅ Nov 5, 2021</span>
                                                </div>
                                                <p class="small-2 mb-30">A Storytelling Workbook is a fantastic resource for honing storytelling skills! It's packed with creative exercises that spark inspiration and help build strong narrative techniques. Highly recommended for writers at any level!</p>
                                                <div class="d-flex flex-wrap review-img">
                                                    <a data-fancybox="gallery" href="./assets/img/shop/best_book1.jpg"><img src="./assets/img/shop/best_book1.jpg" alt="Image"></a>
                                                    <a data-fancybox="gallery" href="./assets/img/shop/best_book2.jpg"><img src="./assets/img/shop/best_book2.jpg" alt="Image"></a>
                                                    <a data-fancybox="gallery" href="./assets/img/shop/best_book3.jpg"><img src="./assets/img/shop/best_book3.jpg" alt="Image"></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>



        <section class="bj_frequently_bought_area sec_padding pt-0" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_two">Frequently Bought Together</h2>
                    <p>Get Special Promo All Books Are 50% Off Now!</p>
                </div>
                <div class="row gy-xl-0 gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="bj_new_pr_item mb-0 wow fadeInUp" data-wow-delay="0.2s">
                            <label class="select-box" for="fbt-box-1">

                                <input type="checkbox" class="form-check-input" id="fbt-box-1" checked>
                            </label>

                            <a href="#" class="img"><img src="assets/img/home/book5.jpg" alt="book"></a>
                            <div class="bj_new_pr_content">
                                <a href="product-single.html">
                                    <h4 class="bj_new_pr_title">The Sun And The Star</h4>
                                </a>
                                <div class="bj_pr_meta d-flex">
                                    <div class="norm_text">Dec 2019</div>
                                    <div class="norm_text">77 pages</div>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i> <span>4.7</span>
                                    </div>
                                </div>
                                <div class="product_varaiation">
                                    <select class="selectpickers">
                                        <option value="" data-img="./assets/img/shop/ereader.png">eBook</option>
                                        <option value="" data-img="./assets/img/shop/book.png">paperback</option>
                                    </select>
                                    <div class="book_price mt-2"><del class="me-2">410</del> $100</div>
                                </div>
                                <button type="button" class="bj_theme_btn strock_btn add-to-cart-automated" data-name="The Sun And The Star" data-price="125" data-mrp="350" data-img="assets/img/home/book5.jpg">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="bj_new_pr_item mb-0 wow fadeInUp" data-wow-delay="0.3s">
                            <label class="select-box" for="fbt-box-2">
                                <input type="checkbox" class="form-check-input" id="fbt-box-2" checked>
                            </label>

                            <a href="#" class="img"><img src="assets/img/home/book6.jpg" alt="book"></a>
                            <div class="bj_new_pr_content">
                                <a href="product-single.html">
                                    <h4 class="bj_new_pr_title">The Most Fun</h4>
                                </a>
                                <div class="bj_pr_meta d-flex">
                                    <div class="norm_text">Oct 2024</div>
                                    <div class="norm_text">55 pages</div>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i> <span>4.7</span>
                                    </div>
                                </div>
                                <div class="product_varaiation">
                                    <select class="selectpickers">
                                        <option value="" data-img="./assets/img/shop/ereader.png">eBook</option>
                                        <option value="" data-img="./assets/img/shop/book.png">paperback</option>
                                    </select>
                                    <div class="book_price mt-2"><del class="me-2">410</del> $100</div>
                                </div>
                                <button type="button" class="bj_theme_btn strock_btn add-to-cart-automated" data-name="The Sun And The Star" data-price="125" data-mrp="250" data-img="assets/img/home/book6.jpg">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="bj_new_pr_item mb-0 wow fadeInUp" data-wow-delay="0.4s">
                            <label class="select-box" for="fbt-box-3">

                                <input type="checkbox" class="form-check-input" id="fbt-box-3" checked>
                            </label>

                            <a href="#" class="img"><img src="assets/img/home/book7.jpg" alt="book"></a>
                            <div class="bj_new_pr_content">
                                <a href="product-single.html">
                                    <h4 class="bj_new_pr_title">The Magic and Fear</h4>
                                </a>
                                <div class="bj_pr_meta d-flex">
                                    <div class="norm_text">Jan 2010</div>
                                    <div class="norm_text">27 pages</div>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i> <span>4.7</span>
                                    </div>
                                </div>
                                <div class="product_varaiation">
                                    <select class="selectpickers">
                                        <option value="" data-img="./assets/img/shop/ereader.png">eBook</option>
                                        <option value="" data-img="./assets/img/shop/book.png">paperback</option>
                                    </select>
                                    <div class="book_price mt-2"><del class="me-2">410</del> $100</div>
                                </div>
                                <button type="button" class="bj_theme_btn strock_btn add-to-cart-automated" data-name="The Sun And The Star" data-price="125" data-mrp="250" data-img="assets/img/home/book7.jpg">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-sm-6">
                        <div class="added_cart_total">
                            <h4 class="mt-auto">Total</h4>
                            <div class="price">$265</div>
                            <del>$740</del>
                            <div>$375.00 saved</div>
                            <a href="" class="bj_theme_btn w-100 mt-auto">Add selected to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer area -->
        <footer class="bj_footer_area_two bj_footer_area_four" data-bg-color="#212833">
            <div class="container">
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pe-4">
                                <a href="#" class="f_logo">
                                    <img src="assets/img/home/logo-white.svg" alt="f_logo">
                                </a>
                                <div class="footer_subscribes">
                                    <h2 class="f_widget_title">Subscribe Now</h2>
                                    <form action="#">
                                        <div class="footer_subscribe_form">
                                            <input type="text" placeholder="Enter your Email" class="form-control">
                                            <button type="submit" class="bj_theme_btn">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget">
                                <h2 class="f_widget_title">Company</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="author.html">Author</a></li>
                                    <li><a href="book-listing.html">Books</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget">
                                <h2 class="f_widget_title">Services</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="my-orders.html">Order</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget">
                                <h2 class="f_widget_title">Pages</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="registration.html">Register</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="my-ebook-library.html">Ebook Library</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget">
                                <h2 class="f_widget_title">Contacs Us</h2>
                                <ul class="list-unstyled list">
                                    <li><a href="tel:610383766284"><i class="fa-solid fa-phone-volume"></i>+61 (0) 3
                                            8376 6284</a></li>
                                    <li><a href="mailto:noreply@bookjar.com"><i class="fa-solid fa-envelope"></i>noreply@bookjar.com</a></li>
                                </ul>
                                <ul class="list-unstyled f_social_round">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom d-flex  justify-content-center">
                    <p>© 2024 Bookjar. All Rights <a href="https://www.bootstrapmb.com">bootstrapMB</a></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <style>
        #preloader {
            display: none;
        }
    </style>
    <!-- <script src="assets/js/preloader.js"></script> -->
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/parallax/parallax.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/js/comming-soon.js"></script>
    <script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/vendors/ui-fliter/jquery-ui.js"></script>
    <script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/vendors/wow/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>