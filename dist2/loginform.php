<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login your account</title>
  
  
  
  
  
</head>

<body>

  <html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/lol.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=username]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=username]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body >
  <div class="section"></div>

  <main style="width:90%;margin:0 auto;" class="white">
    <center>
      <!--<img class="responsive-img" style="width: 250px;" src="" />-->

      <h1 class="header center amber-text text-darken-4">UIT.bet</h1>
      <div class="section"></div>

      <h5>Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey darken-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="grey darken-4"  action="loginprocess.php" class="col s12" method="get">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class="orange-text" type='text' name='username' id='text' />
                <label for='text'>Enter your username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class="orange-text" class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='orange-text' href='forgotpasswd.html'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <input type="submit" name="submitt" class='col s12 btn btn-large waves-effect amber darken-4' value='Login'>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a class='orange-text' href="../dist/registerform.php">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
<div class="parallax"><img src="football-stadium.jpg" alt="Unsplashed background img 1"></div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
  
  

</body>

</html>
