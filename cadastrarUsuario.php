<?php include 'cabecalho.php'; ?>
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
                                <i class="fa fa-user"></i> Cadastro Usuário</div>
                            <div class="card-body">
                                <form action="controller/usuarioCTR.php" method="post">

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-8">
                                                <label for="nome">*Nome Completo:</label>
                                                <input class="form-control" id="nome" name="nome" type="text"  placeholder="" required="">
                                            </div>

                                            <!--<div class="col-md-4">
                                                <label for="data">Data:</label>
                                                <input class="form-control" id="" type="date" placeholder="" readonly="">
                                            </div>-->
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label for="data">*Tipo Usuário</label>
                                                <select id="selectbasic" name="tipo" class="form-control">
                                                    <option value="1">Usuário</option>
                                                    <option value="2">Técnico</option>
                                                    <option value="3">Supervisor</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="data">Status</label>
                                                <select id="selectbasic" name="status" class="form-control">
                                                    <option value="ativo">Ativo</option>
                                                    <option value="inativo" disabled="">Inativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">*Endereço email:</label>
                                        <input class="form-control" id="" name="email" type="email"  placeholder="" required="">

                                    </div>
                                  
                                    <div class="form-group">
                                        <label for="login">*login:</label>
                                        <input class="form-control" id="" name="login" type="text"  placeholder="" required="">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label for="senha">*Senha:</label>
                                                <input class="form-control" id="" name="senha" type="password" placeholder="" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="comfirasenha">*Confirmar Senha:</label>
                                                <input class="form-control" id="" type="password" placeholder="" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-md-10">
                                        <button type="submit" name="cadastrar" class="btn btn-success"><i class="fa fa-save"></i> Cadastrar</button>
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

   <?php include 'rodape.php'; ?>