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
  <nav id="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#About">About</a></li>
      <li><a href="T2.html">Teams</a></li>
      <li><a href="Results.html">Results</a></li>
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
$c= mysqli_connect("localhost","root","");
  // echo "Connection to the server was successful!";
  $dbase_name="air";
  mysqli_select_db($c,$dbase_name);
  // echo "<br>Database is selected";
  $query="select * from plays where tid = 'T05'";

  $data=mysqli_query($c,$query);
  echo "<br><br>";
  print "<h2>Results of CSK:</h2>";
  print "<table border cellpadding=12>";
  print "<tr bgcolor=purple>";
  print "<th bgcolor=purple>Status</th>";
  print "<th bgcolor=purple>Runs</th>";
  print "<th bgcolor=purple>Wicket</th>";
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
