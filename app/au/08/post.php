<html>
  <body>
    <?php
      if($_POST["name"]==""){
        exit("Without name.");
      }
      if($_POST["email"]=="") {
        exit("Without email");
      }
      if($_POST["password"]==""){
        exit('Without password');
      }
      if($_POST["gender"]==""){
        exit('Without gender');
      }
      if($_POST["score"]==""){
        exit("Select a score");
      }
    ?>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?><br>
    Your password (SHA512): <?php echo hash('sha512', $_POST["password"]); ?><br>
    Your gender: <?php echo $_POST["gender"]; ?><br>
    You was registered in category: <?php echo $_POST["score"]; ?><br>
  </body>
</html>
