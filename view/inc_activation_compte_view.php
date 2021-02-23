<?php if($_SESSION['confirmAccount'] == 0){ ?>
        <section class="no-confirm-account">
            <p>Veuillez activer votre compte !</p>
            <button>
                <a href="main.php?reset=true">Renvoyer un email</a>
            </button>
        </section>
<?php } ?>