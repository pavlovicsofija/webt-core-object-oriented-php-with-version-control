<?php
interface VideoInterface{
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}

abstract class Video implements VideoInterface{
    private $name;
    private $source;

    /**
     * @param $name
     * @param $source
     * @param $code
     */
    public function __construct($name, $source)
    {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    abstract public function getEmbedCode(): string;
}

class YouTubeVideo extends Video
{
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, "YouTube");
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $this->videoId . '"></iframe>';
    }

}

class VimeoVideo extends Video
{
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, "Vimeo");
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe width="560" height="315" src="https://player.vimeo.com/video/' . $this->videoId . '"></iframe>';
    }

}
$video = new VimeoVideo("keine Ahnung", "547868060");

echo "Video Title: " . $video->getName() . "<br>";
echo "Video Source: " . $video->getSource() . "<br>";

echo "Video Embed Code: <br>";
echo $video->getEmbedCode();

$video = new YouTubeVideo("dog", "DzpmhfiBCO8");

echo "Video Title: " . $video->getName() . "<br>";
echo "Video Source: " . $video->getSource() . "<br>";

echo "Video Embed Code: <br>";
echo $video->getEmbedCode();

