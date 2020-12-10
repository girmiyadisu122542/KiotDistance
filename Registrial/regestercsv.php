<?php
include('../database.php');

session_start();
   
  if(isset($_SESSION["registrar"])){
     $uname= $_SESSION["registrar"];
  }
  else{
    header("Location: ../login.php");  
  }

 $ok = '';
    $error = '';
if (isset($_POST['Submit'])) {
   
    $Department_name = $_POST['departmentname'];
    if (isset($_FILES['file'])) {
        $file = $_FILES['file']['name'];
        $filetype = $_FILES['file']['tmp_name'];
        $folder = "student/" . $_FILES['file']['name'];
        move_uploaded_file($filetype, $folder);
    }

    require 'PHPExcel/IOFactory.php';

    $exceldata = array();
    try {
        $objPHPExcel = PHPExcel_IOFactory::load($folder);
    } catch (Exception $e) {
        die('Error loading file "' . pathinfo($folder, PATHINFO_BASENAME) . '": ' . $e->getMessage());
    }
    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


    for ($i = 2; $i <= $arrayCount; $i++) {
        $studentid = strtolower(trim($allDataInSheet[$i]["A"]));
        $firstname = strtolower(trim($allDataInSheet[$i]["B"]));
        $lastname = strtolower(trim($allDataInSheet[$i]["C"]));
        $phonenumber = strtolower(trim($allDataInSheet[$i]["D"]));
        $email = strtolower(trim($allDataInSheet[$i]["E"]));
        //$department = strtolower(trim($allDataInSheet[$i]["F"]));
        $year = trim($allDataInSheet[$i]["F"]);
        $clasyear = trim($allDataInSheet[$i]["G"]);
        $term = strtolower(trim($allDataInSheet[$i]["H"]));
        $nationality = trim($allDataInSheet[$i]["I"]);
        $sex = trim($allDataInSheet[$i]["J"]);

        $select = mysqli_query($conn,"select * from student_registration where Student_Id='$studentid'");
        $row = mysqli_fetch_assoc($select);
        $existName = $row['Student_Id'];

        if ($existName == $studentid) {
            $error = 'The studentid is duplicate Slect other student files';
        } else if (!preg_match("/^[a-zA-Z'-]+$/", $firstname)) {
            $error = "invalid first name";
        } else if (!preg_match("/^[a-zA-Z'-]+$/", $lastname)) {
            $error = "invalid last name";
        } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
            $error = "invalid email Address";
        } else if ($existName == "" && (preg_match("/^[a-zA-Z'-]+$/", $firstname) === 1) && (preg_match("/^[a-zA-Z'-]+$/", $lastname) === 1)) {

            $sqlregister = mysqli_query($conn,"Insert into student_registration(Student_Id, FirstName, LastName, phone_Number, Email, Department, Year, classyear, Semister, Nationality, SEX)"
                    . "VALUES('$studentid','$firstname','$lastname','$phonenumber','$email','$Department_name','$year','$clasyear','$term','$nationality','$sex')");

            if ($sqlregister) {
                $ok = "The student is Successfully register";
            } else {
                echo mysqli_error($conn);
            }
        }
    }
  
}
?>
<html>
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/dropdown.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
            function fun() {
            
            if (document.form.departmentname.value == "Select one") {
            document.getElementById('dep').innerHTML = '<font color="red"> Pleas Select Department</font>';

            document.form.departmentname.focus();
            return false;
            }
            return true;
            }
             </script>
    </head>
    <body>
        <nav class="navbar navbar-defualt navbar-fixed-top">
          <img src="../image/reg.PNG" alt=""width="100%" height="70px"/>
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <a href="registral.php"> <button type="button" class="btn btn-warning">Home</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="assigndepartmenhead.php"><button type="button" class="btn btn-warning">assigndepartmenthead</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="updatestudentinfo.php"> <button type="button" class="btn btn-warning">updatestudentinfo</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="withdrawapprove.php"><button type="button" class="btn btn-warning">withdrawapprove</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="courseregister.php"><button type="button" class="btn btn-warning">courseregister</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="regestercsv.php"><button type="button" class="btn btn-warning">Uploade Student list</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="changepassword.php"> <button type="button" class="btn btn-warning">Change passowrd</button></a>
                        </div>
                        <div class="btn-group">
                           <a href="searchstudentinfo.php"> <button type="button" class="btn btn-warning">search</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="../logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
                    </ul>
                </div>

            </div>
        </nav>     
        <div style="padding:50px;margin-top:100px;background-color:background;height:1200px;">   
            <div class="row">
                <div class="col-sm-3 left">
                    <nav class="navbar navbar-defualt">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                  <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                                <li><a href="http//:www.icon_facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                   </ul> </div>
                    </nav>

                </div>

                <div class="col-sm-9 body"><div class="text-right">
                                                                <a class="btn btn-default" href="registral.php">Back </a>
                                                            </div>
                    <form action="" method="post"  enctype="multipart/form-data" name="form" onSubmit="return fun();">
        <div class="form-group"><br><br>
            <label class="control-label col-sm-2" for="">Department:</label>
            <div class="col-sm-4">

                <select class="form-control" name="departmentname">
                     <option value="Select one">Select one</option> 
                    <?php
                    include '../database.php';
                    $query = mysqli_query($conn,"select * from department");
                    while ($row1 = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $row1['DEPARTMENT_NAME']; ?>"><?php echo $row1['DEPARTMENT_NAME']; ?></option><?php
                }
                    ?>


                </select></div><div class="col-sm-4"><p id="dep"></p></div><br>
            
        </div><br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Select Student List:</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" name="file">
            </div>
        </div>

   
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="Submit" onclick="return fun();">Register</button>
        </div>
    </div>
</form>
                    <?php
                    if($ok == "The student is Successfully register"){
                        echo $ok;
                    }
                    if( $error == 'The studentid is duplicate Slect other student files'){
                        echo $error;
                    }
                    ?>
                </div></div></div>
       <footer class="container-fluid footer">
                            <p>Copy Right Reserved by Girmay Addisu</p>
                        </footer>
        </body>
</html>

