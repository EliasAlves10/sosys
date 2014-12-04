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

require"../controller/connect_bd.php";

	//Inserindo dados no banco...
     $nome_hospital = $_POST["nome_hospital"];
	 $nome_leito = $_POST["nome_leito"];
	 
    
	 
	 
	 //Especificando dados....
     $query = mysql_query(" INSERT INTO leito (nome_hospital,nome_leito)
                        VALUES('$nome_hospital','$nome_leito')");

	//Tratando erros caso não seja digitados valores nos campos...					
     if($_POST["nome_hospital"] == "" || $query == FALSE) {
                    echo"<script>alert('O campo de nome do hospital nÃ£o foi digitado.');</script>";
                    //$rsp == FALSE;
					header("Location :../view/insert_leito.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>"; 
           } else if($_POST["nome_leito"] == ""|| $query == FALSE) {
                  echo"<script>alert('O campo de nome do leito nÃ£o foi digitado.');</script>";
				   // $rsp == FALSE;
					header("Location :../view/insert_leito.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>";	
            } 			 
				//Apos tratamento dos erros,é informado que os dados são inseridos ao cliente... 
            if($query == TRUE) {
                    echo"<script>alert('Cadastrado de leito realizado com sucesso.');</script>";
					header("Location :../view/insert_user.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_leito.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('O cadastro de leito nÃ£o pode ser realizado.');</script>";
						  header("Location :../view/insert_leito.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_leito.php>";
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
	
