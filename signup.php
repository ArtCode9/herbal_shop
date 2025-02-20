<?php
      include("connect.php");


      // add user
      if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enter'])){
         $name = $_POST['username'];
         $password = $_POST['password'];

         try{
            $stmt = $conn->prepare("INSERT INTO user(`username`, `password`) VALUES(?, ?)");
            $stmt->bind_param('si', $name, $password);

            $stmt->execute();
            $stmt->close();
         }catch(Exception $e){
            echo"Can not enter user in database : " . $e->getMessage();
         };

      }

/*       // remove user
      if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove'])){
         $user = $_POST['username'];

         $stmt = $conn->prepare("DELETE FROM user WHERE username = ?");
         $stmt->bind_param('s', $user);
         $stmt->execute();
         $stmt->close();
         echo"Remove Successful";
      } */
      

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
   <link rel="stylesheet" href="CSS/signup.css">
</head>
<body>
      <div class="LogBox">
            <form action="login.php" method="post">
                  <label>Username:</label><br>
                  <input type="text" name="username" placeholder="Your name"><br>
                  <label>Password:</label><br>
                  <input type="password" name="password" placeholder="Enter your password"><br>
                  <label>Email:</label><br>
                  <input type="text" name="email" placeholder="Enter your Email">
                  <input id="butform" type="submit" name="enter" value="Register">
                  <a href="index.php" id="home_link">Home Page</a>
            </form>

       
       <!--      <form action="login.php" method="post" id="remove_box">
                  <label>Username:</label><br>
                  <input type="text" name="username" placeholder="username" required>
                  <input type="submit" name="remove" value="Remove User" id="rembut">
            </form> -->

      </div>
           
</body>
</html>
