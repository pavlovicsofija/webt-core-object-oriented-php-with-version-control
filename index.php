<?php
require_once('VideoInterface.php');
require_once('Video.php');
require_once('YouTubeVideo.php');
require_once('VimeoVideo.php');

$Yvideo = new YouTubeVideo("dog", "DzpmhfiBCO8");
$Vvideo = new VimeoVideo("keine Ahnung", "547868060");

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Videos Core01</title>
</head>
<body>
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo $Yvideo->getEmbedCode(); // Call the method to get the embed code
        echo $Vvideo->getEmbedCode(); // Call the method to get the embed code
    }
    ?>
</body>
</html>
HTML;