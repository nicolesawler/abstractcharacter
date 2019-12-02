<!DOCTYPE html>
<html lang="en" id="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=”viewport” content="width=device-width, initial-scale=1" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<title>Choose a Character</title>
<meta name="description" content="A description of the page" /><!-- 155 characters max --> 
<link rel="stylesheet" href="style.css" type="text/css"  />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'class.character.php';


//$alien = new ALIEN('John');
//
//echo $alien->gender("Male");
//echo "<br>";
//echo $alien->welcome();
//echo $alien->intro();
//
//
//$robot = new ROBOT('Jane');
//echo "<br>";
//echo $robot->gender("Female");
//echo "<br>";
//echo $robot->intro();

//Form Submit
if(isset($_POST['submit'])){
    
    $error = false;
    
    //Get form requirements
    $name = $_POST['name'];
    $character = $_POST['character'];
    $gender = $_POST['gender'];
    $color = $_POST['color'];
    $skill = $_POST['skill'];
    
    echo '<div class="character">';
    $output =  "";
    
    //Output Alien Stats
    if($character === "alien"){
        
        $alien = new ALIEN($name);
        
        //Use Trait for special edition species
        $n = rand(5, 100);
        if($n > 80){
            $output .= $alien->specialedition();
        }
        $output .=  '<div class="item"><img src="alien-no-photo.png" /><br>';
        $output .= $alien->intro();
        $output .=  "<br>";
        $output .=  $alien->gender($gender);
        $output .=  "<br>";
        $output .=  $alien->color($color);
        $output .=  "<br>";
        $output .=  $alien->skill($skill);
        $output .=  "</div>";
        
        //Output Robot Stats
    }elseif($character === "robot"){
        
        $robot = new ROBOT($name);
        
        $output .=  '<div class="item"><img src="robot-no-photo.png" /><br>';
        $output .=  $robot->intro();
        $output .=  "<br>";
        $output .=  $robot->gender($gender);
        $output .=  "<br>";
        $output .=  $robot->color($color);
        $output .=  "<br>";
        $output .=  $robot->skill($skill);
        $output .=  "</div>";
    }else{
        $error = true;
    }
    
    echo $output;
    
    //echo '</div><a href="javascript:void(0)" onclick="window.location.reload()">Choose Again</a><br>';
    echo '</div><br><a href="index.php"><button>Choose Again</button></a><br><br>';
    
    ?>
            
            
  
           
           
           
<?php 
}else{
?>

  <div class="character">      
<form method="post">
<h2>
   Create A Character
</h2>
    <b>
        Name:
    </b><br>
<input type="text" name="name" /><br>
<br>
<div class="group"> 
    
    <div class="item">
    <input type="radio" name="character" value="robot" id="robot"> <label for="robot">Robot
        <img src="robot-no-photo.png" /></label>
    </div>

    <div class="item">
    <input type="radio" name="character" value="alien" id="alien"> <label for="alien"> Alien
      <img src="alien-no-photo.png" /></label>
    </div>
    
</div>
<div class="clear"></div>

<h2>
    Gender
</h2>
<div class="set"> 
<div class="group">   
    <input type="radio" id="m" name="gender" value="male"> <label for="m">Male</label>
    <input type="radio" id="f" name="gender" value="female"> <label for="f">Female</label>
    <input type="radio" id="u" name="gender" value="other"> <label for="u">Undisclosed</label>
</div>
</div>
<h2>
    Color
</h2>
<div class="set"><div class="group">  
<input type="radio" name="color" value="red" id="Red"> <label for="Red">Red</label>
<input type="radio" name="color" value="green" id="Green"> <label for="Green">Green</label>
<input type="radio" name="color" value="yellow" id="Yellow"> <label for="Yellow">Yellow</label>
<input type="radio" name="color" value="blue" id="Blue"> <label for="Blue">Blue</label>
<input type="radio" name="color" value="purple" id="Purple"> <label for="Purple">Purple</label>
</div></div>
<h2>
    Primary Skill
</h2>
<div class="set"><div class="group"> 
<input type="radio" name="skill" value="strength" id="strength"> <label for="strength">Strength</label>
<input type="radio" name="skill" value="speed" id="speed"> <label for="speed">Speed</label>
<input type="radio" name="skill" value="invisibility" id="invisibility"> <label for="invisibility">Invisibility</label>
<input type="radio" name="skill" value="smarts" id="smarts"> <label for="smarts">Smarts</label>
</div></div>


<input type="submit" name="submit" />
</form>
  </div>   
            
<?php } ?>          
            
            
            
<div class="clear"></div>
        <footer>
          <p>&copy; <?= date('Y') ?> <a href="http://nicolesawler.com" target="_new">Nicole Sawler</a></p>
        </footer>
        </div><!-- container -->
    </div><!-- wrapper -->
</body>
</html>  