<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

 <div class="type-1035">
    <div class="swiper-container">
        <div class="swiper-wrapper">
         <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/box3.jpg" alt="Flower">
                    <div class="caption slide2">
                        <div class="title">
                        <div>
                                     <h1>ABOUT</h1>       
                                     <p>GET TO KNOW MORE ABOUT US</p>    
                                           
                         </div>
                         
                        </div> 
                    </div>
                </a>
                
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/bn.jpg" alt="Flower">
                    <div class="caption slide2">
                        <div class="title">
                        <div>
                                    <h1>Since 1892</h1>        
                                    
                                </div>
                           
                          
                        </div> 
                    </div>
                     
                </a>
            </div>
           
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="contact">
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
    </div>
</div>
