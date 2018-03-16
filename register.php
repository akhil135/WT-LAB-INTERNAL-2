
<?php
  include('server.php');
  session_start();
  if(isset($_POST['register'])){
      $adminname = $_POST['name'];
      $email= $_POST['email'];
      $phoneno= $_POST['phoneno'];
      $keyword = $_POST['keyword'];
      $password = md5($password);
      $query = "INSERT INTO `akhil` (`adminname`,`email`,`phoneno`,`keyword`) VALUES('$adminname','$email','$phoneno','$keyword')";
      mysqli_query($db,$query);
      
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
    </head>
    <style>
        *{
            text-align:center;
            padding:10px;
            padding-top: 10px;
        }
        body{
            background-image:url(maxresdefault.jpg);
        }
        .login{
            align:center;

        }
    </style>
    <body>
        <div class="register"></div>
        <form method="POST" action="">
            <div>
                <lable> name</lable> 
                <input type="text" name="name" placeholder="name">
            </div>
            <div>
                <lable> email</lable> 
                <input type="text" name="email" placeholder="email">
            </div>
            <div>
                <lable> phone no</lable> 
                <input type="text" name="phoneno" placeholder="phone no">
            </div>
            <div>
                <lable>password</lable>
                <input type="password" name="password" placeholder="password" >
            </div>  
        submit<br>
        <input type="submit" name="register" value="sub">      
        </form>
    </body>
</html>

