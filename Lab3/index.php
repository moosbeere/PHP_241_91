<?php
    $a = 10;
    // echo $a.'<BR>';
    $b = &$a;
    // echo $b.'<BR>';
    $b = 15;
    // echo $a.'<BR>';

    $c = 20;
    $z = 'c';
    // echo 'z = '.$z.', c = '. $c.'<BR>';
    // echo 'z = '.$z.', c = '. $$z;
    
    $a = 2;
    $c = 3;
    $z = 10;
    // echo 'a = '.$a.' c = '.$c.' z = '.$z.'<BR>';
    list($a, $c, $z) = F1($a, $c, $z);
    // echo 'a = '.$a.' c = '.$c.' z = '.$z.'<BR>';

    // function F1($x, $y, $g){ //$x = 2, $y = 3, $g = 10
    //     $x++;
    //     $y--;
    //     $g = $x + $y;
    //     return array($x, $y, $g);
    // }

    $a = 2;
    $c = 3;
    $z = 10;
    echo 'a = '.$a.' c = '.$c.' z = '.$z.'<BR>';
    // list($a, $c, $z) = F1($a, $c, $z);
    F1($a, $c, $z);
    echo 'a = '.$a.' c = '.$c.' z = '.$z.'<BR>';

    function F1(&$x, &$y, &$g){
        $x++;
        $y--;
        $g = $x + $y;
        // return array($x, $y, $g);
    }

    $func = 'sin';
    $y = 30;
    $x = $y/180 * pi();
    $z = $func($x);
    // echo $z;


    function ex_val($f, $x){
        $z = $f($x) + 1;
        return $z;
    }

    echo ex_val($func, $x);
?>