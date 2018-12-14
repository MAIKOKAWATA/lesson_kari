<?php

include("Human.php");

$human1 = new Human;
$human1->say();
//echo $human1->name;これでもOK

$human1->eat();


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