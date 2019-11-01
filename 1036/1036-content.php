<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?> 
<html>
    <head>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module80.less', 'css/module80.css');
        ?>
        <link href="css/module80.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="module80">
            <div class="container">
                <div class="row">
                <div class="detail">
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

                    

             <!-- Swiper -->
                <div class="col-md-6">
                <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">  <img src="images/h5.jpg" alt=""></div>  
                              <div class="swiper-slide">  <img src="images/h4.jpg" alt="" ></div>
                                
                            </div>
                            <!-- Add Pagination -->
                            <br>
                            <br>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </div>
                      </div> 

 
        </div>    
        </div>
        </div>
        </div>      
    </body>
</html>