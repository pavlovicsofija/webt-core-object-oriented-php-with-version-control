<?php
interface VideoInterface{
    //methoden werden vorgegeben
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}