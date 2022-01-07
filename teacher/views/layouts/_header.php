<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title='Education';
?>
<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                <img class="logo2 img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                <span>edumy</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="#"><span class="title">Home</span></a>
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
                        <li>
                            <a href="#">Courses Single</a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="page-course-single-v1.html">Single V1</a></li>
                                <li><a href="page-course-single-v2.html">Single V2</a></li>
                                <li><a href="page-course-single-v3.html">Single V3</a></li>
                            </ul>
                        </li>
                        <li><a href="page-instructors.html">Instructors</a></li>
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
                    <a href="page-contact.html"><span class="title">Contact</span></a>
                </li>
            </ul>
            <ul class="header_user_notif pull-right dn-smd">
                <li class="user_notif">
                    <div class="dropdown">
                        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
                        <div class="dropdown-menu notification_dropdown_content">
                            <div class="so_heading">
                                <p>Notifications</p>
                            </div>
                            <div class="so_content" data-simplebar="init">
                                <ul>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="view_all_noti text-thm" href="#">View all alerts</a>
                        </div>
                    </div>
                </li>
                <li class="user_notif">
                    <div class="dropdown">
                        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
                        <div class="dropdown-menu notification_dropdown_content">
                            <div class="so_heading">
                                <p>Notifications</p>
                            </div>
                            <div class="so_content" data-simplebar="init">
                                <ul>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="view_all_noti text-thm" href="#">View all alerts</a>
                        </div>
                    </div>
                </li>
                <li class="user_setting">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="<?=Url::base()?>/images/team/e1.png" alt="e1.png"></a>
                        <div class="dropdown-menu">
                            <div class="user_set_header">
                                <img class="float-left" src="<?=Url::base()?>/images/team/e1.png" alt="e1.png">
                                <p>Kim Hunter <br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e18a888c89948f958493a1868c80888dcf828e8c">[email&#160;protected]</a></span></p>
                            </div>
                            <div class="user_setting_content">
                                <a class="dropdown-item active" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">Messages</a>
                                <a class="dropdown-item" href="#">Purchase history</a>
                                <a class="dropdown-item" href="#">Help</a>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
