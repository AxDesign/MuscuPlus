<!-- HEADER -->
<nav class="left-column">
    <a href="index.php" class="btn-logout"><i class="fas fa-power-off"></i></a>
</nav>
<nav class="right-column">
    <?php
    if($_SERVER['SCRIPT_NAME'] == '/main.php'){ ?>
        <div class="text-title-page text-title-page-home">
            <h1>Hello</h1>
            <h1><?=$_SESSION['name']?>,</h1>
        </div>
    <?php } elseif($_SERVER['SCRIPT_NAME'] == '/exercise.php') {?>
        <div class="text-title-page">
            <h1></h1>
            <h1><?=$activityName?></h1>
        </div>
    <?php } ?>
</nav>