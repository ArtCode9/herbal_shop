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
.input_form {
    height: 62px;
    width: 80%;
    background: none;
    font-size: 2rem;
    padding: 0 15px;    
    border-radius: 3px;
    margin-top: 16px;
    border: none;
    border-bottom: 3px solid lightgreen;
}
.input_form:focus{
   border: 3px solid lightgreen;
}
#form a {
   text-decoration: none;
   color: lightgreen;
}
#form a:hover {
   color: black;
}
#loginBtn {
   width: 40%;
   height: 62px;
   background: lightgreen;
   color: black;
   border-radius: 9999px;
   margin: 22px 0;
}
#loginBtn:hover {
   background-color: black;
   color: lightgreen;
}
</style>
<div>

<?php
include("connect.php");

if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
   $result = $conn-> query($sql);
   if($result->num_rows>0){
      session_start();
      $row=$result->fetch_assoc();
      $_SESSION['username']=$row['username'];
      header("Location: index.php");
      exit();
   }else{
      function fun_alert ($message){
         echo"<script>alert('$message')</script>";
      };
      fun_alert('User not found!');
      header("Location: index.php");
   };

   $conn->close();
};

?>

<!-- this part for sign to home page -->
<form action="loginPopUp.php" method="post" id="form">
      
      <input type="text" name="username" placeholder="Enter your name to login" class="input_form">
      <input type="text" name="password" placeholder="Enter Password" class="input_form">
      <input type="submit" name="login" value="Login" id="loginBtn">
      <a href="signup.php">sign up</a>
</form>

</div>

