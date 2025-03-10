<?php

$age = "15"; //integer
$newAge = (float)$age;

// $pandafood = array('bamboo', 'apple','orange'); //array
$pandafood = ['bamboo','apple','orange']; //array

class panda {
   public $name = "PANDA"; //string
   public $height = 1.75; //float
   public $isPanda = true; //boolean
   

}

$panda= new panda();

echo var_dump($panda->name, $age, $panda->isPanda,$panda->height, $pandafood, $newAge);