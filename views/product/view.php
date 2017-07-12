<?php include  ROOT. '/views/layout/header.php'; ?>

<div class="sliding-nav">
        <a class="close-sliding-nav" href="#">Close nav</a>
        <nav class="slide-nav-list">
            <ul>
                <li class="parent">
                    <a href="javascript:return;">Demos</a>
                    <ul>
                        <li><a href="home2.html">Demo1 - Focus</a></li>
                        <li><a href="home3.html">Demo2 - Expressive</a></li>
                        <li><a href="home4.html">Demo3 - Minimal</a></li>
                        <li><a href="home5.html">Demo4 - Fancy</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Classified</a>
                    <ul>
                        <li><a href="home-default.html">Home</a></li>
                        <li><a href="listing.html">Ads Archive</a></li>
                        <li><a href="single.html">Ad Single</a></li>
                        <li><a href="create.html">Create Ad</a></li>
                        <li><a href="dashboard.html">Dashboard</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a  href="javascript:return;">Shop</a>
                    <ul>
                        <li><a href="shop-index.html">Shop Home</a></li>
                        <li><a href="shop-listing.html">Archive</a></li>
                        <li><a href="shop-single.html">Single</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a  href="javascript:return;">Pages</a>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="terms.html">Terms</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a  href="javascript:return;">Shortcodes</a>
                    <ul>
                        <li><a href="elements-shortcodes.html">Elements</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="elements-bootstrap.html">Bootstrap Components</a></li><li><a href="buttons.html">Buttons</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <div class="mobile-menu-wrap">
        <a href="#" class="closeMobilMenu">close the mobile menu</a>
        <div class="mobile-menu">
            <div class="search-widget">
                <input type="text" placeholder="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            <ul class="menu-list">
                <li><a href="create.html">Create an Ad</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="listing.html">Ads Listing Page</a></li>
                <li><a href="how-adspot-works.html">How this works</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="shop-index.html">Shop Page</a></li>
                <li><a href="shop-listing.html">Shop Archive</a></li>
                <li><a href="cart.html">Cart Page</a></li>
                <li><a href="checkout.html">Checkout Page</a></li>
                <li><a href="elements-shortcodes.html">Checkout Page</a></li>
            </ul>
        </div>
    </div>

    <div class="app-canvas">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">automobiles</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><?php echo $product['name']; ?></li>
                </ul>
            </div>

            <div class="item-single row">

                <div class="item-content col-xs-12 col-sm-7 col-md-8">

                    <article class="inner">
                        <header>
                            <ul class="info-icons">
                                <li><a href="#" class="fa fa-envelope tooltip-parent">
                                        <span class="tooltip">Send Message</span>
                                    </a></li>
                                <li><a href="#" class="fa fa-phone tooltip-parent">
                                        <span class="tooltip">Mobile Number</span>
                                    </a></li>
                                <li><a href="#" class="fa fa-heart tooltip-parent">
                                        <span class="tooltip">save ad</span>
                                    </a></li>
                            </ul>
                            <h1><?php echo $product['name']; ?></h1>
                            <ul class="info-list">
                                <li><i class="fa fa-map-marker"></i><a href="#">Melbourne</a></li>
                                <li><i class="fa fa-clock-o"></i>2:49 pm</li>
                                <li><i class="fa fa-bookmark"></i>ID: 13030978</li>
                            </ul>
                        </header>
                        <div class="item-gallery-slider">
                            <div class="item-lg-images">
                                <a href="#" class="trigger-gallery"><i class="adicon-expand"></i></a>
                                <div class="slick-carousel slick-lg-images" data-asnav=".slick-sm-images" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="true">
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg1.jpg" alt="dummy">
                                    </div>
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg2.jpg" alt="dummy">
                                    </div>
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg3.jpg" alt="dummy">
                                    </div>
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg4.jpg" alt="dummy">
                                    </div>
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg5.jpg" alt="dummy">
                                    </div>
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg6.jpg" alt="dummy">
                                    </div>
                                    <div class="item-lg-thumb imgAsBg">
                                        <img src="/template/assets/img/lg7.jpg" alt="dummy">
                                    </div>
                                </div>
                            </div>
                            <div class="item-sm-images">
                                <div class="slick-carousel slick-sm-images" data-focus="true" data-asnav=".slick-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg1.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg2.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg3.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg4.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg5.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg6.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg7.jpg" alt="dummy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="full-width-gallery">
                            <div class="inner">
                                <div class="container">
                                    <div class="gallery-lg-area">
                                        <a href="#" class="close-lg-gallery"><i class="fa fa-close"></i></a>
                                        <div class="slick-carousel slick-gallery-lg-images" data-asnav=".slick-gallery-thumbs" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="false">
                                            <div class="item-lg-thumb">
                                                <img src="/template/assets/img/lg1.jpg" alt="dummy">
                                            </div>
                                            <div class="item-lg-thumb">
                                                <img src="/template/assets/img/lg2.jpg" alt="dummy">
                                            </div>
                                            <div class="item-lg-thumb">
                                                <img src="/template/assets/img/lg3.jpg" alt="dummy">
                                            </div>
                                            <div class="item-lg-thumb">
                                                <img src="/template/assets/img/lg4.jpg" alt="dummy">
                                            </div>
                                            <div class="item-lg-thumb">
                                                <img src="/template/assets/img/lg5.jpg" alt="dummy">
                                            </div>
                                            <div class="item-lg-thumb ">
                                                <img src="/template/assets/img/lg6.jpg" alt="dummy">
                                            </div>
                                            <div class="item-lg-thumb ">
                                                <img src="/template/assets/img/lg7.jpg" alt="dummy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-thumbs">
                                    <div class="container">
                                        <div class="gallery-thumbs-inner">
                                            <div class="slick-carousel slick-gallery-thumbs" data-focus="true" data-asnav=".slick-gallery-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg1.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg2.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg3.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg4.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg5.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg6.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                                <div class="item-sm-thumb">
                                                    <div class="imgAsBg">
                                                        <img src="/template/assets/img/lg7.jpg" alt="dummy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quick-info">
                            <ul class="clearfix">
                                <li>
                                    <div class="inner clearfix">
                                        <span class="label">Brand Name</span>
                                        <span class="desc">Apple</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner clearfix">
                                        <span class="label">Product Model</span>
                                        <span class="desc">iphone se</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner clearfix">
                                        <span class="label">Release Year</span>
                                        <span class="desc">2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner clearfix">
                                        <span class="label">Condition</span>
                                        <span class="desc">Used</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner clearfix">
                                        <span class="label">Color</span>
                                        <span class="desc">silver</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner clearfix">
                                        <span class="label">Located In</span>
                                        <span class="desc">2016</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="text-widget">
                            <header><h4>Product Description</h4></header>
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Chasellus porttitor non lectus ut lacinia ras in metus est. Proin non orci massa roin auctor ultricies mauris nec tincidunt mi imperdiet pendisse id tempor nisi nec laoreet lorem tiam congue tempus convallis.</p>
                                <p>Condition 10/10<br>
                                    White color<br>
                                    32gb internal memory<br>
                                    3gb RAM<br>
                                    Model SM-N9005 (4G/LTE)<br>
                                    All accessories (box, hands-free, charger, data cable)<br>
                                    Not refurb, Not copy, original samsung phone</p>
                                <p>Proin non orci massa roin auctor ultricies mauris nec tincidunt mi imperdiet uspendisse id tempor nisi nec laoreet lorem tiam congue tempus convallis.</p>
                            </div>
                        </div>
                        <footer>
                            <div class="inner row">
                                <div class="col-xs-12 col-md-4">
                                    <span class="item-views"> <i class="fa fa-eye"></i> Ad Views: 4698</span>
                                </div>
                                <div class="col-xs-12 col-md-8 text-right-md">
                                    Do you have something to sell? <a href="#">Post Your FREE Ad Today</a>
                                </div>


                            </div>
                        </footer>
                    </article>

                    <div class="email-alerts">
                        <div class="inner clearfix">
                            <div class="col-xs-12 col-md-7">
                                <h4>Create Ad Alert</h4>
                                <p>Set your Alerts for Iphone City in United Kingdom
                                    and we will email you relevant ads.</p>
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <form action="/">
                                    <div class="field-block-md">
                                        <div class="labeled-input">
                                            <label>Email address</label>
                                            <input title="enter your email" type="email">
                                        </div>
                                    </div>
                                    <div class="field-block-md">
                                        <div class="radio-dropdown wide">
                                            <i class="fa fa-bars"></i>
                                            <button>Frequency</button>
                                            <ul>
                                                <li class="custom-radio">
                                                    <input type="radio" id="create0021" name="item-brand-name">
                                                    <label for="create0021">Once a day</label>
                                                </li>
                                                <li class="custom-radio">
                                                    <input type="radio" id="create0031" name="item-brand-name">
                                                    <label for="create0031">Once a week</label>
                                                </li>
                                                <li class="custom-radio">
                                                    <input type="radio" id="create0041" name="item-brand-name">
                                                    <label for="create0041">Twice a month</label>
                                                </li>
                                                <li class="custom-radio">
                                                    <input type="radio" id="create0051" name="item-brand-name">
                                                    <label for="create0051">Once a month</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="field-block-md">
                                        <button class="btn btn-small btn-blue block-element danger-hover">Create Alert</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="items-list-md single-similar-items">
                        <h4>Similar ads</h4>
                        <div class="items-list">
                            <article class="item-spot">
                                <a href="#" class="imgAsBg">
                                    <img src="/template/assets/img/items/ad1.png" alt="dummy data">
                                </a>
                                <div class="item-content">
                                    <header>
                                        <h5><a href="single.html">Canon SX Powershot A Great D-SLR</a></h5>
                                        <span class="item-info-short">2:49 pm in Melbourne</span>
                                    </header>
                                    <div class="price-tag">$229.9</div>
                                    <div class="item-actions text-center">
                                        <ul class="contact-options">
                                            <li><a href="#" class="fa fa-envelope tooltip-parent">
                                                    <span class="tooltip">Send Message</span>
                                                </a></li>
                                            <li><a href="#" class="fa fa-phone tooltip-parent">
                                                    <span class="tooltip">Mobile Number</span>
                                                </a></li>
                                            <li><a href="#" class="fa fa-heart tooltip-parent">
                                                    <span class="tooltip">save ad</span>
                                                </a></li>
                                        </ul>
                                        <a class="view-item" href="single.html">view ad</a>

                                    </div>

                                </div>
                            </article>
                            <article class="item-spot">
                                <a href="#" class="imgAsBg">
                                    <img src="/template/assets/img/items/ad2.jpg" alt="dummy data">
                                </a>
                                <div class="item-content">
                                    <header>
                                        <h5><a href="single.html">Canon SX Powershot A Great D-SLR</a></h5>
                                        <span class="item-info-short">2:49 pm in Melbourne</span>
                                    </header>
                                    <div class="price-tag">$229.9</div>
                                    <div class="item-actions text-center">
                                        <ul class="contact-options">
                                            <li><a href="#" class="fa fa-envelope tooltip-parent">
                                                    <span class="tooltip">Send Message</span>
                                                </a></li>
                                            <li><a href="#" class="fa fa-phone tooltip-parent">
                                                    <span class="tooltip">Mobile Number</span>
                                                </a></li>
                                            <li><a href="#" class="fa fa-heart tooltip-parent">
                                                    <span class="tooltip">save ad</span>
                                                </a></li>
                                        </ul>
                                        <a class="view-item" href="single.html">view ad</a>

                                    </div>

                                </div>
                            </article>
                            <article class="item-spot">
                                <a href="#" class="imgAsBg">
                                    <img src="/template/assets/img/items/ad3.jpg" alt="dummy data">
                                </a>
                                <div class="item-content">
                                    <header>
                                        <h5><a href="single.html">Canon SX Powershot A Great D-SLR</a></h5>
                                        <span class="item-info-short">2:49 pm in Melbourne</span>
                                    </header>
                                    <div class="price-tag">$229.9</div>
                                    <div class="item-actions text-center">
                                        <ul class="contact-options">
                                            <li><a href="#" class="fa fa-envelope tooltip-parent">
                                                    <span class="tooltip">Send Message</span>
                                                </a></li>
                                            <li><a href="#" class="fa fa-phone tooltip-parent">
                                                    <span class="tooltip">Mobile Number</span>
                                                </a></li>
                                            <li><a href="#" class="fa fa-heart tooltip-parent">
                                                    <span class="tooltip">save ad</span>
                                                </a></li>
                                        </ul>
                                        <a class="view-item" href="single.html">view ad</a>

                                    </div>

                                </div>
                            </article>
                        </div>
                    </div>

                </div>
                <aside class="sidebar col-xs-12 col-sm-5 col-md-4">
                    <div class="inner">
                        <div class="price-widget short-widget">
                            <i class="adicon-dollar"></i>
                            <strong>£<?php echo $product['price']; ?></strong>
                            <span>Negotiable Price</span>
                        </div>
                        <div class="number-widget short-widget">
                            <i class="adicon-phone"></i>
                            <strong>£<?php echo $product['price']; ?></strong>
                            <span>Negotiable Price</span>
                        </div>
                        <div class="user-widget text-center">
                            <img src="/template/assets/img/basic/user-thumb.png" alt="asd">
                            <h4><a href="#">William Martin</a></h4>
                            <div>Member Since 2013</div>
                            <a href="#" class="link">More Ads</a>
                            <ul class="clearfix">
                                <li><a class="btn btn-transparent" href="#">Send Message</a></li>
                                <li><a class="btn btn-transparent" href="#">Report Ad</a></li>
                            </ul>
                        </div>
                        <div class="share-widget">
                            <span>Share This Ad</span>
                            <div class="social-links social-bg">
                                <ul>
                                    <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="map-widget">
                            <img src="/template/assets/img/map.jpg" alt="map">
                            <button class="btn btn-white">Get directions</button>
                        </div>
                        <div class="check-list-widget">
                            <h4>Safety Tips</h4>
                            <ul>
                                <li>Morbi ut tellus ac leo molestie</li>
                                <li>Luctus nec vehicula seded justo</li>
                                <li>Varius onec tempor rhons</li>
                                <li>Polutpat ras lorem</li>
                            </ul>
                        </div>
                        <div class="sponsor-widget">
                            <img src="/template/assets/img/spon.jpg" alt="sponsor">
                        </div>
                    </div>
                </aside>

            </div>

        </div>
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7 pull-right">
                        <header>
                            <span class="text-uppercase">Make Your Phone a classified machine</span>
                            <h2>Download Free Classified App</h2>
                        </header>
                        <div class="row inner">
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="/template/assets/img/android.png" alt="Google play">
                                    <span>download on</span>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="/template/assets/img/apple.png" alt="Apple store">
                                    <span>download on</span>
                                    <h4>Apple Store</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="/template/assets/img/win.png" alt="windows store">
                                    <span>download on</span>
                                    <h4>Windows Store</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-md-5 pull-right">
                        <div class="action-mock">
                            <img src="/template/assets/img/app-mock.png" alt="download apps">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="doc-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <ul>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Trust &amp; Safety</a></li>
                        <li><a href="#">Help &amp; Support</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="social-links">
                <ul>
                    <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                    <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                    <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
                    <li><a href="#" target="_blank" class="fa fa-youtube-play"></a></li>
                </ul>
            </div>
            <div class="text-center">
                &copy; ADSPOT - Classified
            </div>
        </div>
    </footer>
</div>

<!--======================================
Modals
=======================================-->
<div id="signInModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="social_login_opt">
            <div>
                <div class="opt-navigator dropdown-wrap">
                    <button>open options</button>
                    <div class="basic-dropdown">
                        <ul class="social-drop-list">
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-opts">
                    <a href="#" class="opt-fb-login active">
                        <i class="fa fa-facebook"></i>
                        <span>Sign in with facebook</span>
                    </a>
                    <a href="#" class="opt-gp-login">
                        <i class="fa fa-google-plus"></i>
                        <span>Sign in with Google+</span>
                    </a>
                    <a href="#" class="opt-twitter-login">
                        <i class="fa fa-twitter"></i>
                        <span>Sign in with Twitter</span>
                    </a>
                    <a href="#" class="opt-instagram-login">
                        <i class="fa fa-instagram"></i>
                        <span>Sign in with Instagram</span>
                    </a>
                    <a href="#" class="opt-linkedin-login">
                        <i class="fa fa-linkedin"></i>
                        <span>Sign in with Linkedin</span>
                    </a>
                </div>
            </div>
            <span class="split-opt">or</span>
        </div>
        <div class="modal-content">
            <header>
                <h4>Welcome Back!</h4>
                <p>Please enter your details below</p>
            </header>
            <form action="/">
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Username</label>
                        <input title="title here" type="text">
                    </div>
                </div>
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Password</label>
                        <input title="title here" type="password">
                    </div>
                </div>
                <div class="row login-actions field-block">
                    <div class="col-xs-12 col-sm-6">
                        <div class="custom-radio">
                            <input type="radio" name="item-condition" id="login001">
                            <label for="login001">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 xs-text-left text-right">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>

                <button class="btn btn-md btn-green block-element">Login Now</button>
                <div class="login-cta text-center">
                    <p>Don't have an account?</p>
                    <a href="#">Register here FREE</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="signUpModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="social_login_opt">
            <div>
                <div class="opt-navigator dropdown-wrap">
                    <button>open options</button>
                    <div class="basic-dropdown">
                        <ul class="social-drop-list">
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-opts">
                    <a href="#" class="opt-fb-login active">
                        <i class="fa fa-facebook"></i>
                        <span>Sign in with facebook</span>
                    </a>
                    <a href="#" class="opt-gp-login">
                        <i class="fa fa-google-plus"></i>
                        <span>Sign in with Google+</span>
                    </a>
                    <a href="#" class="opt-twitter-login">
                        <i class="fa fa-twitter"></i>
                        <span>Sign in with Twitter</span>
                    </a>
                    <a href="#" class="opt-instagram-login">
                        <i class="fa fa-instagram"></i>
                        <span>Sign in with Instagram</span>
                    </a>
                    <a href="#" class="opt-linkedin-login">
                        <i class="fa fa-linkedin"></i>
                        <span>Sign in with Linkedin</span>
                    </a>
                </div>
            </div>
            <span class="split-opt">or</span>
        </div>
        <div class="modal-content">
            <header>
                <h4>Welcome Back!</h4>
                <p>Please enter your details below</p>
            </header>
            <form action="/">
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Username</label>
                        <input title="title here" type="text">
                    </div>
                </div>
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Password</label>
                        <input title="title here" type="password">
                    </div>
                </div>
                <div class="field-block">
                    <div class="icon-field">
                        <span>+44</span>
                        <input type="text" placeholder="Your Contact #">
                    </div>
                </div>


                <button class="btn btn-md btn-green block-element">Signup Now</button>
                <div class="login-cta text-center"><br>
                    By clicking Signup Now, you agree to <br>
                    <a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
                </div>
            </form>
        </div>
    </div>
</div>


<!--========================================
Javascript
===========================================-->
<script src="/template/assets/lib/jquery/dist/jquery.min.js"></script>
<script src="/template/assets/lib/slick-carousel/slick/slick.min.js"></script>
<script src="/template/assets/js/app.js"></script>

</body>
</html>