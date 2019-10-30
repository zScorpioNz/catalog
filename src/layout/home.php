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


<div class="container-fluid ct-header">
  <div class="container">
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
</div>

<!-- div tab menu principal -->
<div class="container">

  <ul class="nav nav-tabs fixed-bottom  text-center ct-menu text-center ">
<!--  <li class="active"><a data-toggle="tab" href="#home"> <i class="fas fa-home"> 
  <p> Home </p> </i> </a></li> -->
  <li class="active"><a data-toggle="tab" href="#home"> <i class="fas fa-home"> 
  </i> <p> Home </p> </a></li>
  <li><a data-toggle="tab" href="#menu1"> <i class="fas fa-book-open"></i> <p> Catálogo </p> </a></li> 
  <li><a data-toggle="tab" href="#menu2"><i class="fas fa-percentage"></i> <p> Promoção </p> </a></li>
  <li><a data-toggle="tab" href="#menu3"><i class="fas fa-search">    </i> <p> Busca     </p> </a></li>
</ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="text-center"> Marcas </h3>
      <?php include "page/cardHome.php"; ?>
    </div>

    <div id="menu1" class="tab-pane fade">
      <h3> Catálogo </h3>
    </div>
    
    <div id="menu2" class="tab-pane fade">
      <h3> Promoção </h3>
    </div>

    <div id="menu3" class="tab-pane fade">
      <h3> Formúlario de Busca </h3>
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