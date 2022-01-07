<?php

use yii\helpers\Url;

?>

<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="<?= Url::base()?>/images/header-logo.png" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="<?= Url::base()?>/images/header-logo.png" alt="header-logo.png">
                <img class="logo2 img-fluid" src="<?= Url::base()?>/images/header-logo2.png" alt="header-logo2.png">
                <span>edumy</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="<?=Url::home()?>"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">Courses</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li>
                            <a href="#">Courses List</a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="page-course-v1.html">Courses v1</a></li>
                                <li><a href="page-course-v2.html">Courses v2</a></li>
                                <li><a href="page-course-v3.html">Courses v3</a></li>
                            </ul>
                        </li>

                        <li><a href="<?=Url::to(['site/instructors'])?>">Instructors</a></li>
                        <li><a href="page-instructors-single.html">Instructor Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Events</span></a>
                    <ul>
                        <li><a href="page-event.html">Event List</a></li>
                        <li><a href="page-event-single.html">Event Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Pages</span></a>
                    <ul>
                        <li>
                            <a href="#"><span class="title">Shop Pages</span></a>
                            <ul>
                                <li><a href="page-shop.html">Shop</a></li>
                                <li><a href="page-shop-single.html">Shop Single</a></li>
                                <li><a href="page-shop-cart.html">Cart</a></li>
                                <li><a href="page-shop-checkout.html">Checkout</a></li>
                                <li><a href="page-shop-order.html">Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="title">User Admin</span></a>
                            <ul>
                                <li><a href="page-dashboard.html">Dashboard</a></li>
                                <li><a href="page-my-courses.html">My Courses</a></li>
                                <li><a href="page-my-order.html">My Order</a></li>
                                <li><a href="page-my-message.html">My Message</a></li>
                                <li><a href="page-my-review.html">My Review</a></li>
                                <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                <li><a href="page-my-listing.html">My Listing</a></li>
                                <li><a href="page-my-setting.html">My Setting</a></li>
                            </ul>
                        </li>
                        <li><a href="page-about.html">About Us</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="page-login.html">LogIn</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-pricing.html">Membership</a></li>
                        <li><a href="page-error.html">404 Page</a></li>
                        <li><a href="page-terms.html">Terms and Conditions</a></li>
                        <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Blog</span></a>
                    <ul>
                        <li><a href="page-blog-v1.html">Blog List 1</a></li>
                        <li><a href="page-blog-grid.html">Blog List 2</a></li>
                        <li><a href="page-blog-list.html">Blog List 3</a></li>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul>
                </li>
                <li class="last">
                    <a href="<?=Url::to(['site/contact'])?>"><span class="title">Contact</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">
                <li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target="#exampleModalCenter"> <span class="dn-lg">Login/Register</span></a></li>
                <li class="list-inline-item list_s">
                    <div class="cart_btn">
                        <ul class="cart">
                            <li>
                                <a href="#" class="btn cart_btn flaticon-shopping-bag"><span>5</span></a>
                                <ul class="dropdown_content">
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Dolar Sit Amet</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Lorem Ipsum</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Is simply</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <h5>Subtotal: $57.70</h5>
                                        <a href="#" class="btn btn-thm cart_btns">View cart</a>
                                        <a href="#" class="btn btn-thm3 checkout_btns">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="list-inline-item list_s">
                    <div class="search_overlay">
                        <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                        </a>
                    </div>
                </li>
            </ul><!-- Button trigger modal -->
        </nav>
    </div>
</header>
<!-- Modal -->