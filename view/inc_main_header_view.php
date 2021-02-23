<!-- HEADER -->
<nav class="left-header">
    <a href="index.php" class="left-header__btn-logout"><i class="fas fa-power-off"></i></a>
    <?php if($_SERVER['SCRIPT_NAME'] == '/main.php') { ?>
        <a href="main.php" style="visibility: hidden;">
            <i class="fas fa-arrow-left btn-back-page"></i>
        </a>
    <?php } else { ?>
        <a href="main.php">
            <i class="fas fa-arrow-left btn-back-page"></i>
        </a>
    <?php } ?>
</nav>
<nav class="center-header">
    <?php
    if($_SERVER['SCRIPT_NAME'] == '/main.php'){ ?>
        <div class="center-header__welcome">
            <h1>Hello</h1>
            <h1><?=$_SESSION['name']?>,</h1>
        </div>
    <?php } elseif($_SERVER['SCRIPT_NAME'] == '/exercise.php') {?>
        <div class="center-header__title">
            <h1><?=$activityName?></h1>
        </div>
    <?php } ?>
</nav>