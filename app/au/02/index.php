<?
  function oT($li) {
    $type_variable = "i";
    echo "<".$li." type='".$type_variable."'>\n";
  }

  function cT($li) {
    echo "</".$li.">\n";
  }

  function fiboUHL($n) {
    oT("ul");
    oT("li");
    echo "fib(".$n.")";
    cT("li");
    if($n <= 0) {
      $r = 1;
    } else {
      $f1 = fiboUHL($n-1);
      $f2 = fiboUHL($n-2);
      $r = $f1 + $f2;
      oT("li");
      echo "fib(".($n-1).") + fib(".($n-2)."):";
      echo $r;
      cT("li");
    }
    oT("li");
    echo "fib(".$n."):".$r;
    cT("li");
    cT("ul");
    return $r;
  }

  function fiboOHL($n) {
    oT("ol");
    oT("li");
    echo "fib(".$n.")";
    cT("li");
    if($n <= 0) {
      $r = 1;
    } else {
      $f1 = fiboOHL($n-1);
      $f2 = fiboOHL($n-2);
      $r = $f1 + $f2;
      oT("li");
      echo "fib(".($n-1).") + fib(".($n-2)."):";
      echo $r;
      cT("li");
    }
    oT("li");
    echo "fib(".$n."):".$r;
    cT("li");
    cT("ol");
    return $r;
  }
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Aula 0002</title>
    <meta author="Marlon Henry Schweigert">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
    <h1>Aula 002</h2>
    <p>Lista de fibonacci</p>
    
    <h2>Unordered HTML List</h2>
    <? fiboUHL(5) ?>

    <h2> Ordered HTML List</h2>
      <h3> Type: 1 </h3>
      <? fiboOHL(5) ?>

      <h3> Type i </h3>
      <?
        fiboOHL(5);
      ?>
  </body>
  <footer>
    <!-- Bootstrap -->
    <script src="/js/jquery.min.js" crossorigin="anonymous"></script>
    <script src="/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </footer>
</html>
