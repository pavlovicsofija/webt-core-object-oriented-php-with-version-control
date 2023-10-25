<?php
class VimeoVideo extends Video
{
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, "Vimeo");
        $this->videoId = $videoId;
    }

    //generiert und gibt  Einbettungscode für das Video zurück, der ein Iframe-Element enthält, das auf das Vimeo-Video verweist
    public function getEmbedCode(): string {
        return '<iframe width="500" height="300" src="https://player.vimeo.com/video/' . $this->videoId . '"></iframe>';
    }

}