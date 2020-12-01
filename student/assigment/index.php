<?php
class dispay_name{
 private $name;
 private $id;
function show_message($n,$i){
    $this->name=$n;
     $this->id=$i;
   echo "your name is :".$this->name."<br>";
   echo "your id is:".$this->id."<br>"; 
}

}

echo "this is for test<br>";
$a=789;
$b="hello world";
$c=67.2;
$boo=true;
echo var_dump($a)."<br>";
echo var_dump($b)."<br>";
echo var_dump($c)."<br>";
echo gettype($b)."<br>";
echo var_dump($boo);
$obj=new dispay_name;
$obj->show_message("Girmay Addisu","Wour/0660/11");
echo "<h2>this is about switch in php</h2>";
 $opt=5;
 switch($opt){
     case 1:
        echo "Today is monday";
        break;
     case 2:
        echo "today is tuesday";
        break;
     case 3:
            echo "today is wednesday";
            break;
     case 4:
                echo "today is thursday";
                break;
     case 5:
            echo "today is friday";
            break;
     case 6:
            echo "today is saturday";
            break;
     case 7:
                        echo "today is sunday";
                        break;
      default:
                        echo "It is not  date";
 }
     echo "<h3> this is also about ternary operator</h3>";
     $age=5;
     echo ($age>18)?"adult person found":"young person found";
     echo "<h3> Array</h3>";
     $colors=array("green","yellow","blue","red");
     foreach($colors as $value){
         echo $value." ";
     }
     echo "<br>";
     $student=array("girmay"=>"software","Getahun"=>"it","mulat"=>"Electrical");

     foreach($student as $value=>$key){
         echo $value." :".$key."<br>";
     }
     if(isset($_POST['login'])){
         echo "Hi ".$_POST['username'];
     }
     $today=date("d/m/y");
     echo $today;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
     <label for="name">Username</label><br>
     <input type="text" name="username">
     <br> <input type="submit" value="submit" name="login">

</form>
    
</body>
</html>