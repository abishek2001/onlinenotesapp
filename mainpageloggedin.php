<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Notes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
      <style>
        #container{
            margin-top:120px;
        }

        #notePad, #allNotes, #done, .delete{
            display: none;
        }

        .buttons{
            margin-bottom: 20px;
        }

        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #8c8c8c;
            color: black;
            background-color:#ffffb3;
            padding: 10px;

        }

        .noteheader{
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 0 10px;
            background: linear-gradient(#FFFFFF,#ECEAE7);
        }

        .text{
            font-size: 20px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .timetext{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .notes{
            margin-bottom: 100px;
        }

      </style>
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
        <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Help</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="#">My Notes</a>
      </li>
    </ul>
    <ul class="nav-item navbar-nav navbar-right">
      <li><a href="#" class="nav-link" data-toggle="modal">Logged in as <b><?php echo $_SESSION['username']?></b> </a></li>
        <li><a href="./index.php?logout=1" class="nav-link">Logout</a></li>
    </ul>
  </div>
</nav>

<!--Container-->
      <div class="container" id="container">
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons">
                    <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>
                    <button id="edit" type="button" class="btn btn-info btn-lg float-right">Edit</button>
                    <button id="done" type="button" class="btn green btn-lg float-right">Done</button>
                    <button id="allNotes" type="button" class="btn btn-info btn-lg">All Notes</button>
                </div>

                <div id="notePad">
                    <textarea rows="10"></textarea>
                </div>

                <div id="notes" class="notes">
<!--                  Ajax call to a php file-->
                </div>

            </div>
        </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
    <script src="mynotes.js"></script>
  </body>
</html>
