<html>
	<head>
		<title>Get type</title>
	</head>
	<body>
		<form method="post">
			<input type="string" name="input">
			<button type="submit">Check type</button>
			<h1>Get data type:</h1>
			<div>
				<?php 
					if(isset($_POST['input'])){
						echo (int) gettype($_POST['input']);
					}
				?>
			</div>
		</form>
	</body>
</html>