<nav class="nav-bar">
    <div class="nav-bar__icone">
        <a href="main.php">
            <i class="fas fa-home"></i>
        </a>
        <a href="statistiques.php">
            <i class="fas fa-chart-line"></i>
        </a>
    </div>
    <?php if($_SERVER['SCRIPT_NAME'] != '/statistiques.php'){ ?>
        <i class="fas fa-plus nav-bar__btn-create" onclick="DisplayPopUp()"></i>
    <?php } ?>
</nav>