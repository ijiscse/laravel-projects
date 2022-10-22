<html>
<head>
	
</head>
<body>
	
	@php
echo "<h1 align='center' id='det'></h1>";
	
	foreach($users as $us){
		
		echo "<table border='1' align='center'><tr><td>".$us['stuid']."</td><br>";

	echo "<td>".$us['fname']."</td><br>";
	echo "<td>".$us['lname']."</td></tr></table><br>";

}

	@endphp
	<script>
	let now = new Date();

document.getElementById('det').innerHTML=now;
</script>
	
</body>
</html>