<?php
require_once("config.php");
if(isset($_POST['signIn'])){
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $sth = $db->prepare('SELECT * FROM user WHERE email=:email limit 1');
  $sth->bindValue(':email', $email, PDO::PARAM_STR);
  $sth->execute();
  $user = $sth->fetch(PDO::FETCH_ASSOC);
  if($user){
    if(password_verify($password,$user['password'])){
      die("<h1>User logged in successfully</h1>");
    }else{
      echo "<h1>Incorrect login or password</h1>";
    }
  }else{
    echo "<h1>User not found</h1>";
  }
}
?>