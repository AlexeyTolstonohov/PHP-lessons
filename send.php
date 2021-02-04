<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8" />
    <title>Форма</title>

</header>

<body>
    <?php

    $fio = $_POST['fio'];
    $email = $_POST['email'];

    //проверка
    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);

    //преобразовываем юрл
    $fio = urldecode($fio);
    $email = urldecode($email);

    //обрезаем пробелы 
    $fio = trim($fio);
    $email = trim($email);

    //выводим
    /*
    echo $fio;
    echo "<br>";
    echo $email;
    */

    
    if (mail("example@mail.ru", "Заявка с сайта", "ФИО:" . $fio . ". E-mail: " . $email, "From: example2@mail.ru \r\n")) {
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки Номер ошибки @@@@@";
    }


    ?>

</body>

</html>