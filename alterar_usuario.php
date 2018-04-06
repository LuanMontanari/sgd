<?php
require_once'/util/seguranca.php';
require_once'/cabecalho.php';
require_once '/dao/UsuarioDao.php';
require_once '/model/Usuario.php';

$id = $_GET['id'];
$usuario = new model\Usuario();
$usuarioDao = new dao\UsuarioDao();

$usuario = $usuarioDao->find($id);
$status = $usuario->getStatusUsuario();
?>

<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Cadastro de Usuário</li>

    </ol>
    <!-- Icon Cards-->

    <div class="row">
        <div class="col-lg-8">
            <!-- Example Bar Chart Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-user"></i> Alteração de dados do Usuário</div>
                <div class="card-body">
                    <form action="controller/usuarioCTR.php" method="post">

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-8">
                                    <input class="form-control" id="id" name="id" type="hidden" value="<?= $usuario->getIdUsuario() ?>" >

                                    <label for="nome">*Nome Completo:</label>
                                    <input class="form-control" id="nome" name="nome" type="text" value="<?= $usuario->getNomeUsuario() ?>" placeholder="" required="">
                                </div>

                                <!--<div class="col-md-4">
                                    <label for="data">Data:</label>
                                    <input class="form-control" id="" type="date" placeholder="" readonly="">
                                </div>-->
                            </div>
                        </div>

                        <?php if ($_SESSION['tipo'] == 'adiministrador') { ?>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="status">*Status</label>
                                        <select id="selectbasic" name="status" class="form-control">
                                            <option <?= ($status == 'desativado') ? 'selected' : '' ?> value="desativado">Desativado</option>
                                            <option <?= ($status == 'pendente') ? 'selected' : '' ?>value="pendente">Pendente</option>
                                            <option <?= ($status == 'ativo') ? 'selected' : '' ?> value="ativo">Ativo</option>           
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="form-group">

                            <input class="form-control" id="tipo" name="tipo" type="hidden" value="<?= $usuario->getTipoUsuario() ?>" >

                            <label for="email">*Endereço email:</label>
                            <input class="form-control" id="" name="email" type="email" value="<?= $usuario->getEmailUsuario() ?>"  placeholder="" required="">

                        </div>

                        <div class="form-group">
                            <label for="login">*login:</label>
                            <input class="form-control" id="" name="login" type="text" value="<?= $usuario->getLoginUsuario() ?>" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="senha">*Senha:</label>
                                    <input class="form-control" id="senha" name="senha" type="password" placeholder="" >
                                </div>
                                <div class="col-md-6">
                                    <label for="comfirasenha">*Confirmar Senha:</label>
                                    <input class="form-control" id="confirm_senha" name="confirm_senha"  type="password" placeholder="" >
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="col-md-10">
                            <button type="submit" name="atualizar" class="btn btn-success"><i class="fa fa-save"></i> Cadastrar</button>
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

<?php
include 'rodape.php';
?>
