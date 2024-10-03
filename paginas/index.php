<?php
include "../estruturas/htmlhead.php";
include '../estruturas/header.php';
?>
<form action="../acoes/entrar.php" method="post">
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario" required>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    <button>Entrar</button>
</form>
<?php
include '../estruturas/footer.php';
include '../estruturas/htmlfoot.php'
?>