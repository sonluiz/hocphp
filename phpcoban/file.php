<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/1/2019
 * Time: 12:01 PM
 */
//ddoc file
$file = @fopen('son.txt','r');
//if (!$file){
//    echo "khong doc duoc file";
//}
//else{
//    echo "doc file thanh cong";
//}

//in ra file doc duoc
if (!$file){
    echo "khong tim thaay file";
}
else{
    while(!feof($file)){ //xem file da o vi tri cuoi cung chua, neu chua o vi tri cuoi cung se in ra tung ki tu cua file
//        echo fgetc($file); // doc tung ki tu trong file
        echo fgets($file) . "<br>";
    }
}