<html>
  <head>
    <meta charset="UTF-8">
    <title>Aula 06</title>
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
          <div class="card-body">
            <form id="a">
              CPF
              <div class="row">
                <input type="text" name="cpf" class="form-control">
              </div>
              EMAIL
              <div class="row">
                <input type="text" name="email" class="form-control">
              </div>
              DATE
              <div class="row">
                <input type="text" name="data" class="form-control">
              </div>

              <div class="row">
                <input type="button" value="REGISTER" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            ATIVIDADE B
          </div>
          <div class="card-body">
            <div class="row">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSquare" aria-expanded="true" aria-controls="collapseOne">
                Square
              </button>
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseCube" aria-expanded="true" aria-controls="collapseOne">
                Cube
              </button>
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFatorial" aria-expanded="true" aria-controls="collapseOne">
                Fatorial
              </button>
            </div>

            <div id="collapseSquare" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card bg-primary text-light mb-3">
                <div class="card-header">
                  SQUARE
                </div>
                <div class="card-body">
                  <lu class='js-list'>
                  </lu>
                </div>
              </div>
            </div>
            <div id="collapseCube" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card bg-primary text-light mb-3">
                <div class="card-header">
                  CUBE
                </div>
                <div class="card-body">
                  <lu class='js-list'>
                  </lu>
                </div>
              </div>
            </div>
            <div id="collapseFatorial" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card bg-primary text-light mb-3">
                <div class="card-header">
                  FATORIAL
                </div>
                <div class="card-body">
                  <lu class='js-list'>
                  </lu>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            ATIVIDADE C
          </div>
          <div class="card-body">
            <div id="c">
            </div>
          </div>
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
