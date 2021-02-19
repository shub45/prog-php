<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function(){
					
				$('#insert').click(function(event){
					event.preventDefault();
					$.ajax({
							url: "insert.php",
							method: "post",
							data: $('form').serialize(),
							dataType: "text",
							success: function(strMessage) {
									$('#message').text(strMessage)
							}
					});

				});
			});
	</script>	
</head>
<body>
	<h1>Insert Values into Data Base</h1>	
	<div>
		<p id="message"></p>
			<form method="post">
				<table cellpadding="5" cellspacing="5">
					<tr><th>Enter Name</th><td><input type="text" id="name" name="name"></td></tr>
					<tr><th>Enter Email</th><td><input type="email" id="email" name="email"></td></tr>
					<tr><th>Enter Contact</th><td><input type="text" id="contact" name="contact"></td></tr>
					<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert"></td></tr>
				</table>
		    </form>
	</div>
</body>
</html>	

	