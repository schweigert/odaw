<html>
  <head>
    <meta charset="UTF-8">
    <title>Aula 05b</title>
    <meta author="Marlon Henry Schweigert">

    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>

    <div class="row p-5">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            Atividade a
          </div>
          <div class="card-body px-5">
            <form id="a">
              <div class="row">
                <input type="text" name="original" class="form-control">
              </div>
              <div class="row">
                <input type="text" name="uppercase" disabled class="form-control">
              </div>
              <div class="row">
                <input type="text" name="downcase" disabled class="form-control">
              </div>
              <div class="row">
                <input type="checkbox" name="enable" class="form-control">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            Atividade b
          </div>
          <div class="card-body px-5">
              <form id="b">
                <div class="row">Email</div>
                <div class="row">
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="row">Password</div>
                <div class="row">
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="row">Confirm password</div>
                <div class="row">
                  <input type="password" name="confirm_password" class="form-control">
                </div>
                <div class="row">
                  <input type="checkbox" name="enable_feedback" class="mr-2">
                  Receive feedback?
                </div>
                <div class="row">
                  <input type="button" value="Register" class="btn btn-primary">
                </div>
              </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            Atividade c
          </div>
          <div class="card-body px-5">
              <form id="c">
                <div class="row">Nome</div>
                <div class="row">
                  <input type="text" name="name" class="form-control">
                </div>

                <div class="row">
                  <p class="message"></p>
                </div>
              </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-header">
            Atividade d
          </div>
          <div class="card-body px-5">
            <div class="clock"></div>
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
