<?php
  $arquivo = "login.txt";
  $handle = fopen($arquivo,'r');
  $name = fgets($handle, 512);
  $pass = fgets($handle, 512);
  print "<b>login:</b> ".$name." <b>password:</b> ".$pass;
  print "<br />"."if you want know, what your password is in SHA512:<b> ".hash('sha512',$pass)."</b>";
  fseek($handle,0);
  fclose($handle);
?>
