<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test1.php" method="get">
        <input type="text" name="your_name" id="">
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    $XVI="Иван Васильевич"; 
    $XVIII="Пётр Алексеевич"; 
    $XIX="Николай Павлович";
    // "В XVI веке царствовал Иван Васильевич"
    if (isset($_GET['your_name'])){
        $vek = $_GET['your_name'];
        echo 'В '.$vek.' веке царствовал '.$XVI;
    }