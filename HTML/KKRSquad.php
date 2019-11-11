<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Kolkata Knight Riders</title>
</head>
<body>
  <nav id="Tnavbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#About">About</a></li>
      <li><a href="T2.html">Teams</a></li>
      <li><a href="Stats1.php">Stats</a></li>
    </ul>
  </nav>   
  <div id="KKR-page" class="team-page">
    <div class="header">
      <div class="overlay">
        <div class="team-info3">
          <h1 class='m-heading'>Kolkata Knight Riders</h1>
          <div class="team-data3">
            <div><h1>Owner</h1><p>Knight Riders Sports Pvt. Ltd.</p></div>
            <div><h1>Stadium</h1><p>Eden Gardens</p></div>
            <div><h1>Captain</h1><p>Dinesh Karthik</p></div>
            <div><h1>Coach</h1><p>Jacques Kallis</p></div>
          </div>
        </div>
      </div>
      <img src="img/Header/KKR_Header.jpeg">
    </div>
    <nav id="navbar3" class="team-nav">
      <ul>
        <li><a href="KKRResults.php">Results</a></li>
        <li><a href="KKRSquad.php">Squad</a></li>

      </ul>
    </nav>
<?php
$c=	mysqli_connect("localhost","root","");
	// echo "Connection to the server was successful!";
	$dbase_name="air";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query="select p_name, nationality,dob, matches_played,IPL_Debut_Year from players where tid='T05'";
	$query1="select p_name, Style, Runs_Scored,Highest_Score, Average, Strike_Rate, No_of_50, No_of_100, No_of_4, No_of_6 from batsman ba, players p where tid='T05' and p.pid=ba.pid";
	$query2="select p_name, Style1, Wickets_taken, Total_Runs,Best_Figures, Average1, Economy,Four_W, Five_W from players p,bowlers bo where tid = 'T05' and p.pid=bo.pid";

	$data=mysqli_query($c,$query);
	echo "<br><br>";
	print "<h2>Squad Details of KKR:</h2>";
	print "<table border cellpadding=12>";
	print "<tr bgcolor=purple>";
	print "<th bgcolor=purple>Name</th>";
	print "<th bgcolor=purple>Nationality</th>";
	print "<th bgcolor=purple>DOB</th>";
	print "<th bgcolor=purple>Matches Played</th>";
	print "<th bgcolor=purple>Debut Year</th>";
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

	$data1=mysqli_query($c,$query1);
		echo "<br><br>";
		print "<h2>Batting Details of KKR:</h2>";
		print "<table border cellpadding=12>";
		print "<tr bgcolor=purple>";
		print "<th bgcolor=purple>Name</th>";
		print "<th bgcolor=purple>Style</th>";
		print "<th bgcolor=purple>Runs Scored</th>";
		print "<th bgcolor=purple>Highest_Score</th>";
		print "<th bgcolor=purple>Average</th>";
		print "<th bgcolor=purple>Strike_Rate</th>";
		print "<th bgcolor=purple>4</th>";
		print "<th bgcolor=purple>6</th>";
		print "<th bgcolor=purple>50</th>";
		print "<th bgcolor=purple>100</th>";

	print "</tr>";
	while ( $info = mysqli_fetch_assoc( $data1 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['p_name']."</td>";
	   print "<td>" .$info['Style']."</td>";
	   print "<td>" .$info['Runs_Scored']."</td>";
	   print "<td>" .$info['Highest_Score']."</td>";
	   print "<td>" .$info['Average']."</td>";
	   print "<td>" .$info['Strike_Rate']."</td>";
	   print "<td>" .$info['No_of_4']."</td>";
	   print "<td>" .$info['No_of_6']."</td>";
	   print "<td>" .$info['No_of_50']."</td>";
	   print "<td>" .$info['No_of_100']."</td>";
	   print "</tr>";
	}
	   print "</table>";


	$data2=mysqli_query($c,$query2);
		echo "<br><br>";
		print "<h2>Bowling Details of KKR:</h2>";
		print "<table border cellpadding=12>";
		print "<tr bgcolor=purple>";
		print "<th bgcolor=purple>Name</th>";
		print "<th bgcolor=purple>Style</th>";
		print "<th bgcolor=purple>Wickets</th>";
		print "<th bgcolor=purple>Runs</th>";
		print "<th bgcolor=purple>Best Figures</th>";
		print "<th bgcolor=purple>Average</th>";
		print "<th bgcolor=purple>Economy</th>";
		print "<th bgcolor=purple>4W</th>";
		print "<th bgcolor=purple>5W</th>";
		print "</tr>";
	
	while ( $info = mysqli_fetch_assoc( $data2 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['p_name']."</td>";
	   print "<td>" .$info['Style1']."</td>";
	   print "<td>" .$info['Wickets_taken']."</td>";
	   print "<td>" .$info['Total_Runs']."</td>";
	   print "<td>" .$info['Best_Figures']."</td>";
	   print "<td>" .$info['Average1']."</td>";
	   print "<td>" .$info['Economy']."</td>";
	   print "<td>" .$info['Four_W']."</td>";
	   print "<td>" .$info['Five_W']."</td>";
	   print "</tr>";
	}
	   print "</table>";
	   mysqli_close($c);

	?>

</body>
</html>