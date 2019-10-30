<html>
    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href = "css/swiper.min.css" rel = "stylesheet" type="text/css">
        <script src="js/swiper.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/md_header.less', 'css/md_header.css');
        ?>
        <link href="css/md_header.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module79.less', 'css/module79.css');
        ?>
        <link href="css/module79.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module80.less', 'css/module80.css');
        ?>
        <link href="css/module80.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module81.less', 'css/module81.css');
        ?>
        <link href="css/module81.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module82.less', 'css/module82.css');
        ?>
        <link href="css/module82.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module83.less', 'css/module83.css');
        ?>
        <link href="css/module83.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module84.less', 'css/module84.css');
        ?>
        <link href="css/module84.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module85.less', 'css/module85.css');
        ?>
        <link href="css/module85.css" rel="stylesheet" type="text/css" />


        <script>
            jQuery(document).ready(function ($) {

                var TopFixMenu = $(".header");
                var p = $(".logo p");
                var logoa = $(".logo a");
                var a = $("ul li a");
                var b = $(".header-cta a");
                var c = $(".header .social-list a");
                var menua = $(".a");
                var img1 = $(".img-responsive");
                var img2 = $(".b");


                $(window).scroll(function () {

                    if ($(this).scrollTop() > 10) {


                        TopFixMenu.css("position", "fixed");
                        TopFixMenu.css("top", "0");
                        TopFixMenu.css("padding-top", "160px");
                        TopFixMenu.css("background", "white");
                        TopFixMenu.css("z-index", "999");
                        TopFixMenu.css("width", "100%");
                        a.css("color", "black");
                        b.css("background", "black");
                        b.css("color", "white");

                        c.css("background", "black");
                        img1.css("display", "none");
                        img2.css("display", "block");
                        c.css("color", "white");




                    } else
                    {

                        TopFixMenu.css("top", "17px");
                        img1.css("display", "block");
                        img2.css("display", "none");
                        a.css("color", "white");
                        b.css("background", "white");
                        b.css("color", "black");
                        c.css("background", "white");
                        c.css("color", "black");
                        menua.css("color", "#ddd");
                        logoa.css("color", "white");
                        p.css("display", "block");
                        TopFixMenu.css("background", "transparent");
                        TopFixMenu.css("height", "none");
                        TopFixMenu.css("box-shadow", "none");

                    }
                }

                )
            })
        </script>
    </head>

    <body>
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container aa">
                        <div class="navbar-header" style="width:17%;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <a class="navbar-brand" href="#" style="float: right;">
                                <img src="images/logo.png" class="img-responsive">
                                <img src="images/logo2.png" class="img-responsive b" style="display: none;">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="active dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Header Center</a></li>
                                        <li><a href="#">Header Dark</a></li>
                                    </ul>
                                </li>
                              
                                <li><a href="#">Blog</a></li> 
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Typography</a></li>
                                        <li><a href="#">Elements 1</a></li>
                                        <li><a href="#">Elements 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li> 

                                <div class="social-list navbar-right">
                                    <ul>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>

                                        <div class="header-cta navbar-right">
                                            <a href="">
                                                <span>Book a</span>
                                                <p>Table</p>
                                            </a>
                                        </div>
                                    </ul>			
                                </div>						
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="module79">
            <div class="container">
                <div class="row">
                    <div class="banner">
                        <h1>ABOUT</h1>
                        <p>GET TO KNOW MORE ABOUT US</p>
                        <div class="divider-inner">
                            <div class="divider-line line-left"></div>
                            <div class="icon-wrapper">
                                <span class="icon">
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <div class="divider-line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div class="module80">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="gd1">
                            <h1>HISTORY</h1>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ullamcorper suscipit lobortis nisl ut aliquip ex ea co nisl ut aliquip.</p>
                            <a href="">Read More »</a>
                        </div>
                    </div>                   
                    <div class="col-md-3">
                        <div class="gd2">                          
                            <div class="n1">
                                <p>Saoreet dolore magnanaliquam erat volutpat 1892.</p>
                            </div>
                        </div>
                    </div>
                    <div class = "imageg">
                    <div class="col-md-3">
                    <div class="swiper-slide"><img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1204406-683x1024.jpg" alt="" class = "image"/></div>
                        
                    </div>
        </div>
                    <div class = "imageh">
                    <div class="col-md-3">
                    <div class="swiper-slide"> <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1000349-683x1024.jpg" alt="" class = "image"/></div>
                                           
                   
                  
                  </div>
  
            </div>
        </div>    
        </div>
        </div>      
        <div class="module81">
            <div class="container">
                <div class="row">                 
                    <p>Since 1892</p>
                </div>
            </div>
        </div>       
        <div class="module82">
            <div class="container">
                <div class="row">
                    <div class="sl1">                
                        <p>G</p>
                        <p1>A</p1> 
                        <p2>L</p2>
                        <p3>L</p3>
                        <p4>E</p4>
                        <p5>R</p5>
                        <p6>Y</p6>                      
                    </div>
                    <div class="hd2">
                        <h2>GALLERY</h2>
                        <p>FEW PHOTOS ABOUT US</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="module83">
        <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="container">
            <div class="image">

                <div class="col-md-3">
                    <a href=""><img src="images/ready-1024x682.jpg" alt="" class = "image"></a>
                </div>
             </div>
             <div class = "images">    
                <div class="col-md-3">
                    <a href=""> <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_695556-1024x682.jpg" alt="" class = "image"></a>
                </div>
             </div>
             <div class = "imaged">   
                <div class="col-md-3">
                    <a href=""> <img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1000349-683x1024.jpg" alt="" class = "image"></a>
                </div>
                </div>
                <div class = "imagef">      
                <div class="col-md-3">
                    <a href=""><img src="images/Stocksy_txpcd1dc0eemKP100_Medium_1313602-683x1024.jpg" alt="" class = "image"></a>
              
            </div>
            <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>  
        </div>
        </div>
        </div>
        <div class="module84">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="divider-inner">
                            <div class="divider-line line-left"></div>
                            <div class="icon-wrapper">
                                <i class="fa fa-picture-o"></i>
                            </div>
                            <div class="divider-line line-right"></div>
                        </div>                           
                        <p>Cidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ullamcorper suscipit lobortis nisl ut aliquip ex ea co nisl ut aliquip ex ea co mmodo consequat.</p>
                        <a href="">CONTACT US ></a>    
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <footer>
            <div class="module85">
                <div class="footer_widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="content">
                                    <h2 class="widget-title">Address</h2>
                                    <div class="textwidget">
                                        <p>15 Beaufain Street<br>Charleston, SC 29401</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content dg">
                                    <h2 class="widget-title">Follow Us</h2>
                                    <div class="social-list">
                                        <ul>
                                            <a href=""><i class="fa fa-facebook"  title="facebook" aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-twitter" title="Twitter"  aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-pinterest-p" title="pinterest" aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-instagram" title="instagram"  aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-envelope" title="gmail"  aria-hidden="true"></i></a>
                                        </ul>
                                    </div>
                                    <div class="textwidget">
                                        <p>© 2017 Made by WiThemes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content">
                                    <h2 class="widget-title">Contact Us</h2>
                                    <div class="textwidget">
                                        <p>info@domain.com<br>843-212-0920</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="footer_bottom">
                    <div class="container">
                        <div class="logo">
                            <a href=""><img src="images/dine.png" class="image"></a>
                        </div>

                        <div class="dine-divider">
                            <div class="divider-inner">
                                <div class="divider-line line-left"></div>
                                <div class="icon-wrapper">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="divider-line line-right"></div>
                            </div>
                        </div>

                        <div class="footernav">
                            <ul class="menu">
                                <a class="cach" href="">Home</a>
                              
                                <a class="cach" href="">Contact</a>
                                <a class="buy" href="">Buy</a>
                            </ul>
                        </div>
                    </div>
                </div>	
            </div>
        </footer>
    </body>
</html>