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
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>

                                            </div>
                                            <p class="count-sell">5 Bought</p>
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
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>

                                            </div>
                                            <p class="count-sell">5 Bought</p>
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
                                            <!-- dong ho -->
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>

                                            </div>
                                            <p class="count-sell">5 Bought</p>
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
                            <!--cột 4 san phẩm -->
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb  ">
                                    <div class="image best-deals ">
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>

                                            </div>
                                            <p class="count-sell">5 Bought</p>
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
                            <!--cột 5 san phẩm -->
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb  ">
                                    <div class="image best-deals ">
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>

                                            </div>
                                            <p class="count-sell">5 Bought</p>
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
                            <!--cột 6 san phẩm -->
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb  ">
                                    <div class="image best-deals ">
                                        <a href="#"><img src="<?php echo $url_path ?>/images/justoftoday1.jpg" alt="Assumenda accus antium doloremque" title="Assumenda accus antium doloremque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>

                                            </div>
                                            <p class="count-sell">5 Bought</p>
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