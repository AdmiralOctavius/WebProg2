<!DOCTYPE html>
<html lang="en">
    <title>Timmy Toms</title>
    <? require_once("newPhp/headFile.php"); ?>

    <body data-spy="scroll" data-target="#template-navbar">

        <? require_once("newPhp/navBar.php");?>

        <!--== 5. Header ==-->
        <section  id="header-slider" class="owl-carousel home">
            <div id="home" class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">Great Sandwhiches</h1>
                        <p class="header-sub-title">Great Prices</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">BEST CHIPS</h1>
                        <p class="header-sub-title">Hand Cut, Hand made</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content text-right pull-right">
                        <h1 class="header-title">Awesome DRINKS</h1>
                        <p class="header-sub-title">Full Soda Menu</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
        </section>



        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="images/icons/about_color.png" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">About us</h2>
                                <p class="section-content-para">
                                    Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                </p>
                                <p class="section-content-para">
                                    beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->


        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Affordable Pricing</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            <li class="filter" data-filter=".breakfast">Breakfast</li>
                                            <li class="filter" data-filter=".special">Special</li>
                                            <li class="filter" data-filter=".desert">Desert</li>
                                            <li class="filter" data-filter=".dinner">Dinner</li>
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                <li class="item dinner">

                                    <a href="#">
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special">

                                    <a href="#">
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special">

                                    <a href="#">
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner">

                                    <a href="#">
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special">

                                    <a href="#">
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Great Place to enjoy great witches! <br>Sand-witches</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->



        <!--== 11. Our Bread ==-->
        <section id="bread" class="bread">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/bread_color.png">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">
                                Our Bread, <br>Made Local,<br> Made Fresh
                            </h2>
                            <div class="section-description">
                                <p class="section-content-para">
                                    Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                </p>
                                <p class="section-content-para">
                                    beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!--== 12. Our Featured Dishes Menu ==-->
        <section id="featured-dish" class="featured-dish">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Our Featured Dishes Menu</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#featured-dish -->




        <!--== 13. Menu List ==-->
        <section id="menu-list" class="menu-list">
            <div class="container">
                <div class="row menu">
                    <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="menu-catagory">
                                        <h2>Bread</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">French Bread</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$149.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Italian Bread</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$149.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Regular Bread</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$149.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="menu-catagory">
                                        <h2>Drinks</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Regular Tea</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$20.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Garlic Tea</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Black Coffee</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$40.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="menu-catagory">
                                        <h2>Meat</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Bacon</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$70.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Sausage</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$50.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Chicken Balls</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$90.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="menu-catagory">
                                        <h2>Special</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Chicken Balls</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$90.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Bacon</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$70.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Sausage</h3>
                                        <p class="menu-about">Astronomy compels the soul</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>1:1
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">$50.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="moreMenuContent"></div>
                        <div class="text-center">
                            <a id="loadMenuContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--== 14. Have a look to our dishes ==-->

        <section id="have-a-look" class="have-a-look hidden-xs">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="images/menu-gallery/menu1.png" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu2.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu3.png" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu4.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu5.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu6.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu7.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu8.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu9.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu10.jpg" />
                                        </li>
                                        <li>
                                            <img src="images/menu-gallery/menu11.jpg" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                            <h2 class="section-title">Have A Look To Our Dishes</h2>
                        </div>


                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>




        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Eat outdoors, today!</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="reserve.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Eat outdoors!
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>16th Birn street Get Plaza (4th floar) USA</p>
                            <p>+44 12 213584</p>
                            <p>example@mail.com </p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="#" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="g-plus"></a></li>
                                <li><a href="#" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="contact.php">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
        <script src="js/script.js"></script>


    </body>
</html>
