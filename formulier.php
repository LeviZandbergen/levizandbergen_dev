<!DOCTYPE html>
<html>
<head>
	<title>VeRDI site</title>
</head>
<body>
	<form method="POST">
		<input type="text" id="text" name="name">
		<label for="name">Name</label>
		<input type="color" id="changetext" name="color">
		<label for="name">Color</label>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
<script>
var input = document.getElementById("changetext");
var text = document.getElementById("text");

input.addEventListener('change', function () {
  text.style.color = this.value;
});
</script>
</html>
<?php

if(isset($_POST["submit"])){
	echo $_POST['name'];
	echo $_POST['color'];
}
?>
