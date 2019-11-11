<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>IPL 2019</title>
</head>

<header id="Follow">
  <div id="Social">
    <a href="https://www.facebook.com/IPL/" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
    <a href="https://www.instagram.com/iplt20/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
    <a href="https://twitter.com/IPL" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>   
  </div>
</header>

<body>
  <nav id="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="T2.html">Teams</a></li>
      <li><a href="#">Results</a></li>
      <li><a href="Stats1.php">Stats</a></li>
    </ul>
    
    <h1 class="logo">
      <span class="Log">
          <a href="Registration.html"><i class="far fa-user"></i> </a>
        
      </span>
    </h1>
  </nav>
  
  <header id="showcase">
      <div class="showcase-content">
          <h1 class="l-heading t_marg">
            IPL 2019
          </h1>
      </div>
  </header>
  <?php
$c= mysqli_connect("localhost","root","");
  // echo "Connection to the server was successful!";
  $dbase_name="air";
  mysqli_select_db($c,$dbase_name);
  // echo "<br>Database is selected";
  $query="select * from plays";

  $data=mysqli_query($c,$query);
  echo "<br><br>";
  echo "<h2>Results Of All Matches:</h2>";
  echo "<table  cellpadding='12' cellspacing='5'>";
  echo "<tr bgcolor=blue>";
  echo "<th bgcolor=blue>Matches</th>";
  echo "<th bgcolor=blue>Teams ID</th>";
  echo "<th bgcolor=blue>Status</th>";
  echo "<th bgcolor=blue>Runs</th>";
  echo "<th bgcolor=blue>Wicket</th>";
  echo "</tr>";
  while ( $info = mysqli_fetch_array($data))
  {   
     echo "<tr>";
     echo "<td>" .$info['mid']."</td>";
     echo "<td>" .$info['tid']."</td>";
     echo "<td>" .$info['Status']."</td>";
     echo "<td>" .$info['runs_scored']."</td>";
     echo "<td>" .$info['wickets_lost']."</td>";

     echo "</tr>";
  }
     echo "</table>";
     mysqli_close($c);
?>

</body>
</html>