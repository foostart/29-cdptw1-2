<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1035">
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