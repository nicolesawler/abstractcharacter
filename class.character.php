<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**********************************************
 * 
 * 
 * CHARACTER
 * 
 * ********************************************
 */

abstract class CHARACTER{
    
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  abstract public function intro();
  abstract protected function gender($choice);
    
    
}


trait CHARACTER_TRAITS { 
  public function welcome() { 
     echo "Welcome, "; 
  } 
  public function specialedition() { 
     echo "SPECIAL EDITION "; 
  } 
  
  
} 


/**********************************************
 * 
 * 
 * ALIEN
 * 
 * ********************************************
 */


class ALIEN extends CHARACTER {
    
    use CHARACTER_TRAITS;

  public function intro(){
    return "I'm $this->name! Proud to be an Alien! ";
  }
    
    
      // The child class may define optional arguments that are not in the parent's abstract method
  public function gender($choice, $start = "I'm a ") {
    if ($choice == "female") {
      $gender = "girl";
    } elseif ($choice == "male") {
      $gender = "boy";
    } else {
      $gender = "unsure";
    }
    return "{$start} {$gender}";
  }
    
    
    
  // The child class may define optional arguments that are not in the parent's abstract method
  public function color($choice) {
    switch ($choice){
       case "red": $return = "I'm colored red";
           break;
       case "green": $return = "I'm colored green";
           break;
        case "yellow": $return = "I'm colored yellow";
           break;
        case "blue": $return = "I'm colored blue";
           break;
        case "purple": $return = "I'm colored purple";
           break;
       default: $return = "I'm colored grey";
           break;
    }
     
    return $return;
  }
    
    
   public function skill($choice ) {
    $power = rand(5, 100);
    $strength = $speed = $smarts = $invisibility = rand(5, 55);
    
    if ($choice == "strength") {
      $strength = rand(55, 100);
    } elseif ($choice == "speed") {
      $speed = rand(55, 100);
    } elseif ($choice == "smarts") {
      $smarts = rand(55, 100);
    } else {
      $invisibility = rand(55, 100);
    }
    return "Power: {$power}, Strength: {$strength}, Speed: {$speed}, Invisibility: {$invisibility}, Smarts: {$smarts} ";
  }
  
    
}

/**********************************************
 * 
 * 
 * ROBOT
 * 
 * ********************************************
 */

class ROBOT extends CHARACTER {
    

  public function intro(){
    return "I'm $this->name! Proud to be a Robot! ";
  }
    
    
   public function gender($choice, $start = "I'm a ") {
    if ($choice == "female") {
      $gender = "girl";
    } elseif ($choice == "male") {
      $gender = "boy";
    } else {
      $gender = "unsure";
    }
    return "{$start} {$gender}";
  }
    
    
      
  // The child class may define optional arguments that are not in the parent's abstract method
  public function color($choice) {
    switch ($choice){
       case "red": $return = "I'm colored red";
           break;
       case "green": $return = "I'm colored green";
           break;
        case "yellow": $return = "I'm colored yellow";
           break;
        case "blue": $return = "I'm colored blue";
           break;
        case "purple": $return = "I'm colored purple";
           break;
       default: $return = "I'm colored grey";
           break;
    }
    return $return;
  } 
    
  
   public function skill($choice ) {
    $power = rand(5, 100);
    $strength = $speed = $smarts = $invisibility = rand(5, 55);
    
    if ($choice == "strength") {
      $strength = rand(55, 100);
    } elseif ($choice == "speed") {
      $speed = rand(55, 100);
    } elseif ($choice == "smarts") {
      $smarts = rand(55, 100);
    } else {
      $invisibility = rand(55, 100);
    }
    return "Power: {$power}, Strength: {$strength}, Speed: {$speed}, Invisibility: {$invisibility}, Smarts: {$smarts} ";
  }
  
  
}