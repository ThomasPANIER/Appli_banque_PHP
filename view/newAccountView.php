
<?php include "layout/header.php"; ?>

<div class="container-fluid">

    <section class="row my-4 m-auto p-5">

        <div class="col-12 col-md-6 p-5">
            <h2>Créer un compte</h2>
            <form action="" method="post">
                <input name="name" class="form-control my-3 p-3" type="text">
                <input name="amount" class="form-control my-3 p-3" type="number">
                <input name="addAccount" class="form-control btn btn-dark text-white my-2" type="submit" value="Envoyer">
            </form>
        </div>

        <div class="col-12 col-md-6 p-5">
            <h3>Vos informations</h3>
            <?php if(isset($account)): ?>
                <ul class="list-group my-3">
                    <li class="list-group-item"><?php echo $account["name"] ?></li>
                    <li class="list-group-item"><?php echo $account["amount"] ?></li>
                </ul>
            <?php endif; ?>
        </div>

    </section>

</div>

<?php include "layout/footer.php"; ?>