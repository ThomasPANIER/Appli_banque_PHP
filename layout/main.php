
<?php 
    require "component/accounts.php";
    $accounts = get_accounts();
?>

<main class="container-fluid my-5">

    <h2 class="text-center">Comptes bancaires</h2>

    <div class="row ">
        <?php foreach($accounts as $index => $account) : ?>

            <div class="col-12 col-md-6 col-lg-4 my-5">
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
                            <a class="btn btn-primary col-3 p-1" href="singleAccount.php?index=<?php echo $index; ?>">Voir</a>
                            <a class="btn btn-primary col-5 p-1" href="#">Dépot/Retrait</a>            
                            <a class="btn btn-primary col-3 p-1" href="#">Cloture</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <!-- <div class="col-12 col-md-6 my-5">
            <div class="card h-100">
                <div class="card-header">
                    Livret
                </div>
                <div class="card-body">
                    <h5 class="card-title">Livret A</h5>
                    <h6 class="card-subtitle text-muted mb-3">N°:02 000 000 fr 76</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propriétaire: Picsou Deritchold</li>
                        <li class="list-group-item">Solde : xxxxxx</li>
                        <li class="list-group-item">Dernière opération : xxxx</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class=" row justify-content-evenly">
                        <a href="#" class="btn btn-primary col-3 p-1">Voir</a>
                        <a href="#" class="btn btn-primary col-5 p-1">Dépot/Retrait</a>            
                        <a href="#" class="btn btn-primary col-3 p-1">Cloture</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 my-5">
            <div class="card h-100">
                <div class="card-header">
                    Livret
                </div>
                <div class="card-body">
                    <h5 class="card-title">PEL</h5>
                    <h6 class="card-subtitle text-muted mb-3">N°:03 000 000 fr 76</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propriétaire: Picsou Deritchold</li>
                        <li class="list-group-item">Solde : xxxxxx</li>
                        <li class="list-group-item">Dernière opération : xxxx</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class=" row justify-content-evenly">
                        <a href="#" class="btn btn-primary col-3 p-1">Voir</a>
                        <a href="#" class="btn btn-primary col-5 p-1">Dépot/Retrait</a>            
                        <a href="#" class="btn btn-primary col-3 p-1">Cloture</a>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

</main>