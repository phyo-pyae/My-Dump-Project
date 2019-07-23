<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Materialize SignUp form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  
  <link rel='stylesheet' href='../css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="style.css">

  
</head>

<body class="white ">

  <div class="container">
<div class="row">
  <br><br><br><br><br><br><br><br><br><br><br>
  <h4 class="orange-text">Enter your personal information for registeration</h1>
    <form class="grey darken-4" action="registerprocess.php" method="get" class="col s12" id="reg-form">
      <div class="row">
        <div class="input-field col s6">
          <input class="orange-text" id="first_name" name="first_name" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input class="orange-text" id="last_name" name="last_name" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input class="orange-text" id="username" name="username" type="text" class="validate" required>
          <label for="username">Username</label>
        </div>   
        <div class="input-field col s6">
          <input class="orange-text" id="phone" name="phone" type="text" class="validate" required>
          <label for="phone">Phone Number</label>
        </div>     
        <div class="input-field col s6">
          <input class="orange-text" id="country" name="country" type="text" class="validate" required>
          <label for="country">Country</label>
        </div>     
        <div class="input-field col s6">
          <input class="orange-text" id="address" name="address" type="text" class="validate" required>
          <label for="address">Address</label>
        </div>                   
        <div class="input-field col s6">
          <input class="orange-text" id="city" name="city" type="text" class="validate" required>
          <label for="city">City</label>
        </div>        
      </div>
        <div class="input-field col s6">
          <input class="orange-text" id="email" name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>      
      
      <div class="row">
        <div class="input-field col s12">
          <input class="orange-text" id="password" name="password" type="password" class="validate" minlength="6" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
    <p>
      <label>
        <input class="orange-text" name="gender" type="radio" value="M" required />
        <span>Male</span>
      </label>
    </p>
    <p>
      <label>
        <input class="orange-text" name="gender" type="radio" value="F" required />
        <span>Female</span>
      </label>
    </p>
        </div>


        <div class="input-field col s6">

              <label><span>DOB:</span></label><br><input type="date" name="date" class="datepicker" >

        
        </div>
        </div>
      <div class="input-field col s6">
        <button class="btn amber darken-1" name="action" value="Lo">
            <a href="../dist2/loginform.php">Go to Login Page</a>
        </button>
      </div>
      <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light amber darken-4" type="submit" value="Re" name="action">Register
            
          </button><br>
      </div>

    </form>
  </div>
</div>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script  src="../js/script.js"></script>
  <script src="../js/init.js"></script>
  




</body>

</html>
