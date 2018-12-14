<?php

/*
 * class名はファイル名とそろえて、一文字目を大文字にするのが流行
 * https://qiita.com/ryo0301/items/7c7b3571d71b934af3f8
 * いまはキャメルが多数派
 * 1ファイルに1クラスしか書かないのがいまふう
 */

/**
 * コマンド
 * cd ../../lesson_kari/
 * php exe.php
 */

/**
 * 年齢とか性別はプロパティ
 * しゃべる歩くがメソッド ex)function
 * というイメージ
 */
class Human {
    /**
     * @var string
     */
    public $name = "maiko";
    public function say () {
        echo $this->name;
    }

    public $gohan = "banana";
    public function eat () {
        echo "\n".$this->gohan;
    }

}

/**
 * 
 * class Human{
 *  protected $name = "kimura";
 * 
 * public function staName($name){ //write
 *   $this->name = $name;
 *  }
 * 
 * public function getName(){      //read
 *      return $this->name; 
 *  }
 * 
 * public function say(){
 *      echo $this->name;
 *  }
 * 
 * }
 * 
 */

/**
 * Humanを継承してYouTuberをつくり、
 * YouTuberを継承してHIKAKINを作る
 * HIKAKINはYouTuberか歌手か？-ひし形継承問題→トレイトで解決できる
 */