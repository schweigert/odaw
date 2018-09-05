<html>
  <head>
    <meta charset="UTF-8">
    <title>Aula 08</title>
    <meta author="Jonathan de Oliveira Cardoso">
    <meta author="Marlon Henry Schweigert">
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            ATIVIDADE A
          </div>
            <div class="card-body">
              <form id="register" action="post.php" method="post">
                <div class="row justify-content-center">
                  Email:
                </div>
                <div class="row justify-content-center">
                  <input type="email" name="email">
                </div>

                <div class="row justify-content-center mt-3">
                  Password:
                </div>
                <div class="row justify-content-center">
                  <input type="password" name="password">
                </div>

                <div class="row justify-content-center mt-3">
                  Name:
                </div>
                <div class="row justify-content-center">
                  <input type="textarea" name="name">
                </div>

                <div class="row justify-content-center">
                  Score:
                </div>
                <div class="row justify-content-center">
                  <select name="score" form="register">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                  </select>
                </div>

                <div class="row justify-content-center mt-3">
                  Gender
                </div>
                <div class="row justify-content-center">
                  <input type="radio" name="gender" value="Male"> Male
                </div>
                <div class="row justify-content-center">
                  <input type="radio" name="gender" value="Female"> Female
                </div>


                <div class="row justify-content-center mt-3">
                  Captcha
                </div>
                <div class="row justify-content-center">
                  <input type="checkbox">
                </div>

                <div class="row justify-content-center mt-5">
                  <div class="btn-group" role="group">
                    <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
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
