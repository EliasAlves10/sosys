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

	//Inserindo dados do paciente no banco...
     $nome_paciente = $_POST["nome_paciente"];
	 $cpf_paciente = $_POST["cpf_paciente"];
	 $rg_paciente = $_POST["rg_paciente"];
     $dataNasc_paciente = formata_data_db($_POST["dataNasc_paciente"]);
	 $pai_paciente = $_POST["pai_paciente"];
	 $mae_paciente = $_POST["mae_paciente"];
	 $sexo = $_POST["sexo"];
	 $endereco_paciente = $_POST["endereco_paciente"];
	 $bairro_paciente = $_POST["bairro_paciente"];
	 $profissao_paciente = $_POST['profissao_paciente'];
	 $estado_paciente = $_POST['estado_paciente'];
     $cidade_paciente = $_POST['cidade_paciente'];
	
	
	
	 
	 //Especificando dados....
     $query_paciente = mysql_query(" INSERT INTO paciente(nome_paciente,cpf_paciente,rg_paciente,dataNasc_paciente,pai_paciente,mae_paciente,sexo,endereco_paciente,bairro_paciente,profissao_paciente,estado_paciente,cidade_paciente)
                        VALUES('$nome_paciente','$cpf_paciente','$rg_paciente','$dataNasc_paciente','$pai_paciente','$mae_paciente','$sexo','$endereco_paciente','$bairro_paciente','$profissao_paciente','$estado_paciente','$cidade_paciente')");

	
		
		//Apos tratamento dos erros,顩nformado que os dados s䯠inseridos ao cliente... 
            if($query_paciente == TRUE ) {
                    echo"<script>alert('Dados do paciente inseridos continue o cadastro colocando os dados do responsavel pelo paciente caso tenha se não precione o botão enviar do formulario.');</script>";
					header("Location :../view/respaciente.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/respaciente.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('O cadastro não pode ser realizado tente novamente.');</script>";
						  header("Location :../view/internacao.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/internacao.php>";
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
	
