<html>
<head>
<style>
#een, #twee, #drie{
  width: 300px;
  height: 300px;
  background-color: aqua;
  margin: 10px;
  display: inline-block;
}

#uno:hover, #dos:hover, #tres:hover{
  cursor: pointer;
  text-decoration: underline;
}
</style>
</head>
<body>

<div id='een'><p id='uno'>klik</p></div>
<div id='twee'><p id='dos'>klik</p></div>
<div id='drie'><p id='tres'>klik</p></div>


<script>
document.querySelector('#uno').addEventListener("click", function(){
  page('helloworld', 'uno')
});
document.querySelector('#uno').addEventListener("click", function(){
  alert('Hello world')
});
document.querySelector('#dos').addEventListener("click", function(){
  page('img', 'dos')
});
document.querySelector('#tres').addEventListener("click", function(){
  page('loremipsum', 'tres')
});

function page(page, select) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
     document.getElementById(select).innerHTML = this.responseText;
     this.alert(this.responseText);
  };
  xhr.open("GET", page+".php", true);
  xhr.send();
}

</script>
</body>
</html>