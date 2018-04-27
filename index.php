<?php
	function calc_nif($dni) {
            $NUM=23;
            $taula=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
	    return  $taula[$dni % $NUM];
	}
	if (isset($_POST["dni"])){
	   $dni=$_POST["dni"];
	   $nif=calc_nif($dni);
	   echo "<b><u>RESULTAT DEL CÀLCUL DE LA LLETRA DEL NIF A PARTIR DEL DNI:</u></b><br>";
	   echo "DNI: ".$dni."<br>";
	   echo "Lletra NIF: ".$nif."<br>";
	   echo "<br>";
	   echo "Desenvolupador: dcm1718daw2";
	}
?>
</html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>APLICACIÓ DE CÀLCUL DE LA LLETRA DEL NIF A PARTIR DEL DNI DESPLEGADA SOBRE HEROKU</title>	
	</head>  
	<body>
		<b>APLICACIÓ CÀLCUL DE LA LLETRA DEL NIF A PARTIR DEL DNI DESPLEGADA SOBRE HEROKU</b><br><br>
		<form name=frm_combo action="index.php" method="POST">
				DNI: <input type="text" name="dni"><br><br>
				<input type="submit" value="Envia"/><input type="reset" value="Esborra"/>
		</form>		
	</body>
</html>
