<?php
class YouTubeVideo extends Video
{
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, "YouTube");
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe width="500" height="300" src="https://www.youtube.com/embed/' . $this->videoId . '"></iframe>';
    }

}