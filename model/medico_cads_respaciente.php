<!Doctype html>
<!--[if lt IE 7 ]><html class="ie6" lang="pt-BR"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="pt-BR"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="pt-BR">
    <!--<![endif]-->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>SOSsys</title>
		<link rel="stylesheet" type="text/css" href="../css/style-position-progress.css" />
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/theme.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link href="../css/alertify.css" rel="stylesheet">
		<script src="js/bootbox.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/alert.test.js" type="text/javascript"></script>
		<script src="js/bootbox.test.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
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
error_reporting(0);
ini_set(“display_errors”, 0 );

require"../controller/connect_bd.php";
		
	//Inserindo dados do responsavel//
	 $nomeResp_paciente = $_POST["nomeResp_paciente"];
	 $enderecoResp_paciente = $_POST["enderecoResp_paciente"];
	 $bairroResp_paciente = $_POST["bairroResp_paciente"];
     $estadoResp_paciente = $_POST["estadoResp_paciente"];
	 $cidadeResp_paciente = $_POST["cidadeResp_paciente"];
	 $telefoneResp_paciente = $_POST["telefoneResp_paciente"];
	 $telefoneResp_paciente2 = $_POST["telefoneResp_paciente2"];
	 
	 	 
	 //Especificando dados....
   
	 $query_respaciente = mysql_query("INSERT INTO respaciente(nomeResp_paciente,enderecoResp_paciente,bairroResp_paciente,estadoResp_paciente,cidadeResp_paciente,telefoneResp_paciente,telefoneResp_paciente2)
						VALUES('$nomeResp_paciente','$enderecoResp_paciente','$bairroResp_paciente','$estadoResp_paciente','$cidadeResp_paciente','$telefoneResp_paciente','$telefoneResp_paciente2')");
			
		//Apos tratamento dos erros,顩nformado que os dados s䯠inseridos ao cliente... 
            if($query_respaciente == TRUE ) {
                    echo"<script>alert('Dados do responsavel cadstrados com sucesso,agora descreva quanto a situação do paciente para finalizar a internação.');</script>";
					header("Location :../view/medico_dados_internacao.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/medico_dados_internacao.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('O cadastro não pode ser realizado cadstre novamente o responsavel.');</script>";
						  header("Location :../view/respaciente.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/medico_respaciente.php>";
            }
             
?>
<div class="positionProgress">
			<div class="progress-striped active">
				<p align="center">Aguarde...</p>
				<progress  class="bar bar-danger" style="width: 500%; height:26px;"id="pg" max="59" ></progress>
			</div>	
		</div>	

		</body>
	</head>
</html>	
	
