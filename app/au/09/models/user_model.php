<?php
  require 'model_base.php';

  class UserModel extends ModelBase {
    var $username;
    var $password;
    var $email;

    function __construct($username = '', $password = '', $email = ''){
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
    }

    public function all() {
      $all = [];
      $conn = $this->mysqlConn();

      $sql = '
        SELECT username, password, email
        FROM users
      ';

      return $this->resultToArray($conn->query($sql));
    }

    public function create() {
      $conn = $this->mysqlConn();
      mysqli_query(
        $conn,
        '
        INSERT INTO
          users (username, password, email)
        VALUES
          ("'.$this->username.'", "'.$this->password.'", "'.$this->email.'")
        '
      ) or die(mysqli_error($conn));
    }
  }
?>
