<?php

class Hikakin extends Youtuber{
      /**
     * @var string
     */
    public $name = "\nhikakin";
    public function say () {
        echo $this->name;
    }

    public $aisatsu = "ブンブンハローYouTube";
    public function hello () {
        echo "\n".$this->aisatsu;
    }  
}