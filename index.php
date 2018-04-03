<?php include 'cabecalho.php'; 
$defaultTimeZone='UTC';

date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');





?>

<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Pagina do Usuário</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <?php if($_SESSION['tipo']=='adiministrador'){ ?>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">0 Chamados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
       

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="mr-5">0 Usuarios Cadastrados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
         
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-info-circle"></i>
                    </div>
                    <div class="mr-5">0 Notificaões do Sistema</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <?php }?>
        <!--<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>-->
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Example Bar Chart Card-->

            <!-- /Card Columns-->
        </div>


        <div class="col-lg-4">
            <!-- Example Pie Chart Card-->


        </div>
    </div>
    <!-- Example DataTables Card-->


</div>

<?= include 'rodape.php'; ?>