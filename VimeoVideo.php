<?php
class VimeoVideo extends Video
{
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, "Vimeo");
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe width="500" height="300" src="https://player.vimeo.com/video/' . $this->videoId . '"></iframe>';
    }

}