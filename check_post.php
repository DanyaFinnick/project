<?php
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(trim('$name') == '')
    echo 'Вы не ввели имя пользователя';
  else if(strlen(trim('$name')) <= 1)
    echo 'Слишком короткое имя';
  else {
    header('Location: about.php');
      exit;
    // $password = md5($password);
    // echo "<h1>Все данные</h1>";
    // $_POST['password'] = md5($password);
    // foreach($_POST as $key => $value)
    //   echo "<p>$value</p>";
      
  }