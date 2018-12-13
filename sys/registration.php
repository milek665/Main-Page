<?php
require_once("config.php");
if(isset($_POST['register'])){
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repeatPassword = $_POST['repeatPassword'];
  $year = $_POST['year'];
  $hashPassword = password_hash($password,PASSWORD_BCRYPT);
  if(empty($login && $email && $password && $repeatPassword && $year)){
      echo "Fill in the fields correctly";
  }
  else{
  $sth = $db->prepare('INSERT INTO user (login, email,password, year) VALUE (:login, :email,:password, :year)');
  $sth->bindValue(':login', $login, PDO::PARAM_STR);
  $sth->bindValue(':email', $email, PDO::PARAM_STR);
  $sth->bindValue(':password', $hashPassword, PDO::PARAM_STR);
  $sth->bindValue(':year', $year, PDO::PARAM_STR);
  $sth->execute();

  die('Registration is successful');
  }
}
?>