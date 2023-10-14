<?php
interface VideoInterface{
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}

abstract class Video implements VideoInterface{
    private $name;
    private $source;
    private $code;

    /**
     * @param $name
     * @param $source
     * @param $code
     */
    public function __construct($name, $source, $code)
    {
        $this->name = $name;
        $this->source = $source;
        $this->code = $code;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSource(): string {
        return $this->source;
    }

    public function getEmbedCode(): string {
        return $this->getEmbedCode();
    }


}