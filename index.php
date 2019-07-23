<?php 

require('config/connect.php');

//require('config/auth.php');
  $flag=1;
  session_start();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>UIT.bet</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="grey darken-4 " role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo orange-text">UIT.bet</a>
      <ul class="right hide-on-med-and-down">
<?php 

if (isset($_SESSION['auth_key']) or isset($_SESSION['admin_key'])) {
  if (isset($_SESSION['auth_key'])) {
    $userid   =   $_SESSION['uid'] ;
  }else{$userid = $_SESSION['aid'];}
  $username = $_SESSION['username'] ;
  echo "<li><a class='orange-text' href='userinformation.php'>" ;  
  echo "Username:".$username;
  echo "</a></li>";
  $query = "SELECT balance from account where UID='$userid'" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
$row = mysqli_fetch_array($result,true);

  echo "<li><a class='orange-text' href='userinformation.php'>".$row['balance']."$" ;
  echo "</li><li><a class='orange-text' href='logout.php'>Logout</a></li>";
}else{
  echo "<li><a href='dist/registerform.php'>Register</a></li><li><a href='dist2/loginform.php'>Login</a></li><li><i class='material-icons'>language</i></li>" ;
}

 ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
<?php 

if (isset($_SESSION['auth_key']) or isset($_SESSION['admin_key'])) {
  if (isset($_SESSION['auth_key'])) {
    $userid   =   $_SESSION['uid'] ;
  }else{$adminid = $_SESSION['aid'];}
  $username = $_SESSION['username'] ;
  echo "<li><a class='orange-text' href='userinformation.php'>" ;  
  echo "Username:".$username;
  echo "</a></li>";
    $query = "SELECT balance from account where UID='$userid'" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
$row = mysqli_fetch_array($result,true);
  echo "<li><a class='orange-text' href='userinformation.php'>".$row['balance']."$" ;
  echo "</a></li><li><a class='orange-text' href='logout.php'>Logout</a></li>";
}else{
  echo "<li><a href='dist/registerform.php'>Register</a></li><li><a href='dist2/loginform.php'>Login</a></li><li><i class='material-icons'>language</i></li>" ;
}

 ?>
      </ul>
      <a href="" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center orange-text text-darken-3 ">UIT.bet</h1>
        <div class="row center">
          <h5 class="header col s12 light">Online FootBall Betting System</h5>
        </div>
        <div class="row center">
          <a href="#nainglin" id="download-button" class="btn-large waves-effect waves-light amber darken-4" >Get Started</a>
        </div>
<div class="row">
    <div class="col s12 m6">
      <div class="transparent">
        <div class="card-content white-text">
          <span class="card-title"><h5>The best place to bet</h5></span>
          <p>UIT.bet sport is one of the best online betting sites as it gives premium betting promotions from a terrific welcome bonus on a customer’s first deposit to various promotions that mix sports betting with events and prizes that customers want to participate in.</p>
        </div>
      </div>
    </div>
    <div class="co2 s12 m6">
      <div class="transparent">
        <div class="card-content white-text">
          <span class="card-title"><h5>Beting Tips</h5></span>
          <p>Our Sport Betting platform is designed to be a one-stop-shop for all your sport betting needs. Alongside our market-leading betting odds, we've got a daily stream of player news and team updates on the UIT.bet  blog</p>
        </div>
      </div>
    </div>

</div>
      </div>
    </div>
    <div class="parallax"><img src="world.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <br><br>
  <a name="nainglin"></a>




  <?php
    if (!isset($_GET['sorted'])) {
    $query  = "SELECT * from matches" ; 
    //echo("ba");
  }

  if (isset($_GET['sorted'])and $_GET['flag']==2) {
    $query  = "SELECT * from matches ORDER BY UNIX_TIMESTAMP(time) " ;  //timestamp for 24 hour-format
    //echo("bbb ");
  }else{
    $query  = "SELECT * from matches" ; 
    //echo("bbc ");
  }


 
  

  $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
 // $count  = mysqli_num_rows($result);
  //$result    = mysqli_fetch_array($result);


    if (!isset($_SESSION['admin_key'])) {
    	echo("<div class='center'><h3>Upcoming Matches</h1></div>");
      	include('upcomingmatches.php') ; 
      	echo("<div class='center'><h3>Recent Matches</h1></div>");
      	include('recentmatches.php') ;
    }else{
      include('admin_matches.php');

    }
   ?>  


  </body>
  <br>
  <footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Get the BEST Sports Betting Odds</h5>
                <p class="grey-text text-lighten-4">With a dedicated team of experienced professionals from the online sports betting industry, UIT.bet sport has given its customers not only the ability to participate in online football betting and horse racing betting, but also provides the format for online sports betting for practically any market imaginable, from rugby to swimming or even special bets on the winner of the us presidential election to the oscars.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright Right bar nyar
            </div>
          </div>
        </footer>
</html>
