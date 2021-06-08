
<?php include "layout/header.php"; ?>

<main class="container-fluid">

    <h2 class="text-center">Mes informations</h2>

    <div class="row my-5">
        <?php foreach($infos as $index => $info) : ?>

            <div class="col-12 col-md-6 col-lg-4 m-auto">
                <div class="card h-100">
                    <div class="card-header">
                        Mon compte utilisateur
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                        <?php foreach($info as $key => $value) : ?>
                            <li class="list-group-item"><?php echo "$key : $value" ; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class=" row justify-content-evenly">
                            <a class="btn btn-primary col-5 p-1" href="#">Modifier</a>            
                            <a class="btn btn-primary col-3 p-1" href="#">Valider</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</main>

<?php include "layout/footer.php"; ?>