<?php
     class classyClass
     {
        public $name;
        public $colors;
        public $fashions;
     }

     
   $list = Array();
   $list[$i] = new classyClass();

   $length = 6;
   for($x = 0; $x < $length; $x++)
   {
      $list[$x]->name = "Johnny";
      $list[$x]->colors = "blue";
      $list[$x]->fashions = "shorts";
   }
   for($x = 0; $x < $length; $x++)
   {
      echo $list[$x]->name . $list[$x]->colors . $list[$x]->fashions . "<br>";
   }
 ?>

