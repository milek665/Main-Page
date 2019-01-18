<?php
require_once("config.php");
  if(isset($_POST['register'])){
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeatPassword = trim($_POST['repeatPassword']);
    $year = trim($_POST['year']);
    $hashPassword = trim(password_hash($password,PASSWORD_BCRYPT));

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