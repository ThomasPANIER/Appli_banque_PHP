
<?php

$userConnect = $_SESSION["user"];
$userAccount = $userConnect->getId();

include "layout/header.php";

?>

<div class="container-fluid">

    <section class="row my-4 m-auto p-5">

        <div class="col-12 col-md-6 p-5">
            <h2>Créer un compte</h2>
            
            <form class="mt-5" action="newAccount.php" method="POST">
                <!-- <div class="form-check">
                    <input class="form-check-input" type="radio" id="1" name="livret" value="livret">
                    <label class="form-check-label">Ouvrir un livret</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="2" name="compte" value="compte">
                    <label class="form-check-label">Ouvrir un compte</label>
                </div> -->
                <input class="form-control my-3 p-3 hidden" name="id_client" type="number" value=<?php echo $userAccount ?>>
                <div class="mt-3">
                    <label class="form-label">Type de compte</label>
                    <input class="form-control my-3 p-3" name="type_compte" type="text" placeholder="exemple 'livret' ou 'compte'">
                </div>
                <div class="mt-3">
                    <label class="form-label">Nom du compte</label>
                    <input class="form-control my-3 p-3" name="nom" type="text" placeholder="exemple LDD">
                </div>
                <div class="mt-3">
                    <label class="form-label">Montant à l'ouverture</label>
                    <input class="form-control my-3 p-3" name="solde" type="number">
                </div>
                <input class="form-control btn btn-dark text-white my-2" name="addAccount" type="submit" value="Envoyer">
            </form>
        </div>

        <div class="col-12 col-md-6 p-5">
            <h3 class="mb-5">Vos informations</h3>
            <?php if(!empty($_POST)): ?>
                <ul class="list-group my-3">
                    <li class="list-group-item" id="infoCompte"><?php echo "Type de compte : " . $_POST["type_compte"]; ?></li>
                    <li class="list-group-item"><?php echo "Nom : " . $_POST["nom"]; ?></li>
                    <li class="list-group-item"><?php echo "Solde : " . $_POST["solde"] . " euro"; ?></li>
                    <a class="btn btn-dark text-white my-2" href="index.php">Retour page des comptes</a>
                </ul>
            <?php endif; ?>
        </div>

    </section>

</div>

<?php include "layout/footer.php"; ?>