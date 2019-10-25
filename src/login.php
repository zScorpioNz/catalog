
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- cor navegador
    https://blog.mxcursos.com/mudando-cor-do-browser-de-acordo-com-seu-site-no-mobile/ -->
    <!-- <meta name="theme-color" content="#0098ac"> -->

    <title> Catalog Dashboard </title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/fontawesome_5.11/css/all.css">
    <link rel="stylesheet" href="src/custom/css/login.css">

</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><span style="font-size:2em;"><i class="fas fa-certificate">             
            </i></span><br> CATALOG </h5>
            
            <form class="form-signin" action="src/layout/home.php" method="post">
              
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" 
                placeholder="Endereço de email">
                <label> Email </label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password">
                <label>Senha</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block" type="submit">
              Entrar</button>
              
              <a href="src"></a>
              <hr class="my-4">
              <!-- 
              Social Button    
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>


