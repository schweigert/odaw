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
      $conn = $this->mysqlConn();

      $sql = '
        SELECT id, username, password, email
        FROM users
      ';

      $all = $this->resultToArray($conn->query($sql));
      $conn->close();
      return $all;
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

      $conn->close();
    }

    public function update($id) {
      $conn = $this->mysqlConn();
      mysqli_query(
        $conn,
        '
        UPDATE users
        SET username="'.$this->username.'", password="'.$this->password.'", email="'.$this->email.'"
        WHERE id="'.$id.'"
        '
      ) or die(mysqli_error($conn));

      $conn->close();
    }

    public function destroy($id) {
      $conn = $this->mysqlConn();
      mysqli_query(
        $conn,
        '
        DELETE FROM users
        WHERE id="'.$id.'"
        '
      ) or die(mysqli_error($conn));

      $conn->close();
    }
  }
?>
