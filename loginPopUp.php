<div>
<?php
include("connect.php");

if(isset($_POST['login'])){
   $username = $_POST['username'];

   $sql = "SELECT * FROM user WHERE username='$username'";
   $result = $conn-> query($sql);
   if($result->num_rows>0){
      session_start();
      $row=$result->fetch_assoc();
      $_SESSION['username']=$row['username'];
      header("Location: index.php");
      exit();
   }else{
      echo"Not user found";
   };

   $conn->close();
};




?>
<!-- this part for sign to home page -->
<form action="loginPopUp.php" method="post">
      <label>username:</label>
      <input type="text" name="username" placeholder="Enter your name to login">
      <input type="submit" name="login" id="butform">
</form>

</div>











