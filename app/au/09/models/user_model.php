<?php
  require 'model_base.php';

  class UserModel extends ModelBase {
    var $username;
    var $password;
    var $email;

    function __construct($username, $password, $email){
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
    }

    public function create() {
      echo 'hehe';
      return $this->mysqlConn();
    }
  }
?>
