
<?php

require "model/connexion.php";
include "layout/header.php";

if(!empty($_POST)) {
    $user = $_POST;

    foreach($user as $key => $value) {
        $user[$key] = htmlspecialchars($value);
    }
    if(empty($user["email"])) {
        $error = "Veuillez rentrer un email valide";
    }
    if(empty($user["mdp"])) {
        $error = "Veuillez rentrer un mot de passe";
    }
}

?>

<div class="container-fluid">

<section class="row my-4 m-auto p-5">

    <div class="col-12 col-md-6 p-5">
        <h2>Créer un compte</h2>
        <form action="" method="post">
            <input name="email" class="form-control my-3 p-3" type="email">
            <input name="mdp" class="form-control my-3 p-3" type="text">
            <input name="addUser" class="form-control btn btn-dark text-white my-2" type="submit" value="Envoyer">
        </form>
    </div>

    <div class="col-12 col-md-6 p-5">
        <?php if(!isset($user)): ?>
            <ul class="list-group my-3">
                <li class="list-group-item"><?php echo "Votre compte utilisateur a bien été créé, vous pouvez vous connecter." ?></li>
            </ul>
        <?php endif; ?>
    </div>

</section>

</div>

<?php include "layout/footer.php"; ?>