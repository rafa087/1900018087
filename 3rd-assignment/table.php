<?php
  echo "<h1>Mandarin Course registration</h1>"; 
  $f1 = fopen("tablecourse.txt","r"); 
  echo "<table border=2>";

  if (!$f1) {
    die('file does not exist');
  }

  function getmatch($rx, $ct)  
  {  
    match($rx,$ct,$matches);     

    return $x;
  }
  
  while (!feof($f1)) 
{ 
  $x = fgets($f1);
  echo "<tr><td>$x</td>"; 
  }
  echo "<tr>";

  fclose($f1);
?>