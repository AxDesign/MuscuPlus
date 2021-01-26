<!-- HEADER -->
<header>
    <nav class="left-column">
        <?php
        if($_SERVER['SCRIPT_NAME'] == '/main.php'){ ?>
            <h1>Bonjour <?=$_SESSION['name']?></h1>
        <?php } elseif($_SERVER['SCRIPT_NAME'] == '/activity.php') { ?>
            <h1>Vos Programmes</h1>
        <?php } ?>
    </nav>
    <nav class="right-column">
        <a href="index.php" class="btn-logout">Déconnexion</a>
        <a href="profil.php">
            <i class="fas fa-cog"></i>
        </a>
    </nav>
</header>