; <?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/md_header.less', 'css/md_header.css');
$less->compileFile('less/module79.less', 'css/module79.css');
$less->compileFile('less/module80.less', 'css/module80.css');
$less->compileFile('less/module81.less', 'css/module81.css');
$less->compileFile('less/module82.less', 'css/module82.css');
$less->compileFile('less/module83.less', 'css/module83.css');
$less->compileFile('less/module84.less', 'css/module84.css');
$less->compileFile('less/module85.less', 'css/module85.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1034</title>
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/1034.css">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        
       <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
       
        <script src="../1034/js/swiper.min.js"></script>
        
    </head>
    <body> 
        <?php include '../1034/1034-content.php'; ?>
      <script src="../1034/js/1034.js"></script>
    </body>
</html>