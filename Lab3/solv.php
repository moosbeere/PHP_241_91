<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="get">
            <label for="primer">Введите уравнение</label>
            <input type="text" name="primer" id="primer">
            <button type="submit">Получить решение</button>   
        </form>
            
    </main>
</body>
</html>

<?php
    if(isset($_GET['primer']) && !empty($_GET['primer'])){
        $primer = $_GET['primer'];
        //2 + 2
        $arr = explode(' ', $primer);
        var_dump($arr);
    }    