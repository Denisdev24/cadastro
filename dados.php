<?php
$nome=isset ($_POST['nome'])?$_POST['nome']:"";
$idade=isset ($_POST['idade'])?$_POST['idade']:"";
$sexo=isset ($_POST['sexo'])?$_POST['sexo']:"";

switch($sexo){
    case 1: 
        $genero= "Masculino";
    break;
    case 2 :
        $genero ="Feminino";
    break;
    default:
    echo "</br>";
    echo "Genero não registrado";
    echo "</br>";
}
if(isset($_POST['dados'])){
$connect= mysqli_connect('localhost','root','','cadastro');
$dados="INSERT INTO dados (nome,idade,sexo) VALUES ('$nome','$idade','$genero')";
$unir =mysqli_query($connect,$dados);

echo "Dados Salvos";
echo "</br>";
echo "<a href='index.php'>Voltar</a>";
}
else {
    echo "Erro no banco de dados";
    
}