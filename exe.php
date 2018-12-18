<?php

include("Human.php");
include("Youtuber.php");
include("Hikakin.php");

$human1 = new Human;
$human1->say();
//echo $human1->name;これでもOK
$human1->eat();

$human2 = new Youtuber;
$human2->say();
$human2->sayhello();

$human3 = new Hikakin;
$human3->say();
$human3->sayhello();

/**
 * 
 * include("Human.php");
 * 
 * $human1 = new Human; //methodからの書き換えしかできなくなるのでバグが減る
 * $human1->say();
 * 
 * $human1->setName("kawata");
 * $human1->say();
 * 
 * $human1->setName("yamato");
 * $human1->say();
 * 
 */