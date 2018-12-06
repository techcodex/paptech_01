<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jquery</title>
<link href="">

</head>

<body>
<button id="click" class="clic"> Click Me</button>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
<script>
$(document).ready(function(e) {
	//$("#sector_name").function_name("paramters ");
	$("#click").click(function(e) {
		alert("Button CLick");	
	})
	
});

</script>

</html>
