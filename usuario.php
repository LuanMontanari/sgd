<!DOCTYPE html>

<html>
    <title> Usuário</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <body>
        <h1>Usuário</h1>
        <?php
        require_once 'model/Usuario.php';
        require_once 'dao/UsuarioDao.php';

        use model\Usuario;
        use dao\UsuarioDao;

if (isset($_GET['acao']) && $_GET['acao'] == 'deletar') {
            $usarioDao = new UsuarioDao();
            $id = (int) $_GET['id'];
            $usarioDao->delete($id);
        }

        if (isset($_POST['atualizar'])) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $tipo = $_POST['tipo'];
           
            $usuario = new Usuario($id, $nome, $email, $login, $senha, $tipo);
            $usuarioDao = new UsuarioDao();
            $usuarioDao->alterar($usuario);
        }

        if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {
            $usuarioDao = new UsuarioDao();
            $id = (int) $_GET['id'];
            $resultado = $usuarioDao->find($id);
            ?>

            <h2> Editar Usuário</h2>

            <form action="usuario.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $resultado->getIdUsuario(); ?>"/>

                <label for="nome">Nome: </label>
                <input type="text" name="nome" value="<?php echo $resultado->getNomeUsuario(); ?>"/>

                <label for="email">Email: </label>
                <input type="email" name="email" value="<?php echo $resultado->getEmailUsuario(); ?>"/>

                <label for="login">Login: </label>
                <input type="text" name="login" value="<?php echo $resultado->getLoginUsuario(); ?>"/>

                <label for="senha">Senha: </label>
                <input type="password" name="senha"/>
                <!-- a senha não será exibida somente auterada -->

                <label for="tipo">Tipo: </label>
                <input type="text" name="tipo" value="<?php echo $resultado->getTipoUsuario(); ?>"/>

                <input type="submit" name="atualizar" value="salvar"/>
            </form>

        <?php } ?>

        <?php
        if (isset($_GET['incluir'])) {
            ?>
            <h2>Cadastro de Usuários</h2>

            <form method="post" action="usuario.php">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" value=""/>

                <label for="email">Email: </label>
                <input type="email" name="email" value=""/>

                <label for="login">Login: </label>
                <input type="text" name="login" value=""/>

                <label for="senha">Senha: </label>
                <input type="password" name="senha"/>
                <!-- a senha não será exibida somente auterada -->

                <!--<label for="tipo">Tipo: </label>
                <input type="text" name="tipo" value=""/>-->

                <input type="submit" name="cadastrar" value="cadastrar"/>

            </form>
        <?php } ?>
        <table>
            <tr>
                <td colspan="4" alingn="center"><?= "<a href=usuario.php?incluir> Cadastrar </a>" ?> </td>
            </tr>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
            <?php
            $usuarioDao = new UsuarioDao();
            $usuario = $usuarioDao->listar();

            foreach ($usuario as $key) {
                ?>
            <tr>
                <td><?= $key['id']; ?> </td>
                <td><?= $key['nome']; ?></td>
                <td><?= $key['email'];?></td>
                <td><?= $key['login'];?></td>
                <td><?= $key['senha'];?></td>
                <td><?= $key['tipo'];?></td>
                <td><?= "<a href=usuario.php?acao=editar&id=" . $key[0] . ">Editar</a>"; ?> 
                <?= "<a href=usuario.php?acao=deletar&id=". $key[0] . ">Excluir</a>" ?></td>
            </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>

<?php
if(isset($_POST['cadastrar'])){
    $usuario = new Usuario();
    
    $nomeUsuario = $_POST['nome'];
    $emailUsuario = $_POST['email'];
    $loginUsuario = $_POST['login'];
    $senhaUsuario = $_POST['senha'];
   // $tipoUsuario = $_POST['tipo'];
    
    $usuario->setNomeUsuario($nomeUsuario);
    $usuario->setEmailUsuario($emailUsuario);
    $usuario->setLoginUsuario($loginUsuario);
    $usuario->setSenhaUsuario($senhaUsuario);
   // $usuario->setTipoUsuario($tipoUsuario);
    
    $usuarioDao = new UsuarioDao();
    $usuarioDao->inserir($usuario);
}