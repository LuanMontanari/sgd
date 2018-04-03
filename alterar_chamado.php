<?php
require_once'/util/seguranca.php';

require_once '/dao/ChamadoDao.php';
require_once '/model/Chamado.php';

expulsa_usuario();

$id = $_GET['id'];
$chamado = new model\Chamado();
$chamadoDao = new dao\ChamadoDao();

$chamado = $chamadoDao->find($id);

$status_chamado = $chamado->getStatusChamado();
$prioriodade_chamado = $chamado->getPrioridadeChamado();

include 'cabecalho.php';
?>
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Alterar  Chamado</li>

    </ol>
    <!-- Icon Cards-->

    <div class="row">
        <div class="col-lg-8">
            <!-- Example Bar Chart Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-user"></i> Alterar Chamado</div>
                <div class="card-body">
                    <form action="controller/chamadoCTR.php" method="POST">
                        <?php if ($_SESSION['tipo'] == "adiministrador") { ?>

                            <div class="form-group" >
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="data">Id do Chamado:</label>
                                        <input class="form-control" id="id" name="id" type="text" value="<?= $chamado->getIdChamado() ?>" placeholder="" readonly="">
                                    </div>
                                    <div class="col-md-6">      
                                        <label for="data">Id do Requerente:</label>
                                        <input class="form-control" id="id" name="id_requerente" type="text" value="<?= $chamado->getIdRequerenteChamado() ?>" placeholder="" readonly="">
                                    </div>  
                                    <div class="col-md-6">
                                        <label for="data">Id do Tecnico:</label>
                                        <input class="form-control" id="id" name="id_tecnico" type="text" value="<?= $chamado->getIdTecnicoChamado() ?>" placeholder="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="data">Id do Supervisor:</label>
                                        <input class="form-control" id="id" name="id_supervisor" type="text" value="<?= $chamado->getIdSupervisorChamado() ?>" placeholder="" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="local">*Local</label>
                                        <select id="selectbasic" name="local" class="form-control">
                                            <option value="Laboratório 1"  >LABORATÓRIO 1</option>
                                            <option value="Laboratório 2" >LABORATÓRIO 2</option>
                                            <option value="Laboratório 3">LABORATÓRIO 3</option>
                                            <option value="Laboratório 4">LABORATÓRIO 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="data">Data:</label>
                                        <input class="form-control" id="data" name="data" type="date" placeholder="" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="data">*Elemento</label>
                                        <select id="selectbasic" name="elemento" class="form-control">
                                            <option value="PC 01">COMPUTADOR 01</option>
                                            <option value="PC 02">COMPUTADOR 02</option>
                                            <option value="PC 03">COMPUTADOR 03</option>
                                            <option value="PC 04">COMPUTADOR 04</option>
                                        </select>
                                    </div>
                                <?php } ?>        


                                <div class="col-md-6">
                                    <label for="data">*Status</label>
                                    <select id="selectbasic" name="status" class="form-control">
                                        <option <?php if ($status_chamado == 'desativado') { ?> selected="" <?php } ?> value="desativado">Desativado</option>
                                        <option <?php if ($status_chamado == 'pendente') { ?> selected="" <?php } ?> value="pendente">Pendente</option>
                                        <option <?php if ($status_chamado == 'aceito') { ?> selected="" <?php } ?> value="aceito">Aceito</option>
                                        <option <?php if ($status_chamado == 'concluido') { ?> selected="" <?php } ?>value="concluido">Concluido</option>
                                    </select>
                                </div>
                                    
                                 <div class="col-md-6">
                                    <label for="data">*Prioridade</label>
                                    <select id="selectbasic" name="prioridade" class="form-control">
                                        <option <?php if ($prioriodade_chamado== 'alta') { ?> selected="" <?php } ?> value="alta">Alta</option>
                                        <option <?php if ($prioriodade_chamado== 'media') { ?> selected="" <?php } ?> value="media">Media</option>
                                        <option <?php if ($prioriodade_chamado == 'baixa') { ?> selected="" <?php } ?> value="baixa">Baixa</option>
                                        
                                    </select>
                                </div>    

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="form-row">
                                <label for="nome">*Descrição Requerente:</label>                                                        
                                <textarea class="form-control" id="textarea" name="desc_requerente" placeholder="Descreva o problema de forma detalhada" required=""  ><?= $chamado->getDescricaoRequerenteChamado() ?></textarea>                                       
                            </div>
                        </div>     

                        <?php if ($_SESSION['tipo'] == 'adiministrador' || $_SESSION['tipo'] == 'tecnico') { ?>
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="nome">*Descrição do Técnico:</label>                                                        
                                    <textarea class="form-control" id="textarea" name="desc_tecnico" placeholder="Descreva o problema de forma detalhada" required=""   ><?= $chamado->getDescricaoTecnicoChamado() ?></textarea>                                       
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($_SESSION['tipo'] == 'adiministrador' || $_SESSION['tipo'] == 'supervisor') { ?>
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="nome">*Descrição do Supervisor:</label>                                                        
                                    <textarea class="form-control" id="textarea" name="desc_supervisor" placeholder="Descreva o problema de forma detalhada" required=""  ><?= $chamado->getDescricaoSupervisorChamado() ?></textarea>                                       
                                </div>
                            </div>
                        <?php } ?>
                        <hr>
                        <div class="col-md-10">
                            <button type="submit" name="atualizar" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
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



<?php include 'rodape.php'; ?>       