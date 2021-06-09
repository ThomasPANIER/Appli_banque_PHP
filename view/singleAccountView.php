
<?php include "layout/header.php"; ?>

<div class="row">

    <?php if($account): ?>

        <div class="col-12 col-md-6 my-5 p-4 m-auto">

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
                    <div class=" row justify-content-around">
                        <a class="btn btn-primary col-3 p-1" href="#">Dépot</a>
                        <a class="btn btn-primary col-3 p-1" href="#">Retrait</a>            
                        <a class="btn btn-primary col-3 p-1" href="#">Cloture</a>
                    </div>
                </div>
            </div>

        </div>

    <?php else : ?>

        <div class="alert alert-secondary text-center" role="alert">
            <?php echo $error; ?>
            <p>Pourquoi ne pas retourner a l'accueil</p>
            <a class="btn btn-dark text-white" href="indexView.php">Accueil</a>
        </div>

    <?php endif; ?>

</div>

<?php include "layout/footer.php"; ?>