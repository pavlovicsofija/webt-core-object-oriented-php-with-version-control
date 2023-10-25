<?php
require_once('VideoInterface.php');
require_once('Video.php');
require_once('YouTubeVideo.php');
require_once('VimeoVideo.php');

$Yvideo = new YouTubeVideo("dog", "DzpmhfiBCO8");
$Vvideo = new VimeoVideo("keine Ahnung", "547868060");

//string varable machen und mit getEmbedCode generieren
$videoContent = '<div class="video-row">';
for ($i = 0; $i < 5; $i++) {
    $videoContent .= $Yvideo->getEmbedCode();
}

for ($i = 0; $i < 5; $i++) {
    $videoContent .= $Vvideo->getEmbedCode();
}
$videoContent .= '</div>';
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Videos Core01</title>
    <header>Core01</header>
    <style>
        body {
            background-color: lightskyblue;
            font-family: "Lucida Sans Typewriter", "Times New Roman";
        }
        
        .video-row {
            width: 23%;
            margin-bottom: 20px;
            padding: 10px;
            padding-bottom: 70px;
            border-bottom: 5px skyblue;
            box-sizing: border-box;
        }

        iframe {
            width: 100%;
            height: 100%;
        }

        .video-row h4 {
            margin: 0;
        }
        
    </style>
    
</head>
<body>
<div class="video-container">
   $videoContent
   </div>
</body>
</html>
HTML;