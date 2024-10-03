<?php
include "../estruturas/htmlhead.php";
include '../estruturas/header.php';
?>
<form action="../acoes/armazenarNota.php" method="post">
    <label for="materia">Matéria:</label>
    <select name="materia" id="materia">
        <option value="bioquimica">Bioquímica</option>
        <option value="fisicoquimica">Físico-química</option>
        <option value="quimicageral">Química Geral</option>
        <option value="controlequalidade">Controle de qualidade de matérias-primas</option>
        <option value="tecfrutashort">Tecnologia de frutas
            e hortaliça</option>
        <option value="tecprocessamento">Tecnologia de processamento de alimento</option>
    </select>
    <div>
        <h2>Primeiro Bimestre</h2>
        <label for="b1n1">Nota 1:</label>
        <input type="number" anystep name="b1n1" id="b1n1">
        <label for="b1n2">Nota 2:</label>
        <input type="number" anystep name="b1n2" id="b1n2">
    </div>
    <div>
        <h2>Segundo Bimestre</h2>
        <label for="b2n1">Nota 1:</label>
        <input type="number" anystep name="b2n1" id="b2n1">
        <label for="b2n2">Nota 2:</label>
        <input type="number" anystep name="b2n2" id="b2n2">
    </div>
    <button>Enviar</button>
</form>
<?php
include '../estruturas/footer.php';
include '../estruturas/htmlfoot.php'
?>