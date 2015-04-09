<!DOCTYPE html>

	<body>
	
		<form name="idk" method="post" action="VarTest.php">
		
		<input type="text" name="var">
		<input type="submit">
		</form>
		
		<?php
		
		$var = 0 + $_POST["var"];
		echo $var . "";
		echo gettype($var);
		
		?>
		
		</body>
		
		</html>