<?php
session_start();
include('connection.php');

//logout
include('logout.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Notes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Note Maker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto right">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Help</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <ul class="nav-item navbar-nav navbar-right">
      <li><a href="#loginModal" class="nav-link" data-toggle="modal">Login</a></li>
    </ul>
  </div>
</nav>

    <!--Jumbotron with Sign up Button-->
      <div class="jumbotron" id="myContainer">
          <h1>Online Notes App</h1>
          <p>Your Notes with you wherever you go.</p>
          <p>Easy to use, protects all your notes!</p>
          <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#signupModal">Sign up-It's free</button>
      </div>


    <!--Login form-->
      <form method="post" id="loginform">
     <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--Login message from PHP file-->
        <div id="loginmessage"></div>
        <div class="form-group">
            <label for="loginemail" class="sr-only">Email:</label>
            <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
        </div>
        <div class="form-group">
            <label for="loginpassword" class="sr-only">Password</label>
            <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="rememberme" id="rememberme">
              Remember me
            </label>
                <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
            Forgot Password?
            </a>
        </div>
      </div>
      <div class="modal-footer">
          <input class="btn green" name="login" type="submit" value="Login">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Cancel
        </button>
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">
      Register
    </button>
      </div>
    </div>
  </div>
</div>
</form>

    <!--Sign up form-->
      <form method="post" id="signupform">
        <!-- Modal -->
   <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Sign up Today </h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <!--Sign up message from PHP file-->
           <div id="signupmessage"></div>

           <div class="form-group">
               <label for="username" class="sr-only">Username:</label>
               <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
           </div>
           <div class="form-group">
               <label for="email" class="sr-only">Email:</label>
               <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
           </div>
           <div class="form-group">
               <label for="password" class="sr-only">Choose a password:</label>
               <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
           </div>
           <div class="form-group">
               <label for="password2" class="sr-only">Confirm password</label>
               <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
           </div>
         </div>
         <div class="modal-footer">
           <input class="btn green" name="signup" type="submit" value="Sign up">
         <button type="button" class="btn btn-default" data-dismiss="modal">
           Cancel
         </button>
         </div>
       </div>
     </div>
   </div>



      </form>

    <!--Forgot password form-->
      <form method="post" id="forgotpasswordform">
        <div class="modal fade" id="forgotpasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Forgot Password? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="forgotpasswordmessage"></div>


                <div class="form-group">
                    <label for="forgotemail">Enter your email address:</label>
                    <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
                </div>
                </div>
                <div class="modal-footer">
                <input class="btn green" name="forgotpassword" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                Cancel
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">
              Register
            </button>
                </div>
            </div>
          </div>
        </div>
      </form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>
