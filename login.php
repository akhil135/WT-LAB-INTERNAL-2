<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
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
        <div class="login"></div>
        <form>
            <div>
                <lable>USER NAME</lable> 
                <input type="text" name="adminname" placeholder="Admin name">
            </div>
            <div>
                <lable>PASSWORD</lable>
                <input type="password" name="password" placeholder="password" >
            </div>  
        submit<br>
        <input type="submit" value="sub">      
        </form>
    </body>
</html>

<?php
  include('server.php');
  session_start();
  if(isset($_POST['class1'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $password = md5($password);
      $query = 'SELECT  * FROM akhil where `username` = $username and `password` = $password';
      $sql = mysqli_query($query);
      if(mysqli_num_rows($sql) > 0){
          $row = mysqli_fetch_assoc($sqli);
          $_SESSION['username'] = $_POST['$username'];
          $_SESSION['password'] = $_POST['$password'];
          $_SESSION['success'] = "Login Successful";
      }
  }
?>
