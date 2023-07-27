<?php
session_start();
$_SESSION['count']++;
$_SESSION['arrayAnswer'][]= $_POST['answer4'];
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
    <form action="result.php" method="post" class="quiz_form">
        <p>Вопрос 5</p>
        <p>Что такое cookies?</p>

        <input type="radio" id="answ1" name="answer5" value="1" >
        <label for="answ1">Расширение протокола HTTP, хранящий данные о клиенте</label> </br>

        <input type="radio" id="answ2" name="answer5" value="2" >
        <label for="answ2">Вкусняшка к чаю</label> </br>

        <input type="radio" id="answ3" name="answer5" value="3" >
        <label for="answ3">Новый тег HTML</label> </br>

        <input type="radio" id="answ4" name="answer5" value="4" >
        <label for="answ4">Расширение PHP</label> </br>

        <input type="submit" name="Submit" class = "button_next" value="Продолжить">
    </form>

    </body>

    </html>
</DOCTYPE>

