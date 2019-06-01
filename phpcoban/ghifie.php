<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/1/2019
 * Time: 3:49 PM
 */
$file = @fopen("son1.txt","w");
if (!$file){
    echo "file khong ton tai";
}
else{
    $data = "dong nay da duoc ghi them vao file";
    fwrite($file,$data);
}