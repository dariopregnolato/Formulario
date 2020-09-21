<?php 
include_once('conexao.php');
$nome = $_POST['tNome'];
$email = $_POST['tMail'];
$cpf = $_POST['tCPF'];
$telefone = $_POST['tTel'];
$cep = $_POST['tCEP'];
$largadouro = $_POST['tLargadouro'];
$numero = $_POST['tNumero'];
$bairro = $_POST['tBairro'];
$cidade = $_POST['tCidade'];
$estado = $_POST['tEst'];

$result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, cpf, telefone, cep, largadouro, numero, bairro, cidade, estado) VALUES ('$nome', '$email', '$cpf', '$telefone', '$cep', '$largadouro', '$numero', '$bairro', '$cidade', '$estado' NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)

 ?>
