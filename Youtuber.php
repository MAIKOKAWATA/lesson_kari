<?php

class YouTuber extends Human{
    public $name = "handlename";
    public function say () {
        echo "\n".$this->name;
    }
    public $aisatsu = "独特な挨拶";
    public function sayhello () {
        echo "\n".$this->aisatsu;
    }
}