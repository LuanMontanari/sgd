<?php 
require_once '/util/seguranca.php';
 require_once '/dao/UsuarioDao.php';
 require_once '/model/Usuario.php';
 $usuarioDao = new dao\UsuarioDao();
 $usuario = new model\Usuario();
 
 $id=$_SESSION['id'];
 
 $usuario = $usuarioDao->find($id);
 
 include 'cabecalho.php'; 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header">
                    Nome:
                </div>
                <div class="card-body">
                    <?= $usuario->getNomeUsuario() ?>
                </div>

            </div>

            <div class="card mb-3">
                <div class="card-header">
                    Login:
                </div>
                <div class="card-body">
                    <?= $usuario->getLoginUsuario(); ?>
                </div>

            </div>

            <div class="card mb-3">
                <div class="card-header">
                    Email:
                </div>
                <div class="card-body">
                    <?= $usuario->getEmailUsuario() ?>
                </div>

            </div>

           <?= "<a href=alterar_usuario.php?id=".$id." class=\"btn btn-primary\"> Alterar</a>" ?>
        </div>
    </div>
</div> 

<?php include 'rodape.php'; ?>



