<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<nav id="Tnavbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="T2.html">Teams</a></li>
      <li><a href="Results.html">Results</a></li>
      <li><a href="Stats.html">Stats</a></li>
    </ul>
  </nav>   
  <div id="CSK-page" class="team-page">
    <div class="header">
      <div class="overlay">
        <div class="team-info">
          <h1 class='m-heading'>Chennai Super Kings</h1>
          <div class="team-data">
            <div><h1>Owner</h1><p>Chennai Super Kings ltd</p></div>
            <div><h1>Stadium</h1><p>M.A. Chidambaram Stadium</p></div>
            <div><h1>Captain</h1><p>M.S. Dhoni</p></div>
            <div><h1>Coach</h1><p>Stephen Fleming</p></div>
          </div>
        </div>
      </div>
      <img src="img/Header/CSK_Header.jpeg">
    </div>
    <nav id="navbar" class="team-nav">
      <ul>
        <li><a href="CSKResult.php">Results</a></li>
        <li><a href="CSKSquad.php">Squad</a></li>
      </ul>
    </nav>

<?php
$c=	mysqli_connect("localhost","root","");
	// echo "Connection to the server was successful!";
	$dbase_name="air";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query="select * from plays where tid = 'T02'";

	$data=mysqli_query($c,$query);
	echo "<br><br>";
	print "<h2>Results of CSK:</h2>";
	print "<table border cellpadding=12>";
	print "<tr bgcolor=yellow>";
	print "<th bgcolor=yellow>Status</th>";
	print "<th bgcolor=yellow>Runs</th>";
	print "<th bgcolor=yellow>Wicket</th>";
	print "</tr>";
	while ( $info = mysqli_fetch_array($data))
	{   
	   echo "<tr>";
	   print "<td>" .$info['Status']."</td>";
	   print "<td>" .$info['runs_scored']."</td>";
	   print "<td>" .$info['wickets_lost']."</td>";

	   print "</tr>";
	}
	   print "</table>";
	   mysqli_close($c);
?>

</body>
</html>