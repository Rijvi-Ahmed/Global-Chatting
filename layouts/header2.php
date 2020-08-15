<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Global Chat</title>
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    body{
        background-image:url('images/home1.jpeg');
        background-repeat: repeat-x;
        background-repeat: repeat-y;
        background-size: 100% 120%;
        width:100%;
    }
    .navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
    }
    .navbar-inverse .navbar-brand {
        color: white;
        font-size: 25px;
        text-shadow: 0 0 10px #ec32fd, 0 0 40px #ec32fd, 0 0 80px #ec32fd;

    }
    a:hover{
        color: #50546d;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }

    .logout:hover {
        background: red;
        transition: 1s;
        border-radius: 10px;
    }
    
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo1.png" height="40px" width="40px" class="logo">&nbsp;&nbsp;<b>GLOBAL CHAT</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  