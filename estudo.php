<?php
//conexão com banco de dados
//variaveis para conectar ao BD
$dbServidor = "localhost";
$dbUser = "root";
$dbPass = "1234";
$dbBanco = "ecommerce";

$mysqli = new mysqli($dbServidor, $dbUser, $dbPass, $dbBanco);
mysqli_set_charset($mysqli,'utf8');
/*
$conexao = mysqli_connect('localhost', 'root', '1234');
$banco = mysqli_select_db($conexao, 'ecommerce');
mysqli_set_charset($mysqli,'utf8');
*/
$querySQL = mysqli_query($mysqli, "SELECT * FROM tblogin ORDER BY usuario") or die(mysqli_error($mysqli)//Caso haja um erro na consulta
);
?>

Usuário ok - MASTER
<br>
<a href="logout.php">Sair</a>

<?php
while($aux = mysqli_fetch_assoc($querySQL)){
    echo "<br />----------------------<br />";
    echo "usuario: ".$aux["usuario"]."<br />";
    echo "senha: ".$aux["senha"]."<br />";
    echo "Nivel de acesso: ". $aux["idNivelAcesso"]."<br />";
}
 //total de resultados
 $total = mysqli_num_rows($querySQL);
 echo "<br>Total de resultados: ". $total . "<br>";

$upDate = "UPDATE tblogin SET
usuario = 'simone',
senha = '4321',
idNivelAcesso = '1'
WHERE idLogin = '3'";

if(mysqli_query($mysqli, $upDate)){
    echo "<p>Atualizado</p>";
}else{
    echo "Error: ".$upDate."<br>".mysqli_error($mysqli);
}
/*
$delete = "DELETE from tbLogin WHERE idLogin = '2'";
if(mysqli_query($mysqli, $delete)){
    echo "<p>Deletado</p>";
}else{
    echo "Error: ".$delete."<br>".mysqli_error($mysqli);
}
*/
?>

<?php
/*
$inserir = "INSERT INTO tblogin(idLogin, usuario, senha, idNivelAcesso) 
VALUES (null, 'nerildo', '1234', '2')";
if(mysqli_query($mysqli, $inserir)){
    echo "gravado";
    header("Location: sucesso-inserir.php"); 
}else{
    echo "Error: ".$inserir."<br>".mysqli_error($mysqli);
}*/
?>
