<?php include 'cabecalho.php'; 

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header">
                    Nome:
                </div>
                <div class="card-body">
                    <?= $_SESSION['nome'] ?>
                </div>

            </div>

            <div class="card mb-3">
                <div class="card-header">
                    Login:
                </div>
                <div class="card-body">
                    <?= $_SESSION['login'] ?>
                </div>

            </div>

            <div class="card mb-3">
                <div class="card-header">
                    Email:
                </div>
                <div class="card-body">
                    <?= $_SESSION['email'] ?>
                </div>

            </div>

            <a href="#" class="btn btn-primary"> Alterar</a>
        </div>
    </div>
</div> 

<?php include 'rodape.php'; ?>



