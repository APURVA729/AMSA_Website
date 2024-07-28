<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

 <?php
//background color change

$color_code = array('#f36f36','#1bac91');
$random_color = $color_code[array_rand($color_code)];
 ?>

 <html>
        <body style = "background:<?php echo $random_color; ?>">
       </body>

</html>

 <?php 


        echo '<p>

 <h1><font color="black" size="9"><center>Presidents Message</center></font></h1> <br><br>

 </font>
 </p>'; ?> 
 </body>
</html>