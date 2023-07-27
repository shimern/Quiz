<?php
    session_start();
    $_SESSION['count']++;
    $_SESSION['arrayAnswer'][]= $_POST['answer2'];
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
    <form action="task4.php" method="post" class="quiz_form">
        <p>Вопрос 3</p>
        <p>Что такое сессия?</p>

        <input type="radio" id="answ1" name="answer3" value="1" >
        <label for="answ1">Экзамены</label> </br>

        <input type="radio" id="answ2" name="answer3" value="2" >
        <label for="answ2">Зачеты</label> </br>

        <input type="radio" id="answ3" name="answer3" value="3" >
        <label for="answ3">Механизм, позволяющий однозначно идентифицировать клиента</label> </br>

        <input type="radio" id="answ4" name="answer3" value="4" >
        <label for="answ4">Глобальный массив переменных</label> </br>

        <input type="submit" name="Submit" class = "button_next" value="Продолжить">
    </form>

    </body>

    </html>
</DOCTYPE>

