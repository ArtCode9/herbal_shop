<style>
#form {
   width: 100%;
   height: 100%;
   border: 2px solid black;   
   padding: 42px;
   
}
</style>
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
<form action="loginPopUp.php" method="post" id="form">
      <label>username:</label>
      <input type="text" name="username" placeholder="Enter your name to login">
      <input type="text" name="password" placeholder="Enter Password">
      <input type="submit" name="login" id="butform">
      <a href="login.php">Login</a>
</form>

</div>

