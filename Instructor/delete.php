
<?php       
include("../database.php");
if(isset($_POST["delete"])){
    $email=$_POST['email'];
    $query="DELETE FROM feedback WHERE email='$email' ";
    $resulte=mysqli_query($conn,$query);
    if(!$resulte){
        die("Data coud not Deleted");
    }
    else{
        echo"Data Sucessfully Deleted";
    }
}
?>
 <form action="" method="post" name="form" >
     <font size="5px">Email<input type="email" name="email" required></font>
      <input type="submit" name="delete" value="Delete">
        </form>