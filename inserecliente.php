<?php
	include("conexao.php"); //puxa o arquivo da conex�o
	
	$nome  = $_POST['nome'];
	$endereco  = $_POST['endereco'];
	$telefone   = $_POST['telefone'];
	$email  = $_POST['email'];
    $senha = $_POST['senha'];
	
	

	$sql = "INSERT INTO cliente (cliente_nome,  cliente_endereco, cliente_telefone, cliente_email, cliente_senha) 
	VALUES ('$nome', '$endereco', '$telefone','$email', '$senha')"; 

		$consulta = mysqli_query($conn,$sql);

		//$codcliente = mysqli_insert_id($conn); //pega o campo chave da tabela (vai ser usado em upload)
		
		//neste ponto chama o arquivo para fazer o upload da foto
        //include("upload.php");

        mysqli_close($conexao); //fecha a conexao
		
		//redireciona para a pagina de cadastro de produto mandando uma mensagem
		//echo "<script>parent.document.location='telaentrada.php'></script>";		
		//header("location:tela cadastro.php?msg=Usuário cadastrado com sucesso!");

?>