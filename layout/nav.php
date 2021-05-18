

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" title="Page d'accueil"><img id="logo" alt="logo BPR" src="img/logo_BPR_light.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Opérations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="component/newAccount">Ouvrir un compte</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Statistiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actualités</a>
                </li>
            </ul>
            <form class="d-flex">
                <?php if(isset($_SESSION["user"])): ?>
                    <a class="btn btn-success mx-2" href="login.php" type="submit">connexion</a>
                <?php endif; ?>
                <a class="btn btn-danger mx-2" href="logout.php" type="submit">deconnexion</a>
            </form>
        </div>
    </div>
</nav>