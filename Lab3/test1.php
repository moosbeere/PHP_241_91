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
    if (isset($_GET['your_name'])){
        $massiv_slov = explode(' ', $_GET['your_name']);
        upFunc($massiv_slov);
        echo implode(' ', $massiv_slov);
    }

    function upFunc(&$massiv_slov){
        for($i = 0; $i < count($massiv_slov); $i++){
            if(($i % 2) > 0){
                $massiv_slov[$i] = strtoupper($massiv_slov[$i]);
            }
        }
    }



