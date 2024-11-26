<?php

//oop to create 5 new isntanes of classs fruit to describe different fruits we have

class Fruit {
    public $skin='tender';
    public $weight='100g';
    public $colour;
    public $name;
    public $taste1='Bitter';
    public $taste2='Sweet';
    public $nutrients;

    public function __construct($name, $skin, $weight, $colour , $taste2, $taste1, $nutrients ) {
        print 'This fruit is the ' . "$name" . ' fruit. ' . 'It is above ' . "$this->weight" . ' as it weighs approximately ' . "$weight." . ' It is ' . "$colour" . ' in colour ' . ',and has a ' . "$taste2" . ' taste. ' . 'It is also rich in ' . "$nutrients."  ;
    }
}


$orange = new Fruit('orange','tender', '300g', 'yellow-green', 'sweet', 'bitter' , 'vitamin C');
echo '<br><br>';

$apple = new Fruit('apple','hard', '400g', 'green', 'sweet', 'bitter' , 'vitamin A');
echo '<br><br>';

$lime = new Fruit('lime','tender', '110g', 'green', 'bitter', 'sweet' , 'vitamin B');
echo '<br><br>';

$tangerine = new Fruit('tangerine','tender', '200g', 'orange', 'sweet', 'bitter' , 'vitamin C');
echo '<br><br>';

$avocado = new Fruit('avocado','hard', '450g', 'greenish', 'neutral', 'bitter' , 'vitamin A');
