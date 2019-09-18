<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1036">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-text coll">
                <div class="gd1">
                    <h1>HISTORY</h1>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ullamcorper suscipit lobortis nisl ut aliquip ex ea co nisl ut aliquip.</p>
                    <a href="">Read More »</a>
                </div>
            </div>                   
            <div class="col-md-3 col-sm-6 col-text coll">
                <div class="gd2">                          
                    <div class="n1">
                        <p>Saoreet dolore magnanaliquam erat volutpat 1892.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-img coll">
                <img src="<?php echo $url_path; ?>/images/Stocksy_txpcd1dc0eemKP100_Medium_1204406-683x1024.jpg" alt=""/>
            </div>
            <div class="col-md-3 col-sm-6 col-img coll">
                <img src="<?php echo $url_path; ?>/images/Stocksy_txpcd1dc0eemKP100_Medium_1000349-683x1024.jpg" alt=""/>                       
            </div>
        </div>
    </div>
</div>