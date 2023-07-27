<?php
session_start();
$_SESSION['arrayAnswer'][]= $_POST['answer5'];

$score=0;
if($_SESSION['arrayAnswer'][0]=="2")
    $score++;
if($_SESSION['arrayAnswer'][1]=="1")
    $score++;
if($_SESSION['arrayAnswer'][2]=="3")
    $score++;
if($_SESSION['arrayAnswer'][3]=="1")
    $score++;
if($_SESSION['arrayAnswer'][4]=="1")
    $score++;


if($score<3)
    $descript='Поздравляем! Вы с успехом провалили тест!';
else
    $descript='Поздравляем! Вы с успехом прошли тест!';

echo "<div class='quiz_form'>Результат: " .$score."/".$_SESSION['count']. "</br>". $descript."</div>";
?>

<DOCTYPE html>
<html>

<head>
    <title>Квиз</title>
    <meta charset="utf-8"/>
    <style>
        <?php echo file_get_contents("sessionCSS.css"); ?>
    </style>
</head>

<body>
<!--
    <div class="quiz_form">
		<p><?php 
			echo "Результат: ".$score."/".$_SESSION['count']."</br>". $descript;
			?>
		</p>
	</div>
-->

</body>

</html>
</DOCTYPE>
