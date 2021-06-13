
<?php include "layout/header.php"; ?>

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
                            <li class="list-group-item"><?php echo "Type : " . $account->getType_compte() ; ?></li>
                            <li class="list-group-item"><?php echo "Nom : " . $account->getNom() ; ?></li>
                            <li class="list-group-item"><?php echo "Date d'ouverture : " . $account->getDate_ouverture() ; ?></li>
                            <li class="list-group-item"><?php echo "Solde : " . $account->getSolde() . " euro" ; ?></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class=" row justify-content-evenly">
                            <a class="btn btn-primary col-3 p-1" href="singleAccount.php?id=<?php echo $account->getId() ; ?>">Voir</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        
    </div>

</main>

<?php include "layout/footer.php"; ?>