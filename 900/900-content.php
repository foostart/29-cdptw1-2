<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-900">
        <div class="container">
            <div class="row">
                <!--list top -->
                <div class="bt-box box-special ">
                    <div class="box-heading">
                        <h1>JUST FOR TODAY</h1>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <!--cột 1 san phẩm -->
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image best-deals ">
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="stars">
                                                    <form action="">
                                                         <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                         <label class="star star-5" for="star-5"></label>
                                                         <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                         <label class="star star-4" for="star-4"></label>
                                                         <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                         <label class="star star-3" for="star-3"></label>
                                                         <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                         <label class="star star-2" for="star-2"></label>
                                                         <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                         <label class="star star-1" for="star-1"></label>
                                                     </form>
                                            </div>
                                        
                                            <!-- end -->
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="name">
                                            <a title="Assumenda accus antium doloremque" href="#">Assumenda accus antium doloremque</a>
                                        </div>
                                        <div class="percent">
                                            <span>20%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$98</span>
                                        </p>
                                        <div class="button-group box-special">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--cột 2 san phẩm -->
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb  ">
                                    <div class="image best-deals ">
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive" width = "370" height = "370"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="stars">
                                                    <form action="">
                                                         <input class="star star-5" id="stars-5" type="radio" name="star"/>
                                                         <label class="star star-5" for="stars-5"></label>
                                                         <input class="star star-4" id="stars-4" type="radio" name="star"/>
                                                         <label class="star star-4" for="stars-4"></label>
                                                         <input class="star star-3" id="stars-3" type="radio" name="star"/>
                                                         <label class="star star-3" for="stars-3"></label>
                                                         <input class="star star-2" id="stars-2" type="radio" name="star"/>
                                                         <label class="star star-2" for="stars-2"></label>
                                                         <input class="star star-1" id="stars-1" type="radio" name="star"/>
                                                         <label class="star star-1" for="stars-1"></label>
                                                     </form>
                                            </div>
                                          
                                            <!-- end -->
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="name"><a title="Assumenda accus antium doloremque" href="#">Assumenda accus antium doloremque</a></div>
                                        <div class="percent">
                                            <span>20%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$98</span>
                                        </p>
                                        <div class="button-group box-special">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--cột 3 san phẩm -->
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb  ">
                                    <div class="image best-deals ">
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                        <div class="stars">
                                                    <form action="">
                                                         <input class="star star-5" id="stard-5" type="radio" name="star"/>
                                                         <label class="star star-5" for="stard-5"></label>
                                                         <input class="star star-4" id="stard-4" type="radio" name="star"/>
                                                         <label class="star star-4" for="stard-4"></label>
                                                         <input class="star star-3" id="stard-3" type="radio" name="star"/>
                                                         <label class="star star-3" for="stard-3"></label>
                                                         <input class="star star-2" id="stard-2" type="radio" name="star"/>
                                                         <label class="star star-2" for="stard-2"></label>
                                                         <input class="star star-1" id="stard-1" type="radio" name="star"/>
                                                         <label class="star star-1" for="stard-1"></label>
                                                     </form>
                                            </div>
                        
                                            <!-- end -->
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="name"><a title="Assumenda accus antium doloremque" href="#">Assumenda accus antium doloremque</a></div>
                                        <div class="percent">
                                            <span>20%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$98</span>
                                        </p>
                                        <div class="button-group box-special">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                         
                            
                            </div>
                            
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>