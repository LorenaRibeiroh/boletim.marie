<?php
    $adm = [
        "marie" => "marie123",
        "lorena" => "lore123",
        "melissa" => "mel123",
    ];

    if(isset($_POST['usuario'])){
        if(empty($_POST['usuario'])){
            $_SESSION['us'] = "anony";
            $_SESSION['se'] = "";
        }else{
        $_SESSION['us'] = $_POST['usuario'];
        $_SESSION['se'] = $_POST['senha']; 
        }     
    }

    function validarUsuario($usuario, $adm){
        return (array_key_exists($usuario, $adm));
    }

    function validarSenha($usuario, $senha, $adm){
        return ($adm[$usuario] == $senha);
    }

    function msgUsuarioInvalido(){
        echo "<h2 class=\"erro\">Usuário inválido</h2>";
    }

    function msgSenhaInvalida(){
        echo "<h2 class=\"erro\">Senha inválida</h2>";
    }

    function msgBemVindo(){
        echo "<h2 class=\"lightside\">Bem vinda, ".strtoupper($_SESSION['us'])."!</h2>
        <p>Para acessar a área de controle de notas, acesse: <a href=\"../paginas/inserirNotas.php\">Formulário de notas</a></p>";
    }

    function msgAcessoNegado(){
        echo "<h2 class=\"erro\">Acesso negado</h2>";
    }

    function msgEntrada(){
        global $adm;

        if(isset($_SESSION['us'], $adm)){
            if(validarUsuario($_SESSION['us'], $adm)){
                if(validarSenha($_SESSION['us'], $_SESSION['se'], $adm)){
                    msgBemVindo();
                }else{
                    msgSenhaInvalida();
                }
            }else{
                msgUsuarioInvalido();
            }
        }
    }
?>