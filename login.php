<?php
session_start();

if (isset($_SESSION['login'])) {
    header('location:index.php');
}
//$msg=null;
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="controller/logarCTR.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input class="form-control" id="login" name="login" type="text" aria-describedby="emailHelp" placeholder="login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input class="form-control" id="exampleInputPassword1" name="senha" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Relembrar</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="entrar" >
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="register.html">Solicitar Cadastro</a>
                        <a class="d-block small" href="forgot-password.html">Solicitar Nova Senha</a>


                    </div>
                    <div id="msg" class="alert alert-light" role="alert">
                        
                    </div>
                </div>
            </div>
        </div>
        <script>
            var msg = "<?= $_GET['msg'] ?>";
            document.getElementById("msg").innerHTML = msg;
        </script>  
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
