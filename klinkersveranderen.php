                        <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
	<style>
  li{
    position: relative;
    margin-top: 10px;
  }
	</style>
  </head>
  <body>
	<script>
		function func(){
			var input = document.getElementById("ding").value;
			a = input.split('a').join('!');
			document.getElementById("demo").innerHTML = a;
			var div1 = document.getElementById("demo").innerHTML;
			e = div1.split('e').join('@');
			document.getElementById("demo").innerHTML = e;
			var div2 = document.getElementById("demo").innerHTML;
			o = div2.split('o').join('#');
			document.getElementById("demo").innerHTML = o;
			var div3 = document.getElementById("demo").innerHTML;
			u = div3.split('u').join('$');
			document.getElementById("demo").innerHTML = u;
			var div4 = document.getElementById("demo").innerHTML;
			i = div4.split('i').join('%');
			document.getElementById("demo").innerHTML = i;
		}
		
		function func2(){
			var input = document.getElementById("ding2").value;
			a = input.split('a').join('&');
			document.getElementById("demo2").innerHTML = a;
			var div1 = document.getElementById("demo2").innerHTML;
			e = div1.split('e').join('*');
			document.getElementById("demo2").innerHTML = e;
			var div2 = document.getElementById("demo2").innerHTML;
			o = div2.split('o').join('=');
			document.getElementById("demo2").innerHTML = o;
			var div3 = document.getElementById("demo2").innerHTML;
			u = div3.split('u').join('+');
			document.getElementById("demo2").innerHTML = u;
			var div4 = document.getElementById("demo2").innerHTML;
			i = div4.split('i').join('-');
			document.getElementById("demo2").innerHTML = i;
		}
	</script>
	
	Klinkers: <input id="ding"><br>
	<button onclick="func()">Click me</button><br>
	<div id="demo"></div><br><br>
	
	Klinkers: <input id="ding2"><br>
	<button onclick="func2()">Click me</button><br>
	<div id="demo2"></div>
  </body>
</html>