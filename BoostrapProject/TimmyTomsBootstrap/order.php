<!DOCTYPE html>
<html lang="en">
  <title>Ordering</title>
  <? require_once("newPhp/headFile.php"); ?>
	<link rel="stylesheet" href="css/orderPage.css">
<body data-spy="scroll" data-target="#template-navbar">

  <? require_once("newPhp/navBar.php");?>


        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div id="home" class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Order up!</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            <li class="filter" data-filter=".breakfast">Main Meals</li>
                                            <li class="filter" data-filter=".special">Custom</li>
                                            <li class="filter" data-filter=".desert">Special Meals</li>
                                            <li class="filter" data-filter=".dinner">Off Menu</li>
											<!--<li class="filter" data-filter=".dinner">Special Witches</li>
											<li class="filter" data-filter=".dinner">Sides</li>-->
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
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Sandwich</h3>
                                                Made with love and care
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
                                                <h3>Gyro</h3>
                                                Made fresh
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$15 </h2>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Tower of Sandwiches</h3>
                                                Endless tower of food
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$60</h2>
                                </li>
                                <li class="item breakfast desert">

                                    <a href="#">
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Stack of meat</h3>
                                                7 different types of meat in one
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$25</h2>
                                </li>
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Plain Man</h3>
                                                A regular Joe's Sandwich
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Fruity Fantastic</h3>
                                                Fruit Fresh Sandwich
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
                                                <h3>Flatbread Sandwich</h3>
                                                  Fried Flatbread Sandwich
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$10</h2>
                                </li>
                                <li class="item special">

                                    <a href="#">
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Customized Sandwich</h3>
                                                Make your own, click on this item to make your own!
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$10</h2>
                                </li>
                                <li class="item dinner">

                                    <a href="#">
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Stacked Basic</h3>
                                                Nothing, why would you buy this
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$40</h2>
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


  <? require_once("newPhp/footer.php"); ?>
</body>
</html>
