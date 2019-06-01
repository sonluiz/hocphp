<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/1/2019
 * Time: 3:21 PM
 */
//doc file bang forech chuyen moi dong cua file ve mot phan tu cua mang
$file = @fopen("son.txt", "r");
$file2 = @file("son.txt"); //chuyen file vua doc vao file 2
if (!$file){
    echo "khong ton tai file nay";
}
else{
    foreach ($file2 as $giatri){
        echo $giatri . "<br>";
    }
}