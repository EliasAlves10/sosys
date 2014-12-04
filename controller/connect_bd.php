<?php
 
			/* Conectando ao mysql ... */
			$servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "sossys";
            $conmy = @mysql_connect($servidor,$usuario,$senha);
            if($conmy == FALSE) {
             // Erro ao estabelecer conexão com o Mysql...
			 // header("Location:../failure/erro-500.php");
            } else {
             // Conectado ao mysql...
							 
            }
			     /*Conectando ao Banco de dados ... */

            $conbd = @mysql_select_db($banco,$conmy);
            if($conbd == FALSE) {
              // Erro ao tentar conectar ao Banco de Dados...";
            } else {
             //Conexão com o Banco de Dados estabelecida!
			 
            }

?>


