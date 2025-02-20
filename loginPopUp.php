<style>
#form {
   width: 100%;
   height: 100%;
   
   padding: 42px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   padding: 9px;
   font-size: 32px;
}
#form input{
    height: 62px;
    width: 80%;
    background: none;
    font-size: 2rem;
    padding: 0 15px;    
    border-radius: 3px;
    margin-top: 16px;
}
#form input:focus{
   border: 1px solid #00bcd4;
}
#form a {
   text-decoration: none;
   color: lightgreen;
}
#form a:hover {
   color: black;
}
.loginBtn {
   background-color: lightgreen;
   color: black;
}
.loginBtn:hover {
   background-color: black;
   color: lightgreen;
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
      
      <input type="text" name="username" placeholder="Enter your name to login">
      <input type="text" name="password" placeholder="Enter Password">
      <input type="submit" name="login" value="Login" class="loginBtn">
      <a href="login.php">sign up</a>
</form>

</div>

