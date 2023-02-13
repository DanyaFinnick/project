<?php
$title = "О нас";
    require("blocks/header.php")
?>
<div class="container mt-2">
<h1>О нас</h1>
<form action="check_get.php" method="get">
  <input type="text" name="username" placeholder="Введите имя:" class="form_control"><br>
  <input type="email" name="email" placeholder="Введите email:" class="form_control"><br>
  <input type="password" name="password" placeholder="Введите пароль:" class="form_control"><br>
  <textarea name="message" class="form_control" placeholder="Комментарий"></textarea><br>
  <input type="submit" value="Отправить" class="btn btn-success">
  </div>
</form>
<?php
    require("blocks/footer.php")
?>
