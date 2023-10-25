<?php
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

    //Methoden implementieren
    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    //abstrakte Methode deklarieren
    abstract public function getEmbedCode(): string;
}