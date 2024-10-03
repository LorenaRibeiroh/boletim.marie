<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $materiaSelecionada =isset($_POST['materia']) ? $_POST['materia'] : '';
    $b1n1 = isset($_POST['b1n1']) ? floatval($_POST['b1n1']) : 0;
    $b1n2 = isset($_POST['b1n2']) ? floatval($_POST['b1n2']) : 0;
    $b2n1 = isset($_POST['b2n1']) ? floatval($_POST['b2n1']) : 0;
    $b2n2 = isset($_POST['b2n2']) ? floatval($_POST['b2n2']) : 0;
    


    function calcularMedia($nota1,$nota2){
        return ($nota1+$nota2)/2;
    }

    $notasMaterias = [];

    switch($materiaSelecionada){
        case 'bioquimica':{
            $notasMaterias['bioquimica'] = [
                'b1n1' => $b1n1,
                'b1n2' => $b1n2,
                'b1m' => calcularMedia($b1n1,$b1n2),
                'b2n1' => $b2n1,
                'b2n2' => $b2n2,
                'b2m' => calcularMedia($b2n1,$b2n2),
                'mediaFinal' => calcularMedia(calcularMedia($b1n1, $b1n2), calcularMedia($b2n1, $b2n2)),
            ];
            break;
        }
        case 'fisicoquimica':{
            $notasMaterias['fisicoquimica'] = [
                'b1n1' => $b1n1,
                'b1n2' => $b1n2,
                'b1m' => calcularMedia($b1n1,$b1n2),
                'b2n1' => $b2n1,
                'b2n2' => $b2n2,
                'b2m' => calcularMedia($b2n1,$b2n2),
                'mediaFinal' => calcularMedia(calcularMedia($b1n1, $b1n2), calcularMedia($b2n1, $b2n2)),
            ];
            break;
        }
        case 'quimicageral':{
            $notasMaterias['quimicageral'] = [
                'b1n1' => $b1n1,
                'b1n2' => $b1n2,
                'b1m' =>  calcularMedia($b1n1,$b1n2),
                'b2n1' => $b2n1,
                'b2n2' => $b2n2,
                'b2m' => calcularMedia($b2n1,$b2n2),
                'mediaFinal' => calcularMedia(calcularMedia($b1n1, $b1n2), calcularMedia($b2n1, $b2n2)),
            ];
            break;
        }
        case 'controlequalidade':{
            $notasMaterias['controlequalidade'] = [
                'b1n1' => $b1n1,
                'b1n2' => $b1n2,
                'b1m' => calcularMedia($b1n1,$b1n2),
                'b2n1' => $b2n1,
                'b2n2' => $b2n2,
                'b2m' => calcularMedia($b2n1,$b2n2),
                'mediaFinal' => calcularMedia(calcularMedia($b1n1, $b1n2), calcularMedia($b2n1, $b2n2)),
            ];
            break;
        }
        case 'tecfrutashort':{
            $notasMaterias['tecfrutashort'] = [
                'b1n1' => $b1n1,
                'b1n2' => $b1n2,
                'b1m' =>  calcularMedia($b1n1,$b1n2),
                'b2n1' => $b2n1,
                'b2n2' => $b2n2,
                'b2m' => calcularMedia($b2n1,$b2n2),
                'mediaFinal' => calcularMedia(calcularMedia($b1n1, $b1n2), calcularMedia($b2n1, $b2n2)),

            ];
            break;
        }
        case 'tecprocessamento':{
            $notasMaterias['tecprocessamento'] = [
                'b1n1' => $b1n1,
                'b1n2' => $b1n2,
                'b1m' =>  calcularMedia($b1n1,$b1n2),
                'b2n1' => $b2n1,
                'b2n2' => $b2n2,
                'b2m' =>  calcularMedia($b2n1,$b2n2),
                'mediaFinal' => calcularMedia(calcularMedia($b1n1, $b1n2), calcularMedia($b2n1, $b2n2)),
            ];
            break;
        }
    }
    if (isset($notasMaterias[$materiaSelecionada])) {
        $mediaFinal = $notasMaterias[$materiaSelecionada]['mediaFinal'];
    if($mediaFinal >= 6){
        echo "Aprovado! com " . $mediaFinal;
    }elseif($mediaFinal >= 2 && $mediaFinal < 6){
        echo "Necessário fazer uma prova de recuperação!";
        echo '<form method="post">';
        echo 'Digite a nota da prova de recuperação: <input type="number" name="notaRecuperacao">';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
        if (isset($_POST['notaRecuperacao'])) {
            $notaRecuperacao = floatval($_POST['notaRecuperacao']);
            $mediaFinalComRecuperacao = ($mediaFinal + $notaRecuperacao) / 2;
            
            if ($mediaFinalComRecuperacao >= 6) {
                echo "Aprovado após recuperação! Média final com recuperação: " . $mediaFinalComRecuperacao;
            } else {
                echo "Reprovado após recuperação. Média final com recuperação: " . $mediaFinalComRecuperacao;
            }
        
    }

    }else {
                echo "Reprovado direto. Média Final: " . $mediaFinal;
            }
        }
}

    ?>

<table border="1">
    <tr>
        <?php foreach ($notasMaterias[$materiaSelecionada] as $tipoNota => $nota) { ?>
            <th><?php echo ($tipoNota); ?></th>
        <?php } ?>
        <th>Média Final com Recuperação</th> 
    </tr>
    <tr>
        <?php foreach ($notasMaterias[$materiaSelecionada] as $nota) { ?>
            <td><?php echo $nota; ?></td>
        <?php } ?>
        <td><?php echo isset($mediaFinalComRecuperacao) ? $mediaFinalComRecuperacao : 'N/A'; ?></td> <!-- Coloca a média final aqui -->
    </tr>
</table>
