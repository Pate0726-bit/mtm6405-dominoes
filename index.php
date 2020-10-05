<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DOMinoes with PHP</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
<body>

<h1>Rupal Patel Dominoes</h1>

<div class="dominoes">

<?php

$counters = ["dots zero","dots one","dots two","dots three","dots four","dots five","dots six"];

for($domino = 0 ; $domino < 100 ; $domino++ ) { 
  ?>
  <div class="domino">

    <?php
    for( $a = 0 ; $a < 2 ; $a++ ) {
      $number =rand(0,6);

      ?>
      <div class=" <?php echo $counters[$number];?>">
      <?php
      
      for ( $i = 0 ; $i < $number ; $i++ ) {
      ?>

      <div class="dot"> </div>
    <?php 
    } 
    ?>
    
    </div>

    <?php 
  } 
  ?>
  </div>

  <?php 
} 
?>
</div>

</body>
</html>