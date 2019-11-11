<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Kings XI Punjab</title>
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
  <div id="KXIP-page" class="team-page">
    <div class="header">
      <div class="overlay">
        <div class="team-info4">
          <h1 class='m-heading'>Kings XI Punjab</h1>
          <div class="team-data4">
            <div><h1>Owner</h1><p>KPH Dream Cricket Private Limited</p></div>
            <div><h1>Stadium</h1><p>IS Bindra Stadium</p></div>
            <div><h1>Captain</h1><p>Ravichandra Ashwin</p></div>
            <div><h1>Coach</h1><p>Mike Hesson</p></div>
          </div>
        </div>
      </div>
      <img src="img/Header/KXIP_Header.jpg">
    </div>
    <nav id="navbar4" class="team-nav">
      <ul>
        <li><a href="KXIPResults.php">Results</a></li>
        <li><a href="KXIPSquad.php">Squad</a></li>
      </ul>
    </nav>  
  <?php
$c= mysqli_connect("localhost","root","");
  // echo "Connection to the server was successful!";
  $dbase_name="air";
  mysqli_select_db($c,$dbase_name);
  // echo "<br>Database is selected";
  $query="select * from plays where tid = 'T02'";

  $data=mysqli_query($c,$query);
  echo "<br><br>";
  print "<h2>Results of KXIP:</h2>";
  print "<table border cellpadding=12>";
  print "<tr bgcolor=red>";
  print "<th bgcolor=red>Status</th>";
  print "<th bgcolor=red>Runs</th>";
  print "<th bgcolor=red>Wicket</th>";
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