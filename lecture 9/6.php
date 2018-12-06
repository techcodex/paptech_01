<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
<form>
<label>Enter a Number</label>
<input type="text" id="num" class="err">
<span class="error num"></span>
<br>
<label>Eneter Second Number</label>
<input type="text" id="num1" class="err">
<span class="error num1"></span>
<br>
<input type="submit" id="click" name="submit" value="Submit">
</form>
</body>
<script>
$(document).ready(function(e) {
	$("#click").click(function(e) {
		e.preventDefault();
		$(".error").text("");
		var num1 =  $("#num").val();
		var num2 = $("#num1").val();
		var i = 0;
		if(num1 == "") {
			i++;
			$(".num").html("Please Fill Out these Fileds");
			$("#num").css("border-color","red");
		}
		if(num2 == "") {
			i++;
			$(".num1").html("Please Fill out these Fields");
		}	
		if(i == 0) {
			var sum = parseInt(num1) + parseInt(num2);
			alert(sum);
		}
	})
});
</script>
</html>