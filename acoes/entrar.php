<?php
session_start();

include "../funcoes/validarUsuario.php";
include "../estruturas/htmlhead.php";
include '../estruturas/header.php';
?>
<main>
    <div class="mensagemLogin">
        <?php
        msgEntrada();
        ?>
    </div>
</main>
<?php
include '../estruturas/footer.php';
include '../estruturas/htmlfoot.php'
?>