<?php


$c_user=new C_user();
if(isset($_POST['login'])){
  
  $email=$_POST['txtemail'];
  $password=md5($_POST['txtpassword']);
 $user=$c_user->dangnhapTK($email,$password);
  

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" type="text/css" href="lib/themes/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="lib/themes/images/ico/icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
<body>

<div class="container">
  
    <div class="row">
      
      
        <div class= "col-md-2"></div>
        <div class= "col-md-8">
          <div class="row" style="margin: 80px;background-color:#747170; box-shadow: -1px 1px 50px 10px black;">
            <div class="col=md-6">
              <ul>
                <a href="login.php" class="active" style="border-bottom: 2px solid #f44c89; padding: 10px;">Sign in</a>
                <a href="register.php">Sign up</a>
          <form  method="post" action="?controller=pages&action=login">
              </ul>
              <label class="label control-label"> Email</label>
              <input type="text" class="form-control" name="txtemail" placeholder=" Your email"></br>
              <label class="label control-label"> Password</label>
              <input type="Password" class="form-control" name="txtpassword" placeholder=" Your password">
              <input type="checkbox" name=""><small>Remember me?</small>
             <p> 
              <?php



if(isset($_SESSION['err'])){
    echo "<p align='center' style='color: red;'>" . $_SESSION['err'] . "</p>";
    unset($_SESSION['err']);
}
?>
        </p>
              <input class="btn btn-large btn-success" type="submit" name="login" value="Sign in" />
              <p class="text-center"><a href="forgetpassword.html"> Forget Password</a></p>
            </form>   
          </div>
         
          </div>
        </div>
  
        
      
    </div>
  
</div>   
  </div>
</div>
</body>
</html>