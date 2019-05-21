<?php
    $login = $_POST["login"];
    $pass = $_POST["senha"];
    
    $bdLogin = "master";
    $bdPass = "123456";
    $bdACL = "1";

    if ($login == $bdLogin){
        if($pass == $bdPass){
            $resposta = "Acesso Liberado!";
            //Criando cookie de seção
            switch($bdACL){
                case 1:
                    setcookie("userLogin", $login); //Cookie de usuário
                    setcookie("userPass", $pass); //Cookie de senha
                    //Direcionar para a pagina
                    header("Location: dashboard-master.php"); 
                    break;
                case 2:
                    setcookie("userLogin", $login); //Cookie de usuário
                    setcookie("userPass", $pass); //Cookie de senha
                    //Direcionar para a pagina
                    header("Location: dashboard-adm.php"); 
                    break;
                default:
                    $resposta = "Usuário sem nível de acesso";
        }
        }else{
            $resposta = "Login ou senha inválida!";
        }
    }else{
        $resposta = "Login ou senha inválida!";
    }
?>
<div class="title-content"><h2>Login</h2></div>
<form name="frm-login" action="autentica.php" method="post">
    <label>Login:</label>
    <input type="text" name="login" require><br>
    <label>Senha:</label>
    <input type="password" name="senha" require><br>
    <input type="submit" value="entrar">
</form>
<p><?=$resposta?></p>