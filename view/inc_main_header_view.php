<!-- HEADER -->
<nav class="left-column">
    <a href="index.php" class="btn-logout"><i class="fas fa-power-off"></i></a>
</nav>
<nav class="right-column">
    <?php
    if($_SERVER['SCRIPT_NAME'] == '/main.php'){ ?>
        <div class="text-title-page">
            <h1>Hello</h1>
            <h1><?=$_SESSION['name']?>,</h1>
        </div>
    <?php } elseif($_SERVER['SCRIPT_NAME'] == '/activity.php') { ?>
        <div class="text-title-page">
            <h1>Programmes</h1>
            <h1><?=$activityName?></h1>
        </div>
    <?php } elseif($_SERVER['SCRIPT_NAME'] == '/exercise.php') {?>
        <h1>Vos Exercices du Programme <?=$programName?></h1>
    <?php } ?>
</nav>