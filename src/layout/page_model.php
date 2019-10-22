<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- cor navegador
    https://blog.mxcursos.com/mudando-cor-do-browser-de-acordo-com-seu-site-no-mobile/ -->
    <meta name="theme-color" content="black">

    <title>Document</title>

    <?php include "script/routeHead.php"; ?>


</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-dark bg-superdark">
  <a class="navbar-brand" href="#">

  <h5 class="card-title text-center"><span style="font-size: 1.5em;"><i class="fas fa-certificate"></i></span> <span class="font-weight-lighter">CATA</span>LOG</h5>
<!--   
    <img src="img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap -->
  </a>
</nav>


<div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <nav class="fixed-bottom">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                        <span style="">
                        <i class="fas fa-home"></i></span><br>
                        Home
                      </a>
                      <a class="nav-item nav-link" id="nav-promocao-tab" data-toggle="tab" href="#nav-promocao" role="tab" aria-controls="nav-promocao" aria-selected="false">
                        <span style="">
                        <i class="fas fa-percentage"></i></span><br>
                        Promoção
                      </a>
                      <a class="nav-item nav-link" id="nav-busca-tab" data-toggle="tab" href="#nav-busca" role="tab" aria-controls="nav-busca" aria-selected="false">
                        <span style="">
                        <i class="fas fa-search"></i></span><br>
                        Busca
                      </a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      Aqui vai ficar o conteudo da pagina home conforme wireframe do projeto
                    </div>
                    <div class="tab-pane fade" id="nav-promocao" role="tabpanel" aria-labelledby="nav-promocao-tab">
                      <p>Aqui vai ficar todas promções em cards</p>
                      <?php include "page/produtosCard.php";?>
                    </div>
                    <div class="tab-pane fade" id="nav-busca" role="tabpanel" aria-labelledby="nav-busca-tab">
                      Aqui vai ficar o botão para aparecer o icone de busca estilo accordion
                    </div>

                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>