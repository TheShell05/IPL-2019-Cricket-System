<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Royal Challengers Bangalore</title>
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
  <div id="RCB-page" class="team-page">
    <div class="header">
      <div class="overlay">
        <div class="team-info7">
          <h1 class='m-heading'>Royal Challengers Bangalore</h1>
          <div class="team-data7">
            <div><h1>Owner</h1><p>Royal Challengers Sports Pvt. Ltd</p></div>
            <div><h1>Stadium</h1><p>M. Chinnaswamy Stadium</p></div>
            <div><h1>Captain</h1><p>Daniel Vettori</p></div>
            <div><h1>Coach</h1><p>Virat Kohli</p></div>
          </div>
        </div>
      </div>
      <img src="img/Header/RCB_Header.jpg">
    </div>
    <nav id="navbar7" class="team-nav">
      <ul>
        <li><a href="RCBResults.php">Results</a></li>
        <li><a href="RCBSquad.php">Squad</a></li>
      </ul>
    </nav>
<?php

$c=	mysqli_connect("localhost","root","");
	// echo "Connection to the server was successful!";
	$dbase_name="air";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query="select p_name,nationality,dob,matches_played,IPL_Debut_Year from players where tid='T08'";
	$data=mysqli_query($c,$query);
	echo "<br><br>";
	print "<h2>Squad Details of RCB:</h2>";
	print "<table border cellpadding=12>";
	print "<tr bgcolor=crimson>";
	print "<th bgcolor=crimson>Name</th>";
	print "<th bgcolor=crimson>Nationality</th>";
	print "<th bgcolor=crimson>DOB</th>";
	print "<th bgcolor=crimson>Matches Played</th>";
	print "<th bgcolor=crimson>Debut Year</th>";
	print "</tr>";
	while ( $info = mysqli_fetch_assoc( $data ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['p_name']."</td>";
	   print "<td>" .$info['nationality']."</td>";
	   print "<td>" .$info['dob']."</td>";
	   print "<td>" .$info['matches_played']."</td>";
	   print "<td>" .$info['IPL_Debut_Year']."</td>";
	   print "</tr>";
	}
	   print "</table>";
	   mysqli_close($c);
	?>
</body>
</html>