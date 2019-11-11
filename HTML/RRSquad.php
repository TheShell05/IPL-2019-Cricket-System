<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Rajasthan Royals</title>
</head>
<body>
  <nav id="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="T2.html">Teams</a></li>
      <li><a href="Results.html">Results</a></li>
      <li><a href="Stats.html">Stats</a></li>
    </ul>
  </nav>   
  <div id="RR-page" class="team-page">
    <div class="header">
      <div class="overlay">
        <div class="team-info5">
          <h1 class='m-heading'>Rajasthan Royals</h1>
          <div class="team-data5">
            <div><h1>Owner</h1><p>Royal Multisport Pvt. Ltd</p></div>
            <div><h1>Stadium</h1><p>Sawai Mansingh Stadium</p></div>
            <div><h1>Captain</h1><p>Steve Smith</p></div>
          </div>
        </div>
      </div>
      <img src="img/Header/RR_Header.jpg">
    </div>
    <nav id="navbar5" class="team-nav">
      <ul>
        <li><a href="RRResults.html">Results</a></li>
        <li><a href="RRSquad.html">Squad</a></li>
      </ul>
    </nav>

<?php

$c=	mysqli_connect("localhost","root","");
	// echo "Connection to the server was successful!";
	$dbase_name="air";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query="select p_name, nationality,dob, matches_played,IPL_Debut_Year from players where tid='T07'";
	$data=mysqli_query($c,$query);
  echo "<br><br>";
  print "<h2>Squad Details of RR:</h2>";
	print "<table border cellpadding=12>";
	print "<tr bgcolor=pink>";
	print "<th bgcolor=pink>Name</th>";
	print "<th bgcolor=pink>Nationality</th>";
	print "<th bgcolor=pink>DOB</th>";
	print "<th bgcolor=pink>Matches Played</th>";
	print "<th bgcolor=pink>Debut Year</th>";
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