<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Novo Chamado</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">Sistema</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Usuarios</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a href="pesquisarUsuario.php">Pesquisar</a>
                            </li>
                            <li>
                                <a href="cadastrarUsuario.php">Cadastrar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-map-marker"></i>
                            <span class="nav-link-text">Locais</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                            <li>
                                <a href="pesquisarLocal.php">Pesquisar</a>
                            </li>
                            <li>
                                <a href="cadastrarLocal.php">Cadastrar</a>
                            </li>                          
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-comment"></i>
                            <span class="nav-link-text">Chamados</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="cadastrarChamado.php">Novo Chamado</a>
                            </li>
                            <li>
                                <a href="pesquisarChamado.php">Acompanhar Chamado</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                        <a class="nav-link" href="#">
                            <i class="fa fa-fw fa-info-circle"></i>
                            <span class="nav-link-text">Sobre</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>
                            <span class="d-lg-none">Chamados
                                <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">Novos Chamados:</h6>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
                    </li>
                </ul>
            </div>
        </nav>



        <div class="content-wrapper">
            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Cadastro de Chamado</li>

                </ol>
                <!-- Icon Cards-->

                <div class="row">
                    <div class="col-lg-8">
                        <!-- Example Bar Chart Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-user"></i> Novo Chamado</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label for="nome">Assunto Chamado:</label>
                                                <input class="form-control" id="" type="text"  placeholder="" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="nome">Nome Requerente:</label>
                                                <input class="form-control" id="" type="text"  placeholder="" required="" readonly="" value="Nome Usuário Requerente">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label for="data">*Local</label>
                                                <select id="selectbasic" name="tipousuario" class="form-control">
                                                    <option value="1">LABORATÓRIO 1</option>
                                                    <option value="2">LABORATÓRIO 2</option>
                                                    <option value="2">LABORATÓRIO 3</option>
                                                    <option value="2" disabled="">SECRETARIA</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="data">Data:</label>
                                                <input class="form-control" id="" type="date" placeholder="" readonly="">
                                            </div>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label for="data">*Elemento</label>
                                                <select id="selectbasic" name="tipousuario" class="form-control">
                                                    <option value="1">COMPUTADOR 01</option>
                                                    <option value="2">COMPUTADOR 02</option>
                                                    <option value="3">COMPUTADOR 03</option>
                                                    <option value="4" disabled="">COMPUTADOR 04</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <div class="form-row">
                                            <label for="nome">*Descrição Requerente:</label>                                                        
                                            <textarea class="form-control" id="textarea" name="textarea">Descreva o problema de forma detalhada</textarea>                                       
                                        </div>
                                    </div>                                   

                                    <hr>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Cadastrar</button>
                                        <button type="reset" class="btn btn-primary"><i class="fa fa-refresh"></i> limpar</button>
                                        <a href="index.php"><button type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Cancelar</button></a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer small text-muted">*Campos Obrigatórios</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Example Pie Chart Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-info-circle"></i> Informações</div>
                            <div class="card-body">

                                <span>Campo <strong>Data</strong> pega horário local</span>

                            </div>
                            <div class="card-footer small text-muted"></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Sistema 2017</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Encerramento de Sessão</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja realmente encerrar sua Sessão?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>
