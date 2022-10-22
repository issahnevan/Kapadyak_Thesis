<?php 
 include '../dbcon.php';	
 ?>
<html>
<head>
	<title>
	</title>
	<!-- CSS only -->
</head>
<body>
	<div class="container">
		<div id="link_wrapper">

		</div>
	</div>
</body>
</html>
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "inbox.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc();
	// 1sec
},1000);

window.onload = loadXMLDoc;
</script>