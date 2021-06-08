
<?php 

    include "layer.php";
    include "layout/header.php";

?>

<h2>Accéder à votre espace</h2>

<form action="" method="post" class="w-75 mx-auto my-5 p-4">

    <?php if(isset($error_message)): ?>
        <div class="alert alert-danger">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <div>
        <label for="email" class="form-label">Votre mail d'utilisateur</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div>
        <label for="mdp" class="form-label">Votre mot de passe</label>
        <input type="password" name="mdp" id="mdp" class="form-control">
    </div>

    <div class="my-5 text-center">
        <input type="submit" name="connexion" class="btn btn-dark text-white w-25 form-control" value="Connexion">
    </div>

</form>

<?php include "layout/footer.php"; ?>