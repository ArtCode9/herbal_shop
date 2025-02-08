<?php
      // Database connection
      $servername = "localhost";
      $username = "artcode";
      $password = "1";
      $dbname = "herbalshop";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // check connection
      if($conn->connect_error){
         die("Connection failed : " . $conn->connect_error);
      }else{
         echo"connection success";
      }

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
      $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
   <style>
      .LogBox{
         width: 80%;
         height: 460px;
         margin: 0 auto;
         padding: 32px;
         border: 2px solid black;
         border-radius: 19px;
         background-color: lightgreen;
         display: flex;
         justify-content: center;
         align-content: center;
         font-size: 32px;
      }
      .LogBox input{
         width: 100%;
         border: none;
         border-bottom: 2px solid black;
         font-size: 32px;
         padding: 16px;
         margin: 12px;
      }
      #butform{
         width: 100%;
         background-color: black;
         color: lightgreen;
         border-radius: 19px;
      }
   </style>
</head>
<body>
      <div class="LogBox">
            <form action="login.php" method="post">
                  <label>Username:</label><br>
                  <input type="text" name="username" placeholder="Your name"><br>
                  <label>Password:</label><br>
                  <input type="password" name="password" placeholder="Enter your pass"><br>
                  <input id="butform" type="submit" name="enter" value="Login">
            </form>

      </div>
</body>
</html>
<?php


?>