<?php
  require 'models/user_model.php';

  (new UserModel('hehe', 'haha', 'heha@heha.com'))->create();
?>

<?php
  foreach((new UserModel())->all() as $row) {
    echo var_dump($row);
    echo '<br>';
  }
?>
