<?php
  class ModelBase {
    function __construct() {}

    public function mysqlConn() {
      $conn = new mysqli('db', 'root', 'root', 'odaw');
      if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
      }

      return $conn;
    }

    public function resultToArray($result) {
      while($row = $result->fetch_assoc()) {
          $rows[] = $row;
      }

      return $rows;
    }
  }
?>
