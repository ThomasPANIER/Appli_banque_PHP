
<?php

    require "model/connexion.php";
    include "layout/header.php";
    require "model/accounts.php";

    $accounts = get_accounts();

    if(isset($_GET["index"]) && isset($accounts[$_GET["index"]])) {
        $account = $accounts[$_GET["index"]];
    }
    else {
        $error = "Nous ne parvenons pas à récupérer votre compte, essayer de revenir plus tard";
    }

?>

<div class="row">

    <?php if(isset($account)): ?>

        <div class="col-12 col-md-6 my-5">

            <div class="card h-100">
                <div class="card-header">
                    Compte
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php foreach($account as $key => $value) : ?>
                            <li class="list-group-item"><?php echo "$key : $value" ; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="card-footer">
                    <div class=" row justify-content-evenly">
                        <a class="btn btn-primary col-4 p-1" href="#">Dépot/Retrait</a>            
                        <a class="btn btn-primary col-4 p-1" href="#">Cloture</a>
                    </div>
                </div>
            </div>

        </div>

    <?php else : ?>

        <div class="alert alert-secondary text-center" role="alert">
            <?php echo $error; ?>
            <p>Pourquoi ne pas retourner a l'accueil</p>
            <a class="btn btn-dark text-white" href="../index/index.php">Accueil</a>
        </div>

    <?php endif; ?>

</div>

<?php include "layout/footer.php"; ?>