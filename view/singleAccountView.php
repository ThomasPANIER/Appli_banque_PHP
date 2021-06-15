
<?php include "layout/header.php"; ?>

<div class="row">

    <?php  if($account): ?>

        <div class="col-12 col-md-6 my-5 p-4 m-auto">

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
                        <li class="list-group-item"><?php echo "Commentaire : " . $account->getCommentaire() ; ?></li>
                    </ul>
                </div>
                <div class="card-header">
                    Dernières opérations
                </div>
                <?php if($operation) : ?>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo "Type d'opération : " . $operation->getType_operation() ; ?></li>
                        <li class="list-group-item"><?php echo "Nom : " . $operation->getNom() ; ?></li>
                        <li class="list-group-item"><?php echo "Montant : " . $operation->getMontant() . " euro" ; ?></li>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="card-footer">
                    <form class=" row justify-content-around" method="POST">
                        <a class="btn btn-primary col-3 p-1" href="#">Dépot</a>
                        <a class="btn btn-primary col-3 p-1" href="#">Retrait</a> 
                        <input class="btn btn-primary col-3 p-1" name="delete" type="submit" value="Cloture">
                        <?php if(isset($_POST["delete"])): ?>
                            <form method="POST" action="">
                                <input class="btn btn-danger col-3 p-1" name="confirm" type="submit" value="Confirmer cloture">
                            </form>
                        <?php endif; ?>
                    </form>
                </div>
                
            </div>

        </div>

    <?php else : ?>

        <div class="alert alert-secondary text-center" role="alert">
            <?php echo $error; ?>
            <p>Pourquoi ne pas retourner a l'accueil</p>
            <a class="btn btn-dark text-white" href="index.php">Accueil</a>
        </div>

    <?php endif; ?>

</div>

<?php include "layout/footer.php"; ?>