<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/1/2019
 * Time: 11:49 AM
 */
$mang = array('son1' => 'phan tu dau mang','hoten' => 'Nguyen Hong son',
    'ngaysinh' => '01-02-1997', 'quequan' => "quoc oai ha noi" , 'son2' =>'phan tu cuoi mang');

//xoa phan tu dau mang  vaf tra ve ptu do: dung ham array_shift($array)
echo "xoa phan tu dau mang:  ".array_shift($mang);
//theem mot or nhieu phan tu vao dau mang: array_unshift($array, $var, $var...)

echo "<br> them mot or nhieu phan tu vao mang: ";
array_unshift($mang, "vitridau1", "vitrithu2", "vitrithu3");
echo "<pre>";
print_r($mang);
echo"<pre>";