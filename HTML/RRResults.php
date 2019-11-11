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
      <li><a href="Results.php">Results</a></li>
      <li><a href="Stats1.php">Stats</a></li>
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
        <li><a href="RRResults.php">Results</a></li>
        <li><a href="RRSquad.php">Squad</a></li>
      </ul>
    </nav>
<?php
$c= mysqli_connect("localhost","root","");
  // echo "Connection to the server was successful!";
  $dbase_name="air";
  mysqli_select_db($c,$dbase_name);
  // echo "<br>Database is selected";
  $query="select * from plays where tid = 'T07'";

  $data=mysqli_query($c,$query);
  echo "<br><br>";
  print "<h2>Results of RR:</h2>";
  print "<table border cellpadding=12>";
  print "<tr bgcolor=pink>";
  print "<th bgcolor=pink>Status</th>";
  print "<th bgcolor=pink>Runs</th>";
  print "<th bgcolor=pink>Wicket</th>";
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