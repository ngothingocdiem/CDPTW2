<?php 

$url_host = 'http://' . $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\'); 

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);

require_once "scssphp/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();

$result = $scss->compile('@import"sass/28.scss"');

file_put_contents("css/28.css", $result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>28</title>
      <link href="<?php echo $url_path ?>/css/bootstrap.min.css " rel="stylesheet" type="text/css">
      <link href="<?php echo $url_path ?>/fonts/fontawesome/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo $url_path ?>/css/28.css" rel="stylesheet" type="text/css">
      <link href="<?php echo $url_path ?>/css/select2.min.css" rel="stylesheet" type="text/css"> <!--link gọi multi select-->
      <script src="<?php echo $url_path ?>/js/jquery-3.2.0.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!--để làm slider-ranger-->
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--để làm slider-ranger-->
      <script src="<?php echo $url_path ?>/js/select2.min.js"></script><!--link gọi multi select-->
      <script src="<?php echo $url_path ?>/js/28.js"></script>
</head>

<body>
      <?php include '28-content.php'; ?>
</body>

</html>