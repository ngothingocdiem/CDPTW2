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

$result = $scss->compile('@import"sass/12.scss"');

file_put_contents("css/12.css", $result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>12</title>
      <link href="<?php echo $url_path ?>/css/bootstrap.min.css " rel="stylesheet" type="text/css">
      <link href="<?php echo $url_path ?>/fonts/fontawesome/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo $url_path ?>/css/12.css" rel="stylesheet" type="text/css">
</head>
<body>
      <?php include '12-content.php'; ?>
</body>
</html>