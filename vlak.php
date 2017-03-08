<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
	<style>
		body {
			background-color: powderblue;
		}
		#demo {
			height: 100px;
			width: 100px;
			background-color: white;
		}
	</style>
  </head>
  <body>
	  <script>
		function myFunction() {
			var x = document.getElementById("mySelect").value;
			var y = document.getElementById("input1").value
			var z = document.getElementById("input2").value
			document.getElementById("demo").style.backgroundColor = x;
			document.getElementById("demo").style.height = y + "px";
			document.getElementById("demo").style.width = z + "px";
		}
		</script>
	Enter some height: <input type="text" id="input1" name="txt" value="Height" onchange="myFunction()"><br />
	Enter some lenght: <input type="text" id="input2" name="txt" value="Lenght" onchange="myFunction()"><br />
	Enter color:
	<select name="color" id="mySelect" onchange="myFunction()">
		<option value="blue">Blue</option>
		<option value="red">Red</option>
		<option value="yellow">Yellow</option>
		<option value="pink">Pink</option>
  </select>
  <p id="demo"></p>

  </body>
</html>