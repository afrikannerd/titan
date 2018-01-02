<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/**
 * Description of UserModel
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
?>
<!doctype html>
<html lang="en-gb">



    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script  src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <script  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="/assets/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/assets/jquery/jquery-ui.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        


        <link rel="stylesheet" type="text/css" href="/assets/fa/css/font-awesome.min.css">
        
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is an ecommerce website">
        <meta name="keywords" content="Fashion Nova,Fashion">

        <title><?php echo $title; ?></title>

    </head>



    <body>

        <div class="container-fixed" id="wrapper">

            <header id="header" class="header animation">

                <div class="container">

                    <div class="header-wrapper grid-full">

                        <div class="logo table-cell">

                            <a href="/">

                                <span style="text-decoration: none;"><span style="color: #eee;font-weight: lighter">Project</span> <span style="color: #e74c3c;font-family: Merriweather;font-size: 25px"> Red October</span></span>
                   <!--<img src="images/logo.png" width="387"  height="51"  alt="Red October"/> -->

                            </a>

                        </div>

                        <div class="table-cell search">
                            <div class="searchbar">

                                <form class="clearfix" action="search.php" method="get">

                                    <div class="left four-fifths">

                                        <input type="text" placeholder="Search" name="q" class="search_item" value="<?php echo isset($_SESSION['q'])?$_SESSION['q']:'';?>">

                                    </div>

                                    <div class="left one-fifth">

                                        <button  class="search_stuff">

                                            <div class="btn">

                                                <i class="fa fa-search"></i>

                                            </div>

                                        </button>

                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="table-cell utils-wrapper">

                            <div class="top-header clearfix">

                                <div class="top-utils">

                                    <ul class="clearfix">



                                        <li class="cart-wrap">

                                            <div>

                                                <a href="#">

                                                    <i class="glyphicon glyphicon-shopping-cart"></i>

                                                    <span class="text">Cart</span>

                                                    <span class="count">0</span>

                                                </a>

                                            </div>

                                        </li>

                                        <li class="">

                                            <div class="wishlistLink">

                                                <a href="#">

                                                    <i class="glyphicon glyphicon-heart"></i>

                                                    <span class="text">Favourites</span>

                                                    <span class="count">0</span>

                                                </a>

                                            </div>

                                        </li>

                                        <li class="dropdown" >
                                            <?php
                                            if (isset($_SESSION['username'])):
                                                ?>

                                                <a href="#" class="my-account animation dropdown-toggle" data-toggle='dropdown'>

                                                    <i class="glyphicon glyphicon-user"></i>

                                                    <span class="text"><?php echo $_SESSION['username']; ?></span>

                                                </a>

                                                <ul class = "dropdown-menu dropdown-menu-right dropdown-toggle" role = "menu" aria-labelledby = "dropdownMenu1" id="dropdownMenu1">

                                                    <li role = "presentation">
                                                        <a role = "menuitem" tabindex = "-1" href = "/account/profile.php"><?php echo $_SESSION['username'] ?>'s Profile</a>
                                                    </li>
                                                    <!--
                                                    <li role = "presentation">
                                                        <a role = "menuitem" tabindex = "-1" href = "">Logout</a>
                                                    </li>
                                                    -->


                                                    <li role = "presentation">
                                                        <a role = "menuitem" tabindex = "0" href = "../account/logout.php">
                                                            <i class="glyphicon glyphicon-lock"></i>&nbsp;&nbsp;Logout
                                                        </a>
                                                    </li>
                                                </ul>


                                                <?php
                                            else:
                                                ?>
                                                <a href="/account/login.php" class="my-account animation dropdown-toggle" data-toggle='dropdown'>

                                                    <i class="glyphicon glyphicon-user"></i>

                                                    <span class="text">Account</span>

                                                </a>
                                                <ul class = "dropdown-menu dropdown-menu-right dropdown-toggle" role = "menu" aria-labelledby = "dropdownMenu1" id="dropdownMenu1">

                                                    <li role = "presentation">
                                                        <a role = "menuitem" tabindex = "-1" href = "/account/login.php?red=<?php echo 'alvin';?>">Sign In</a>
                                                    </li>
                                                    <!--
                                                    <li role = "presentation">
                                                        <a role = "menuitem" tabindex = "-1" href = "">Logout</a>
                                                    </li>
                                                    -->


                                                    <li role = "presentation">
                                                        <a role = "menuitem" tabindex = "0" href = "../account/register.php?red=<?php echo 'alvin';?>">
                                                            Create Account
                                                        </a>
                                                    </li>
                                                </ul>
                                            <?php
                                            endif;
                                            ?>
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="shipping-banner">

                    <div class="container">

                        <div class="grid text-center">

                            <div class="grid__item one-third">

                                <span>Order with us for discount</span>

                            </div>

                            <div class="grid__item one-third">

                                <span>Worldwide shipping at KES 8000</span>

                            </div>

                            <div class="grid__item one-third">

                                <span>Free Shipping all of East Africa</span>

                            </div>

                        </div>

                    </div>

                </div>

                <nav class="main-menu clearfix">

                    <ul>

                        <li class="first animation">

                            <div>

                                <a href="#" class="animation">New Arrivals</a>

                            </div>

                        </li>

                        <li class="animation">

                            <div class="dropdown">

                                <a href="#">

                                    <span class="nav-label">

                                        Dresses

                                        <i class="glyphicon glyphicon-menu-down"></i>

                                    </span>

                                </a>

                                <div class="first-level hide clearfix">

                                    <div class="items left">

                                        <ul>

                                            <li class="animation">

                                                <div>

                                                    <a href="">

                                                        Mini Dresses

                                                    </a>

                                                </div>

                                            </li>

                                            <li class="animation">

                                                <div>

                                                    <a href="">

                                                        Midi Dresses

                                                    </a>

                                                </div>

                                            </li>

                                            <li class="animation">

                                                <div>

                                                    <a href="">

                                                        Maxi Dresse

                                                    </a>

                                                </div>

                                            </li>

                                            <li class="last animation">

                                                <div>

                                                    <a href="">

                                                        Sales Dresses

                                                    </a>

                                                </div>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>





                        </li>

                        <li class="animation">

                            <div>

                                <a href="" class="animation">Jeans</a>

                            </div>

                        </li>

                    </ul>

                </nav>

            </header>

         
