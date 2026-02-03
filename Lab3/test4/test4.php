<?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    foreach($arr as $file){
        $text = file_get_contents($file);
        file_put_contents($file, $text.'!');
    }