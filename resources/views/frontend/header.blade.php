<!DOCTYPE html>
<html lang="en">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Lights Ltd.| Lighting and Decor</title>
    <!-- include the site stylesheet -->
    <link
        href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700'
        rel='stylesheet' type='text/css'>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href={{asset("css/animate.css")}}>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href={{asset("css/icon-fonts.css")}}>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href={{asset("css/main.css")}}>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href={{asset("css/responsive.css")}}>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<!-- main container of all the page elements -->
<div id="wrapper">
    <!-- Page Loader -->
    <div id="pre-loader" class="loader-container">
        <div class="loader">
            <img src={{asset("images/svg/rings.svg")}} alt="loader" alt="loader">
        </div>
    </div>
    <!-- W1 start here -->
    <div class="w1">
        <!-- mt header style19 start here -->
        <header id="mt-header" class="style19">
            <div class="mt-top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 hidden-xs">
                            <span class="tel"> <i class="fa fa-phone" aria-hidden="true"></i> +254 722 333 211</span>
                            <a href="mailto:'info@luxelights.co.ke'" class="tel">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                info@luxelights.co.ke</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-right">
                            @guest()
                                <span class="account"><a href="/login">Login</a> or <a
                                        href="/register">Create Account</a></span>
                            @else
                                <div class="mt-top-lang">
                                    <a href="{{route('dashboard')}}"
                                       class="lang-opener" style="margin-right: 8px">My Account</a>
                                    |
                                    <a href=""
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                       class="lang-opener" style="margin-left: 8px">Logout</a>
                                    <form id="logout-form" action="/logout" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div><!-- mt top bar end here -->
            <div class="container">
                <!-- mt bottom bar start here -->
                <div class="mt-bottom-bar">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- mt top social start here -->
                            <ul class="mt-top-social">
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://wa.me/0722333444" target="_blank">
                                        <i class="fab fa-whatsapp" aria-hidden="true"> - 0722 333 444</i>
                                    </a>
                                </li>
                            </ul><!-- mt top social end here -->
                            <!-- mt icon list start here -->
                            <ul class="mt-icon-list">
                                <li class="hidden-lg hidden-md">
                                    <a href="#" class="bar-opener mobile-toggle">
                                        <span class="bar"></span>
                                        <span class="bar small"></span>
                                        <span class="bar"></span>
                                    </a>
                                </li>
                                <li><a href="#" class="icon-magnifier"></a></li>
                                <li>

                                    <a href="" class="cart-opener">
                                        <span class="icon-handbag"></span>
                                        <span class="num">4</span>
                                    </a>

                                </li>
                            </ul><!-- mt icon list end here -->
                            <div class="mt-logo" style="width: 160px;">
                                <a href="/">
                                    <h3><strong>Luxe Lights Ltd</strong></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- mt bottom bar start here -->
            </div>
            <!-- mt nav holder start here -->
            <div class="mt-nav-holder text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- navigation start here -->
                            <nav id="nav">
                                <ul>
                                    <li><a href="/">HOME</a></li>
                                    <li><a href="/about">ABOUT</a></li>
                                    <li><a class="drop-link" href="#">LIGHTING<i
                                                class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
                                        <div class="s-drop">
                                            <ul>
                                                <li><a href="chandeliers">Chandeliers</a></li>
                                                <li><a href="wall">Wall Lights</a></li>
                                                <li><a href="outdoor">Outdoor Lights</a></li>
                                                <li><a href="ceiling">Ceiling Lights</a></li>
                                                <li><a href="lamps">Lamps & Shades</a></li>
                                                <li><a href="lanterns">Lanterns</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="drop-link" href="#">DECOR<i
                                                class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
                                        <div class="s-drop">
                                            <ul>
                                                <li><a href="furnitures">Furniture</a></li>
                                                <li><a href="mirrors">Mirrors</a></li>
                                                <li><a href="rugs">Rugs</a></li>
                                                <li><a href="desks">Desks</a></li>
                                                <li><a href="clocks">Wall Clocks</a></li>
                                                <li><a href="kitchen">Kitchen Decor</a></li>
                                                <li><a href="cofee">Coffee Tables</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="/faqs">FAQS</a></li>
                                    <li><a href="/contact">CONTACT</a></li>
                                </ul>
                            </nav>
                            <!-- mt icon list end here -->
                        </div>
                    </div>
                </div>
            </div><!-- mt nav holder end here -->
            <!-- mt side menu start here -->
            <div class="mt-side-menu">
                <!-- mt holder start here -->
                <div class="mt-holder">
                    <a href="#" class="side-close"><span></span><span></span></a>
                    <strong class="mt-side-title">MY ACCOUNT</strong>
                    <!-- mt side widget start here -->
                    <div class="mt-side-widget">
                        <header>
                            <span class="mt-side-subtitle">SIGN IN</span>
                            <p>Welcome back! Sign in to Your Account</p>
                        </header>
                        <form action="#">
                            <fieldset>
                                <input type="text" placeholder="Username or email address" class="input">
                                <input type="password" placeholder="Password" class="input">
                                <div class="box">
                                    <span class="left"><input class="checkbox" type="checkbox" id="check1"><label
                                            for="check1">Remember Me</label></span>
                                    <a href="/contact" class="help">Help?</a>
                                </div>
                                <button type="submit" class="btn-type1">Login</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- mt side widget end here -->
                    <div class="or-divider"><span class="txt">or</span></div>
                    <!-- mt side widget start here -->
                    <div class="mt-side-widget">
                        <header>
                            <span class="mt-side-subtitle">CREATE NEW ACCOUNT</span>
                            <p>Create your very own account</p>
                        </header>
                        <form action="#">
                            <fieldset>
                                <input type="text" placeholder="Username or email address" class="input">
                                <button type="submit" class="btn-type1">Register</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- mt side widget end here -->
                </div>
                <!-- mt holder end here -->
            </div><!-- mt side menu end here -->
            <!-- mt bottom bar end here -->
            <span class="mt-side-over"></span>
        </header>
        <div class="mt-search-popup">
            <div class="mt-holder">
                <a href="#" class="search-close"><span></span><span></span></a>
                <div class="mt-frame">
                    <form action="">
                        <fieldset>
                            <input type="text" name="search" value="" placeholder="Search...">
                            <span class="icon-microphone"></span>
                            <button class="icon-magnifier" type="submit"></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
