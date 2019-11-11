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
$c=	mysqli_connect("localhost","root","");
	// echo "Connection to the server was successful!";
	$dbase_name="air";
	mysqli_select_db($c,$dbase_name);
	// echo "<br>Database is selected";
	$query1 ="SELECT p_name from players where pid in (SELECT pid FROM batsman where Runs_Scored in(select max(Runs_Scored) from batsman))";
;
	$query2 ="SELECT max(Runs_Scored) from batsman";

	$query3="SELECT p_name from players where pid in (SELECT pid FROM bowlers where Wickets_taken in(select max(Wickets_taken) from bowlers))";

	$query4 = "SELECT MAX(Wickets_taken) as r FROM bowlers";

	$query5="SELECT p_name from players where pid in (SELECT pid FROM batsman where No_of_6 in(select max(No_of_6) from batsman))";
	$query6="SELECT max(No_of_6) as six from batsman";

	$query7="SELECT p_name from players where pid in (SELECT pid FROM batsman where No_of_4 in(select max(No_of_4) from batsman))";

	$query8="SELECT p_name from players where pid in (SELECT pid FROM batsman where No_of_50 in(select max(No_of_50) from batsman))";

	$query9="SELECT p_name from players where pid in (SELECT pid FROM batsman where No_of_100 in(select max(No_of_100) from batsman))";
	$query10="SELECT p_name from players where pid in (SELECT pid FROM batsman where Highest_Score in(select max(Highest_Score) from batsman))";

	$query11="SELECT max(Highest_Score) as hs from batsman";

	$data=mysqli_query($c,$query1);
	print "<h2>Orange Cap Holder For 2019:</h2>";
	print "<table cellpadding=12>";
	print "<th bgcolor=orange>Name</th>";
	print "</tr>";

	while ( $info = mysqli_fetch_assoc( $data ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['p_name']."</td>";
	   print "</tr>";
	}
	   print "</table>";
    
	$data1=mysqli_query($c,$query2);
	print "<table cellpadding=12>";

	print "<tr bgcolor=blue>";
	print "<th bgcolor=orange>Runs</th>";
	print "</tr>";

	while ( $info = mysqli_fetch_assoc( $data1 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['max(Runs_Scored)']."</td>";
	   print "</tr>";
	}
	   print "</table>";
	


	$data2=mysqli_query($c,$query3);
	print "<h2>Purple Cap Holder For 2019:</h2>";
	print "<table cellpadding=12>";
	print "<th bgcolor=purple>Name</th>";
	print "</tr>";

	while ( $info = mysqli_fetch_assoc( $data2 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['p_name']."</td>";
	   print "</tr>";
	}
	   print "</table>";
    
	$data3=mysqli_query($c,$query4);
	print "<table cellpadding=12>";

	print "<tr bgcolor=blue>";
	print "<th bgcolor=purple>Runs</th>";
	print "</tr>";

	while ( $info = mysqli_fetch_assoc( $data3 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['r']."</td>";
	   print "</tr>";
	}
	   print "</table>";
	  
	
	$data4=mysqli_query($c,$query10);
	print "<h2>Most Number of Sixes For 2019:</h2>";
	print "<table cellpadding=12>";
	print "<th bgcolor=blue>Name</th>";
	print "</tr>";

	while ( $info = mysqli_fetch_assoc( $data4 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['p_name']."</td>";
	   print "</tr>";
	}
	   print "</table>";
    
	$data5=mysqli_query($c,$query11);
	print "<table cellpadding=12>";
	print "<tr bgcolor=blue>";
	print "<th bgcolor=blue>Highest Score</th>";
	print "</tr>";

	while ( $info = mysqli_fetch_assoc( $data5 ) )
	{   
	   print "<tr>";
	   print "<td>" .$info['hs']."</td>";
	   print "</tr>";
	}
	   print "</table>";
	   mysqli_close($c);
	?>
	
</body>
</html>