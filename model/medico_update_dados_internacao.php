<?php
    include_once '../includes/formataData.php';
?>
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

	//Inserindo dados no banco...
	 $id = $_POST["id"];
     $data_internacao = formata_data_db($_POST["data_internacao"]);
	 $diagnostico_paciente = $_POST["diagnostico_paciente"];
	 $tratamento_paciente = $_POST["tratamento_paciente"];
     $procedimento_paciente = $_POST["procedimento_paciente"];
	 $crm_medico = $_POST["crm_medico"];
	 $nome_hospital= $_POST["nome_hospital"];
	 $local_paciente = $_POST["local_paciente"];
	 $observacoes = $_POST["observacoes"];
    	 
	  $consulta = mysql_query("UPDATE internacao SET data_internacao='$data_internacao',diagnostico_paciente='$diagnostico_paciente',tratamento_paciente='$tratamento_paciente',procedimento_paciente='$procedimento_paciente',crm_medico='$crm_medico',nome_hospital='$nome_hospital',local_paciente='$local_paciente',observacoes='$observacoes' WHERE id='$id'"); 
	  echo"<script>alert(Dados alterados com sucesso!');</script>";
                    	header("Location :../view/medico_list_editer.php");
					    echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/medico_list_editer.php>"; 
?>
		<div class="positionProgress">
			<div class="progress-striped active">
			<p align="center">Aguarde...</p>
				<progress  class="bar bar-danger" style="width: 500%; height:26px;"id="pg" max="59" ></progress>
			</div>	
		</div>	
		</body>
</html>	
	
