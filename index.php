
<?php 

  require "model/connexion.php";
  require "model/accounts.php";

  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
  }

  $accounts = get_accounts();

  include "layout/header.php";

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

    </div>

</main>

<?php include "layout/footer.php"; ?>
