<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="fio">Enter your fio</label>
        <input type="text" name="fio" id="">
        <label for="zp">Enter your zp</label>
        <input type="text" name="zp" id="">
        <button type="submit">send</button>
    </form>
</body>
</html>


<?php
    if (isset($_GET['fio'])){
        foreach($_GET as $key=>$value){
            // eval("\$$key='$value';");
            $$key=$value;
            //$key = fio $fio = 'volodina'
            //$key = zp $zp = '1000'
        }
    }
    print "Фамилия $fio<BR>Оклад=$zp";
    // $f = 'sin';
    // $x = 30;
    // eval("\$z=$x/180*pi();");
    // // $z=$x/180*pi();
    // echo $z;