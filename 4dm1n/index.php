<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
header("location:home.php");    
}
else
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Dashboard CUB</title>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="plugins/icheck/square/blue.css">

</head>
<!--<body class="login-page">-->
<body>
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Login Administrator</b></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form method="post" action="login.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="username" name="username"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="password" name="password"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="login" name="login"/>
        </div>
      </div>
      </form>
    </div>
  
  </div>
</body>

</html>
