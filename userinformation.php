<?php 

require('config/auth.php');
require('config/connect.php');

if (isset($_SESSION['uid'])) {
  $id  = $_SESSION['uid'] ;
}else if(isset($_SESSION['aid'])){
  $id  = $_SESSION['aid'] ;  

}else{

}
$query = "SELECT balance from account where UID='$id'" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
$row = mysqli_fetch_array($result,true);

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
      <a id="logo-container" href="index.php" class="brand-logo orange-text">UIT.bet</a>
      <ul class="right hide-on-med-and-down">
<?php 

if (isset($_SESSION['auth_key']) or isset($_SESSION['admin_key'])) {
  if (isset($_SESSION['auth_key'])) {
    $userid   =   $_SESSION['uid'] ;
  }else{$adminid = $_SESSION['aid'];}
  $username = $_SESSION['username'] ;
  echo "<li><a class='orange-text' href='userinformation.php'>" ;  
  echo "Username:".$username;
  echo "</a></li>";
  echo "<li><a class='orange-text'>".$row['balance']."$</a>" ;
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
  echo "<li><a class='orange-text'>".$row['balance']."$</a>" ;
  echo "</li><li><a class='orange-text' href='logout.php'>Logout</a></li>";
}else{
  echo "<li><a href='dist/registerform.php'>Register</a></li><li><a href='dist2/loginform.php'>Login</a></li><li><i class='material-icons'>language</i></li>" ;
}

 ?>        
      </ul>
      <a href="" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<br><br><br>
  <center>
     <div class="row">
    <form class="col s12">
      <h3 class="header center amber-text text-darken-4">User Information</h4>
    <br><br>
      <div class="row">
        <ul>
          <li style="font-size: 30px;"><a href="userprofile.php">User Profile</a></li>
          <?php 
            if (!isset($_SESSION['aid'])) {
              echo "<li style='font-size: 30px;'><a href='notification.php'>Notification Box</li>
          <li style='font-size: 30px;'><a href='history.php'>History</li>
          <li style='font-size: 30px;'><a href='feedback.php'>Give FeedBack</li>" ;
            }
           ?>
        </ul>
      </div>
<?php 

if (!isset($_SESSION['aid'])) {
  echo "        <div class='row center'>
          <a href='payment' id='download-button' class='btn-large waves-effect waves-light amber darken-4' >Deposit/Withdraw</a>
        </div>" ;
}

 ?>


    </form>
  </div>
    </center> 
  

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <br><br><br><br><br><br>
  
  </body>
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
            © 2019  Copyright bar nyr
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</html>
