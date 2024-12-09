<?php
include ("conexao.php");
$id=$_POST['id'];
$nome=$_POST['nome'];
$data=$_POST['data'];
$hora= $_POST['hora_id'];
$servico= $_POST['servico'];

$sql= "UPDATE agendamento SET nome = '$nome', data = '$data', hora_id = '$hora', servico='$servico' WHERE id='$id'";
if($conexao=mysqli_query($conexao, $sql)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao cadastra-se";
}


?>