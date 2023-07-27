<?php
session_start();
$_SESSION['count']++;
$_SESSION['arrayAnswer'][]= $_POST['answer3'];
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
    <form action="task5.php" method="post" class="quiz_form">
        <p>Вопрос 4</p>
        <p>Где хранится уникальный индентификатор сессии?</p>

        <input type="radio" id="answ1" name="answer4" value="1" >
        <label for="answ1">В виде переменной в адресной строке или в файле Cookies</label> </br>

        <input type="radio" id="answ2" name="answer4" value="2" >
        <label for="answ2">Сессии не существует, это иллюзия</label> </br>

        <input type="radio" id="answ3" name="answer4" value="3" >
        <label for="answ3">Все хранит сервер, идентификация происходит по IP клиента</label> </br>

        <input type="radio" id="answ4" name="answer4" value="4" >
        <label for="answ4">В виде объекта XMLHttpRequest</label> </br>

        <input type="submit" name="Submit" class = "button_next" value="Продолжить">
    </form>

    </body>

    </html>
</DOCTYPE>

