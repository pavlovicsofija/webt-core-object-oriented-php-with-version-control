<?php
class YouTubeVideo extends Video
{
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, "YouTube");
        $this->videoId = $videoId;
    }

    //generiert und gibt  Einbettungscode für das Video zurück, der ein Iframe-Element enthält, das auf das YT Video verweist
    public function getEmbedCode(): string {
        return '<iframe width="500" height="300" src="https://www.youtube.com/embed/' . $this->videoId . '"></iframe>';
    }

}