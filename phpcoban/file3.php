<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/1/2019
 * Time: 3:36 PM
 */
$file = @fopen("son.txt", "r");
if (!$file){
    echo "file nay khong ton tai";
}
else {
    echo fread($file,filesize("son.txt")) ."<br>";
}