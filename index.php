<html>
	<head>
		<title> Second Page</title>		
		<script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type = "text/css">
			.linha{
				font-weight: bold;
				color: green;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	</head>
	<body>
		<?php
			for($i = 0 ; $i < 10 ; $i++){
				print("<span class=\"linha\"> Linha número " . $i . "</span><br>");
				//echo "The number is: $i <br/>";
			}
		?>
	</body>
	
	<script type = "text/javascript">
		$(document).ready(function(){
			alert("Welcome!");
		});
	</script>
</html>