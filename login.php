<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script type='text/javascript' src='Password-val.js'></script>

<title>Signin Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!--HEADER-->
?<php include("header.php"); ?>
<!-- /LOGIN container -->
<div style="height: 70px">
</div>
<div class = "col-xs-4 col-md-offset-4">
  <input type="text" class="form-control centered" placeholder="username" id = "userName">
  <div style="height: 5px"></div>
  <input type="password" class="form-control centered" placeholder="Password" id = "userPassword">
  
    <p>your password needs to have:</p>
  
    <p><span class = "glyphicon glyphicon-ok-circle"></span>
    8 or more characters</p>
    <p><span class = "glyphicon glyphicon-ok-circle"></span>Upper and lower case letters</p>
    <p><span class = "glyphicon glyphicon-ok-circle"></span>At least 1 number</p>
<button>login</button>

 
</div>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="password-val.js"></script>
</body>
</html>