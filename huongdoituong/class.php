<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
class PhepToan{
    private $a;
    protected $b;
    public $c =10;
    public $d =20;
    //set gia tri cho a
    public function seta($a){
        $this ->a = $a;
    }
//set gia trị cho b
    public function setb($b){
        $this ->b = $b;
    }
 //get lay ra gia tri a
    public function geta(){
        return $this ->a;
    }
//get lay gia tri b
    public function getb(){
        return $this ->b;
    }


    public function tinhtong($c, $d){
        return $c + $d;
    }
}
$bien = new PhepToan();
echo "phép tinh tong la: " . $bien->c ." + " . $bien ->d ." = " .$bien ->tinhtong($bien ->c, $bien ->d);

//set và get gia tri cho bien private va protected
echo"<br>";
$bien ->seta(40);
$bien -> setb(30);
echo "gia trị cua a vua set vao la: " .$bien ->geta() . "   gia trị b vua set la: " .$bien ->getb();
?>
</body>
</html>