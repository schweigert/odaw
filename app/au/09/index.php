<?php
  require 'models/user_model.php';

  (new UserModel('hehe1231231', 'haha1232123', '123123heha@heha.com'))->create();
?>

<?php
  (new UserModel('kkk'))->update(1);
  (new UserModel('kkk'))->destroy(5);
?>

<?php
  foreach((new UserModel())->all() as $row) {
    echo var_dump($row);
    echo '<br>';
  }
?>
