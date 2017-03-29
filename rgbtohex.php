<?php

//PHP Color manipulator
//https://github.com/mikeemoo/ColorJizz-PHP
require_once 'src/MischiefCollective/ColorJizz/Autoloader.php';
MischiefCollective\ColorJizz\Autoloader::register();

use MischiefCollective\ColorJizz\Formats\RGB;

//converts rgb to hex
function rgbToHex($r, $b, $g){
$rgb = new RGB($r, $b, $g);
$hex = $rgb->toHex();

return $hex;

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RGB to HEX</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <header><?php include 'header.php';?></header>
    <main>
      <nav>      
      </nav>
    <h1>RGB to HEX</h1>
      <p><img src="Images/red.png" alt="Red"/> Red(255, 0, 0) = #<?php echo rgbToHex(255, 0, 0);?></p>
      <p><img src="Images/green.png" alt="Green"/> Green(0, 128, 0) = #<?php echo rgbToHex(0, 128, 0);?></p>
      <p><img src="Images/blue.png" alt="Blue"/> Blue(0, 0, 255) = #<?php echo rgbToHex(0, 0, 255);?></p>
      
      
      
      <br><br><br><br>
    </main>
    <footer><?php include 'footer.php';?></footer>
  </body>
</html>
