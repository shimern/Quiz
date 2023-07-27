<?php
    session_start();
    $_SESSION['count']=1;
    $_SESSION['arrayAnswer']= array();
?>
<DOCTYPE html>
<html>

<head>
    <title>Квиз</title>
    <meta charset="utf-8"/>
    <style>
        <?php echo file_get_contents("sessionCSS.css"); ?>
    </style>
    <script src="checkForm.js"></script>
</head>

<body>
    <form action="task2.php" method="post" class="quiz_form">
        <p>Вопрос 1</p>
        <p>Что такое виртуальный хост?</p>

        <input type="radio" id="answ1" name="answer1" value="1" >
        <label for="answ1">Узел</label> </br>

        <input type="radio" id="answ2" name="answer1" value="2" >
        <label for="answ2">Функция веб-сервера, позволяющая настроить один сервер на работус несколькими доменами</label> </br>

        <input type="radio" id="answ3" name="answer1" value="3" >
        <label for="answ3">Хост, имеющий уникальный IP-адрес в Сети</label> </br>

        <input type="radio" id="answ4" name="answer1" value="4" >
        <label for="answ4">Протокол передачи запроса серверу</label> </br>

        <input type="submit" name="Submit" class = "button_next" value="Продолжить">

    </form>

</body>

</html>
</DOCTYPE>
