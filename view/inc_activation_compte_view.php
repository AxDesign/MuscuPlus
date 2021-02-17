<?php if($_SESSION['confirmAccount'] == 0){ ?>
        <section class="no-confirm-account">
            <p>Veuillez activer votre compte !</p>
            <a href="main.php?reset=true">
                <button>Renvoyer un email</button>
            </a>
        </section>
<?php } ?>