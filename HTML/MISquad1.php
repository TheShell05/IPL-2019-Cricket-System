<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Mumbai Indians</title>
</head>
<body>
  <nav id="Tnavbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#About">About</a></li>
      <li><a href="T2.html">Teams</a></li>
      <li><a href="Results.html">Results</a></li>
    </ul>
  </nav>   
  <div id="MI-page" class="team-page">
    <div class="header">
      <div class="overlay">
        <div class="team-info1">
          <h1 class='m-heading'>Mumbai Indians</h1>
          <div class="team-data1">
            <div><h1>Owner</h1><p>Indiawin Sports Pvt. Ltd</p></div>
            <div><h1>Stadium</h1><p>Wankhede Stadium</p></div>
            <div><h1>Captain</h1><p>Rohit Sharma</p></div>
            <div><h1>Coach</h1><p>Mahela Jayawardene</p></div>
          </div>
        </div>
      </div>
      <img src="img/Header/MI_Header.jpg">
    </div>
    <nav id="navbar1" class="team-nav">
      <ul>
        <li><a href="MIResults.html">Results</a></li>
        <li><a href="MISquad.php">Squad</a></li>
      </ul>
		</nav>
		
		<?php
$c=	mysqli_connect("localhost","root","");
	// echo "Connection to the server was successful!";
	$dbase_name="air";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query="select p_name, nationality,dob, matches_played,IPL_Debut_Year from players where tid='T01'";
	$query1="select p_name, Style, Runs_Scored,Highest_Score, Average, Strike_Rate, No_of_50, No_of_100, No_of_4, No_of_6 from batsman ba, players p where tid='T01' and p.pid=ba.pid";
	$query2="select p_name, Style1, Wickets_taken, Total_Runs,Best_Figures, Average1, Economy,Four_W, Five_W from players p,bowlers bo where tid = 'T01' and p.pid=bo.pid";

	$data=mysqli_query($c,$query);
	print "<table border cellpadding=12>";
	print "<tr bgcolor=blue>";
	print "<th bgcolor=blue>Name</th>";
	print "<th bgcolor=blue>Nationality</th>";
	print "<th bgcolor=blue>DOB</th>";
	print "<th bgcolor=blue>Matches Played</th>";
	print "<th bgcolor=blue>Debut Year</th>";
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
		print "<table border cellpadding=12>";
		print "<tr bgcolor=blue>";
		print "<th bgcolor=blue>Name</th>";
		print "<th bgcolor=blue>Style</th>";
		print "<th bgcolor=blue>Runs Scored</th>";
		print "<th bgcolor=blue>Highest_Score</th>";
		print "<th bgcolor=blue>Average</th>";
		print "<th bgcolor=blue>Strike_Rate</th>";
		print "<th bgcolor=blue>4</th>";
		print "<th bgcolor=blue>6</th>";
		print "<th bgcolor=blue>50</th>";
		print "<th bgcolor=blue>100</th>";

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
		print "<table border cellpadding=12>";
		print "<tr bgcolor=blue>";
		print "<th bgcolor=blue>Name</th>";
		print "<th bgcolor=blue>Style</th>";
		print "<th bgcolor=blue>Wickets</th>";
		print "<th bgcolor=blue>Runs</th>";
		print "<th bgcolor=blue>Best Figures</th>";
		print "<th bgcolor=blue>Average</th>";
		print "<th bgcolor=blue>Economy</th>";
		print "<th bgcolor=blue>4W</th>";
		print "<th bgcolor=blue>5W</th>";
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