<?php
require_once '/util/seguranca.php';
require_once '/dao/ChamadoDao.php';
require_once '/util/data.php';
include 'cabecalho.php';

expulsa_usuario();
use \dao\ChamadoDao;

$chamadoDao = new ChamadoDao;

$chamado = $chamadoDao->listar();
?>



<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Listar Chamados</li>

    </ol>
    <!-- Icon Cards-->

    <div class="row">
        <div class="col-lg-12">
            <!-- Example Bar Chart Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-list"></i> Lista de Chamados</div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Id Requerente</th>
                                    <th>Id Tecnico</th>
                                    <th>Id Supervisor</th>
                                    <th>Prioridade</th>
                                    <th>Status</th>
                                    <th>Data Emissao</th>                                    
                                    <th>Data Aceitação</th>
                                    <th>Data de Conclusão </th>
                                    <th>Descrição do requerente </th>
                                    <th>Descrição do Tecnico </th>
                                    <th>Descrição do Supervisor </th>
                                    <th>Ações </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Id Requerente</th>
                                    <th>Id Tecnico</th>
                                    <th>Id Supervisor</th>
                                    <th>Prioridade</th>
                                    <th>Status</th>
                                    <th>Data Emissao</th>                                    
                                    <th>Data Aceitação</th>
                                    <th>Data de Conclusão </th>
                                    <th>Descrição do requerente </th>
                                    <th>Descrição do Tecnico </th>
                                    <th>Descrição do Supervisor </th>
                                    <th>Ações </th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($chamado as $key) { ?>
                                    <tr>
                                        <td><?= $key['id']; ?></td>
                                        <td><?= $key['id_requerente']; ?></td>
                                        <td><?= $key['id_tecnico']; ?></td>
                                        <td><?= $key['id_supervisor']; ?></td>
                                        <td><?= $key['prioridade']; ?></td>
                                        <td><?= $key['status']; ?></td>
                                        <td><?= convertDate($key['data_emissao']); ?></td>
                                        <td><?= $key['data_aceitacao']; ?></td>
                                        <td><?= $key['data_conclusao']; ?></td>
                                        <td><?= $key['desc_requerente']; ?></td>
                                        <td><?= $key['desc_tecnico']; ?></td>
                                        <td><?= $key['desc_supervisor']; ?></td>
                                        
                                        <td><?= "<a class=\"btn btn-warning\" href=alterar_chamado.php?id=" . $key[0] . ">Editar</a>"; ?> 
                                            <?= "<a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#excluir\" onclick=\"carregarId(".$key[0].");\" href=usuario.php?acao=deletar&id=" . $key[0] . ">Excluir</a>" ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Deseja Realmente excluir esse chamado?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?="<a id=\"btnExcluir\" class=\"btn btn-primary\" href= >Excluir</a>";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid-->
<script>
    function carregarId(id){
       document.getElementById("btnExcluir").href="controller/chamadoCTR.php?acao=deletar&id="+id;
    }
    
</script> 
<?php include 'rodape.php'; ?>