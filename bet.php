<?php 

require('config/connect.php');
require('config/auth.php');


//echo $row['team_1'];echo(" vs ");echo($row['team_2'])

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
      <a id="logo-container" href="index.php" class="brand-logo">UIT.bet</a>
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
<?php 

$matchid = $_GET['id'] ;

//echo("$matchid");
$query  = "SELECT * from matches where MID='".$matchid."' " ; 
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
$row = mysqli_fetch_array($result,true);

 ?>
<br><br><br>
<div style='width:90%;margin:0 auto;'>
  	 <div class="row">
    <form action="betprocess.php" method="get" class="centered">
   	
    <table>
        <thead>
          <tr>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana"></th>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana">Time</th>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana">Team1</th>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana">Team2</th>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana">1Win</th>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana">Draw</th>
              <th class="waves-light amber darken-4 white-text" font-style="Verdana">2Win</th>
          </tr>
        </thead>
        <tbody>
          <tr class='grey darken-4'>
            <td ></td>          
            <td class='white-text'><?php echo($row['time']); ?></td>
            <td class='orange-text'><?php echo($row['team_1']); ?></td>
            <td class='orange-text'><?php echo($row['team_2']); ?></td>
            <td class='blue-text'><?php echo($row['odd_1']); ?></td>
            <td class='blue-text'><?php echo($row['draw']); ?></td>
            <td class='blue-text'><?php echo($row['odd_2']); ?></td>
          </tr>
         </tbody>
    </table>
    <br><br>

    <input type="hidden" name="mid" value="<?php echo($matchid); ?>" >
    <p>
      <label class="orange-text">
        <input class="with-gap" name="option" type="radio" value="<?php echo($row['odd_1']); ?>-<?php echo($row['team_1']); ?>" checked />
        <span>1Win</span>
      </label>
    </p>
    <p>     
      <label class="orange-text">
        <input class="with-gap" name="option" type="radio" value="<?php echo($row['draw']); ?>-<?php echo('draw'); ?>" />
        <span>Draw</span>
      </label>
    </p>
    <p>
      <label class="orange-text">
        <input class="with-gap" name="option" type="radio" value="<?php echo($row['odd_2']); ?>-<?php echo($row['team_2']); ?>"  />
        <span>2Win</span>
      </label>
    </p>

      <div class="row">
        <div class="input-field col s6">
          <input class="orange-text" id="amount" type="text" name="amount" class="validate">
          <label for="amount">Enter amount to bet</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <button type="submit" class="btn btn-large btn-register waves-effect waves-light amber darken-4" type="submit" value="betforwin" name="bett">Bet!
            <i class="material-icons right"></i>
          </button>
        </div>
          <button type="submit" class="btn btn-large btn-register waves-effect waves-light amber darken-4" type="submit" value="backtohome" name="bett">Back</a>
            <i class="material-icons right"></i>
          </button>
      </div>
    </form>
  </div>
</div>
        
  

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
