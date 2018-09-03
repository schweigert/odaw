<?
  session_start();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Aula 07</title>
    <meta author="Marlon Henry Schweigert">

    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
    <div class="row p-5">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            ATIVIDADE A
          </div>
          <p>
            Hoje é <? echo date('d/m/Y') ?> e agora são <? echo date('h:i') ?>h
          <p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            ATIVIDADE B
          </div>
          <p>
            <?
              $file = "visits";
              $handle = fopen($file,'r+');
              $data = fread($handle, 512);
              $count = $data+1;
              print "Você é o visitante número ".$count;
              fseek($handle, 0);
              fwrite($handle, $count);
              fclose($handle);
            ?>
          <p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            ATIVIDADE C
          </div>
          <p>
            <?
            if (is_null($_SESSION['visits'])) {
              $_SESSION['visits'] = 0;
            }
            $_SESSION['visits']++;
            echo $_SESSION['visits'];
            ?>
          <p>
        </div>
      </div>
    </div>
    <footer>
      <!-- Javascript -->
      <script src="/js/jquery.min.js" crossorigin="anonymous"></script>
      <script src="/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="/js/bootstrap.min.js" crossorigin="anonymous"></script>

      <script src="/js/moment.min.js" crossorigin="anonymous"></script>

      <script src="application.js"></script>
    </footer>
  </body>
</html>
