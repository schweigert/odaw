<?php
  require 'models/user_model.php';

  $foo = new UserModel('hehe', 'haha', 'heha@heha.com');
  echo var_dump($foo->create());
?>
