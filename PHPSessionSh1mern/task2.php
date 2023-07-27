<?php
    session_start();
    $_SESSION['count']++;
    $_SESSION['arrayAnswer'][]= $_POST['answer1'];
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
    <form action="task3.php" method="post" class="quiz_form">
        <p>Вопрос 2</p>
        <p>Как называется конкретный тип URI,идентифицирующий ресурс по его имени, а не по его местонахождению?</p>

        <input type="radio" id="answ1" name="answer2" value="1" >
        <label for="answ1">URN</label> </br>

        <input type="radio" id="answ2" name="answer2" value="2" >
        <label for="answ2">URL</label> </br>

        <input type="radio" id="answ3" name="answer2" value="3" >
        <label for="answ3">URR</label> </br>

        <input type="radio" id="answ4" name="answer2" value="4" >
        <label for="answ4">ERROR</label> </br>

        <input type="submit" name="Submit" class = "button_next" value="Продолжить">
    </form>

    </body>

    </html>
</DOCTYPE>

