<!DOCTYPE html>
<html>
<header>
  <meta charset="utf-8" />
  <title>Форма</title>

</header>

<body>
  <!--  
<form action="obrabotka.php">
Введите имя:<br>
<input type="text" name="name" size=”15” maxlength=”20” value="" ><br><br>
Введите фамилию:<br>
<input type="text" name="surname" size=”20” maxlength=”25” value="" ><br><br>

Сообщение:<br>
<textarea name="area" cols=”25” rows=”5” wrap=”on”></textarea> <br>
<input type="submit" name="otpravit" value="Отправить">
<input type="reset" name="ochistit" value="Очистить">
</form>
-->



  <form action="send.php" method="post">
    <input type="text" name="phone" placeholder="Укажите Номер телефона" required><br><br>
    <input type="text" name="name" placeholder="Укажите Имя" required><br><br>
    <input type="text" name="email" placeholder="Укажите e-mail" required><br><br>
    <input type="submit" value="Отправить">
  </form>




  <?php


  //http://127.0.0.1/Laba 5 Page with form/index.php
  ?>


</body>

<footer>
</footer>

</html>