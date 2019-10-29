<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- cor navegador
    https://blog.mxcursos.com/mudando-cor-do-browser-de-acordo-com-seu-site-no-mobile/ -->
    <meta name="theme-color" content="yellow">

    <title> Catalog Tela Principal </title>

    <?php include "route/routeHead.php"; ?>

  </head>
  <body>


<div class="container ct-header">
  <div class="row">

    <div class="col-6"> 
       <h5 class="card-title"><span style="font-size: 1.5em;">
        <i class="fas fa-certificate"></i>
      </span> <span class="font-weight-lighter"> CATA </span> LOG </h5>
      </div>

    <div class="col-6 text-right"> 
      <h5 class="card-title"><span style="font-size: 1em;">
       <i class="fas fa-bell"> 3 </i></span></h5>
    </div>

  </div>
</div>


<div class="container-fluid ct-carrocel">
  <?php include "page/carrossel.php"; ?>
</div>  



   <!-- div tab menu  -->
<div class="container">

  <ul class="nav nav-tabs fixed-bottom  rc-fundo-fundo">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="text-center"> Marcas </h3>

        <?php include "page/CardHome.php"; ?>
    </div>

    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
    </div>

    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>

    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>

  </div> <!-- Fim tab-content -->
</div> <!-- Fim do container -->  





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- script tab menu -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Fim -->
</body>
</html>