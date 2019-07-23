<?php 

require('config/connect.php');
require('config/auth.php');

if (isset($_SESSION['uid'])) {
  $id  = $_SESSION['uid'] ;
}else if(isset($_SESSION['aid'])){
  $id  = $_SESSION['aid'] ;  
}else{

}
$white = 0 ;
$query = "SELECT * from register where UID='$id'" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
$row = mysqli_fetch_array($result,true) ;
$updateid   = $row['uid'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$username = $row['username'];
$password = $row['password'];
$email = $row['email'];
$phone = $row['phone'];
$country = $row['country'];
$gender = $row['gender'];
$dob = $row['dob'];
$city = $row['city'];
$address = $row['address'];


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
  <div class="container">
    <form action="userprofileprocess.php" method="get">
      <input type="hidden" name="white" value=1>
      <input type="hidden" name="updateid" value="<?php echo $updateid ?>">
      <div class="row">
        <div class="input-field col s6">
          <input value="<?php echo $first_name; ?>" class="orange-text" id="first_name" name="first_name" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input value="<?php echo $last_name; ?>" class="orange-text" id="last_name" name="last_name" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input value="<?php echo $username; ?>" class="orange-text" id="username" name="username" type="text" class="validate" required>
          <label for="username">Username</label>
        </div>   
        <div class="input-field col s6">
          <input value="<?php echo $phone; ?>" class="orange-text" id="phone" name="phone" type="text" class="validate" required>
          <label for="phone">Phone Number</label>
        </div>     
        <div class="input-field col s6">
          <input value="<?php echo $country; ?>" class="orange-text" id="country" name="country" type="text" class="validate" required>
          <label for="country">Country</label>
        </div>     
        <div class="input-field col s6">
          <input value="<?php echo $address; ?>" class="orange-text" id="address" name="address" type="text" class="validate" required>
          <label for="address">Address</label>
        </div>                   
        <div class="input-field col s6">
          <input value="<?php echo $city; ?>" class="orange-text" id="city" name="city" type="text" class="validate" required>
          <label for="city">City</label>
        </div>        
      </div>
        <div class="input-field col s6">
          <input value="<?php echo $email; ?>" class="orange-text" id="email" name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>      
      
      <div class="row">
        <div class="input-field col s12">
          <input value="<?php echo $password; ?>" class="orange-text" id="password" name="password" type="password" class="validate" minlength="6" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
    <p>
      <label>
        <input class="orange-text" name="gender" type="radio" value="M" <?php if($gender=="M"){echo 'checked=""';}else{echo '';} ?>  required />
        <span>Male</span>
      </label>
    </p>
    <p>
      <label>
        <input class="orange-text" name="gender" type="radio" value="F" <?php if($gender=="F"){echo 'checked=""';}else{echo '';} ?>  required />
        <span>Female</span>
      </label>
    </p>
        </div>


        <!-- <div class="input-field col s6"> -->

      <div class="row">
        <div class="input-field col s12">
          <input value="<?php echo $dob; ?>" class="orange-text" id="dob" name="dob" type="text" class="validob" minlength="6" required>
          <label for="dob">dob</label>
        </div>
      </div>
        
        </div>
        <!-- </div> -->
        <input type="submit" name="option" value="Edit" class="btn btn-large btn-register waves-effect waves-light amber darken-4">
        <input type="submit" name="option" value="Back" class="btn btn-large btn-register waves-effect waves-light amber darken-4">        
      </form>
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
