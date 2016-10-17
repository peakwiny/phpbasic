<?php
class car{
    public $color;//property
    public function setColor($c){//function //method
        return 'Car is :'.$this->color=$c;
    }
    public function sayHello(){
        return 'say Hello';
        
    }
}
$newcar=new car;
$test=$newcar ->setColor('red');
echo $test;
echo'<hr>';
echo $newcar->sayHello();
echo '<hr>';
echo $newcar->color='orange';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
