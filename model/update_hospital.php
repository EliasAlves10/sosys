<!Doctype html>
<!--[if lt IE 7 ]><html class="ie6" lang="pt-BR"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="pt-BR"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="pt-BR">
    <!--<![endif]-->
	<head>
        <title>SOSsys</title>
		<script src="js/bootbox.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/alert.test.js" type="text/javascript"></script>
		<script src="js/bootbox.test.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/style-position-progress.css" />
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/theme.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link href="../css/alertify.css" rel="stylesheet">
		<link rel="shortcut icon" href="../imagens/logotipo_teste.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<!--<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/theme.css" rel="stylesheet">
			<link href="../css/font-awesome.min.css" rel="stylesheet">
			<link href="../css/alertify.css" rel="stylesheet">-->
		<script type="text/javascript">
		var progresso = new Number();
			var maximo = new Number();
			var progresso = 0;
			var maximo = 60;
				function start(){
				if(progresso + 1 < maximo){
				 progresso = progresso +1;
				 document.getElementById("pg").value=progresso;
				 setTimeout("start();",1);
				}
			}	
		</script>
	 </head>
     <body onload="start();">	 
<?php

require"../controller/connect_bd.php";

	error_reporting(0);
	ini_set(“display_errors”, 0 );	
	//Inserindo dados no banco...
	 $id = $_POST["id"];
     $nome_hospital = $_POST["nome_hospital"];
	 $cnpj_hospital = $_POST["cnpj_hospital"];
	 $endereco_hospital = $_POST["endereco_hospital"];
     $bairro_hospital = $_POST["bairro_hospital"];
	 $estado_hospital = $_POST["estado_hospital"];
	 $cidade_hospital = $_POST["cidade_hospital"];
	 $telefone_hospital = $_POST["telefone_hospital"];
	 $telefone2_hospital = $_POST["telefone2_hospital"];
	 $email_hospital = $_POST["email_hospital"];
	 $total_uti = $_POST["total_uti"];
	 $total_leito = $_POST["total_leito"];
    
	 
	  $consulta = mysql_query("UPDATE hospital SET nome_hospital='$nome_hospital',cnpj_hospital='$cnpj_hospital',endereco_hospital='$endereco_hospital',bairro_hospital='$bairro_hospital',estado_hospital='$estado_hospital',cidade_hospital='$cidade_hospital',telefone_hospital='$telefone_hospital',telefone2_hospital='$telefone2_hospital',email_hospital='$email_hospital',total_uti='$total_uti',total_leito='$total_leito'WHERE id='$id'"); 
	  echo"<script>alert(Dados alterados com sucesso!');</script>";
                    	header("Location :../view/list_hospital.php");
					    echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_hospital.php>"; 
?>
		<div class="positionProgress">
			<div class="progress-striped active">
		<p align="center">Aguarde...</p>
				<progress  class="bar bar-danger" style="width: 500%; height:26px;"id="pg" max="59" ></progress>
			</div>	
		</div>	
		</body>
</html>	
	
