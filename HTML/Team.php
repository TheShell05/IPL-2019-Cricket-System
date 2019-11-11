<html>
<head><title>ABCTEST</title></head>
<body>
<?php
$c=	mysqli_connect("localhost","root1","");
	// echo "Connection to the server was successful!";
	$dbase_name="ipl";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query="select t_name,matches_played,NRR,Points from teams";
	$data=mysqli_query($c,$query);
	print "<table border cellpadding=12>";
	print "<tr bgcolor=blue>";
	print "<th bgcolor=blue>Name</th>";
	print "<th bgcolor=blue>Matches</th>";
	print "<th bgcolor=blue>NRR</th>";
	// print "<th bgcolor=blue>Matches Played</th>";
	print "<th bgcolor=blue>Points</th>";
	print "</tr>";
	while ( $info = mysqli_fetch_assoc( $data ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['t_name']."</td>";
	   print "<td>" .$info['matches_played']."</td>";
	   print "<td>" .$info['NRR']."</td>";
	  // //  print "<td>" .$info['matches_played']."</td>";
	   print "<td>" .$info['Points']."</td>";
	   print "</tr>";
	}
	   print "</table>";
	   mysqli_close($c);
	?>
</body>
</html>
