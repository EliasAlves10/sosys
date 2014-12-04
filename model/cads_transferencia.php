<?php include_once '../includes/formataData.php';?>
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
$id = $_POST["id"];
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
	 /*******************************/
	 $data_internacao = formata_data_db($_POST["data_internacao"]);
	 $diagnostico_paciente = $_POST["diagnostico_paciente"];
	 $tratamento_paciente = $_POST["tratamento_paciente"];
     $procedimento_paciente = $_POST["procedimento_paciente"];
	 $crm_medico = $_POST["crm_medico"];
	 $nome_hospital= $_POST["nome_hospital"];
	 $local_paciente = $_POST["local_paciente"];
	 $observacoes = $_POST["observacoes"];	
	 /*************************************/
	 $causa_transacao = $_POST["causa_transacao"];
	 $data_transacao = formata_data_db($_POST["data_transacao"]);
	 $hora_transacao = $_POST["hora_transacao"];
	 $tipo_admissao = $_POST["tipo_admissao"];
	 $crm_medico_requisitante= $_POST["crm_medico_requisitante"];	
	 $nome_hospital_destino = $_POST["nome_hospital_destino"];
	 
	 //Especificando dados....
     $query_paciente = mysql_query(" INSERT INTO historico(nome_paciente,cpf_paciente,rg_paciente,dataNasc_paciente,pai_paciente,mae_paciente,sexo,endereco_paciente,bairro_paciente,profissao_paciente,estado_paciente,cidade_paciente,data_internacao,diagnostico_paciente,tratamento_paciente,procedimento_paciente,crm_medico,nome_hospital,local_paciente,observacoes,causa_transacao,data_transacao,hora_transacao,tipo_admissao,crm_medico_requisitante,nome_hospital_destino)
                        VALUES('$nome_paciente','$cpf_paciente','$rg_paciente','$dataNasc_paciente','$pai_paciente','$mae_paciente','$sexo','$endereco_paciente','$bairro_paciente','$profissao_paciente','$estado_paciente','$cidade_paciente','$data_internacao','$diagnostico_paciente','$tratamento_paciente','$procedimento_paciente','$crm_medico','$nome_hospital','$local_paciente','$observacoes','$causa_transacao','$data_transacao','$hora_transacao','$tipo_admissao','crm_medico_requisitante','nome_hospital_destino')");

	 $id = $_POST["id"];
            $consulta =mysql_query("SELECT * FROM internacao,paciente,respaciente WHERE id = $id");
            if($consulta == TRUE) {
                         foreach($_POST as $valor) {
                                        //aki servia para visualizar echo $valor;
                         }
            }
            $del= mysql_query("DELETE FROM internacao,paciente,respaciente WHERE id = $id");

		
		//Apos tratamento dos erros,顩nformado que os dados s䯠inseridos ao cliente... 
            if($query_paciente == TRUE ) {
                    echo"<script>alert('A trânsferência foi realizada com sucesso.');</script>";
					header("Location :../view/historico.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/historico.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('A transferência não pode ser realizado tente novamente.');</script>";
						  header("Location :../view/internacao.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_pacientes.php>";
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
	
