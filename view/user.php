<div align="left">
	<?php
		//*Aki é o nome do usuario logado *//
		if(isset($_SESSION['login_usuario'])){
			echo"<font color='red'>Usuário: ".$_SESSION['login_usuario']."</font>";	
		}
	?>
</div>
