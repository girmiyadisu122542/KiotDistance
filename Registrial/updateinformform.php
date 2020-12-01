<?php
session_start();

if (isset($_SESSION["registrar"])) {
    $uname = $_SESSION["registrar"];
} else {
    header("Location: ../login.php");
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/dropdown.js" type="text/javascript"></script>
    <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        function fun() {
            var letters = /^[A-Za-z]/;
            var numbers = /^[0-9]/;
            if (document.form.firstname.value == "") {
                document.getElementById("firstname").innerHTML = '<font color ="red">please fill the first Name</font>';
                document.getElementById("lastname").innerHTML = '';
                document.form.firstname.focus();
                return false;
            } else if (!letter.test(document.form.firstname.value)) {
                document.getElementById('firstname').innerHTML = '<font color="red">please fill the fn only letter</font>';
                document.getElementById("lastname").innerHTML = '';
                document.form.firstname.focus();
                return false;
            } else if (document.form.sex.value == "sex") {
                document.getElementById('sex').innerHTML = '<font color ="red">please select sex</font>';
                document.getElementById('firstname').innerHTML = '';
                document.getElementById("lastname").innerHTML = '';
                document.form.sex.focus();
                return false;
            } else if (document.form.department.value == "a") {
                document.getElementById('dep').innerHTML = '<font color ="red">please select your department</font>';
                return false;
            }

            return true;
            }  //-->
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
                        </div>                        <div class="btn-group">
                            <a href="changepassword.php"> <button type="button" class="btn btn-warning">update account</button></a>
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
                                    <li><a href="changepassword.php"><button type="button" class="btn btn-info"> update account </button></a></li></br>
                                    <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                                        <li><a href="http//:www.icon_facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></br>
                                            <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                            <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                            <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                        </ul> </div>
                                    </nav>


                                </div>

                                <div class="col-sm-9 body">

                                    <?php
                                    include '../database.php';
                                    if (isset($_GET['studentid'])) {
                                        $student_id = $_GET['studentid'];
                                        $select = mysqli_query($conn,"select * from student_registration where Student_Id='$student_id'");
                                        $row = mysqli_fetch_array($select);
                                        $student_id = $row['Student_Id'];
                                        $firstName = $row['FirstName'];
                                        $lastName = $row['LastName'];
                                        $sex = $row['SEX'];
                                        $email = $row['Email'];
                                        $phonenumber = $row['phone_Number'];
                                        $Nationality = $row['Nationality'];
                                        $Year = $row['Year'];
                                        $Semister = $row['Semister'];
                                        ?>
                                        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="email">Student_Id:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="studentid" value="<?php echo $student_id; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">First_Name:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="firstname" value="<?php echo $firstName; ?>">
                                                </div>
                                            </div><div class="form-group">
                                                <label class="control-label col-sm-2" for="email">Last_Name:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="lastname" value="<?php echo $lastName; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Sex:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="sex" value="<?php echo $sex; ?>">
                                                </div>
                                            </div><div class="form-group">
                                                <label class="control-label col-sm-2" for="email">Email:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Phone_number:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="phonenumber" value="<?php echo $phonenumber; ?>">
                                                </div>
                                            </div><div class="form-group">
                                                <label class="control-label col-sm-2" for="email">Nationality:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="nationality" value="<?php echo $Nationality; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Year:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="year" value="<?php echo $Year; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Semister:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="semister" value="<?php echo $Semister; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Photo:</label>
                                                <div class="col-sm-4">
                                                    <input type="file" class="form-control" name="file" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default" name="update">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    include '../database.php';
                                    if (isset($_POST['update'])) {
                                        $student_id = $_POST['studentid'];
                                        $firstname = $_POST['firstname'];
                                        $lastname = $_POST['lastname'];
                                        $sex = $_POST['sex'];
                                        $email = $_POST['email'];
                                        $phonenumber = $_POST['phonenumber'];
                                        $nationality = $_POST['nationality'];
                                        $year = $_POST['year'];
                                        $Semister = $_POST['semister'];
                                        if (isset($_FILES['file'])) {
                                            $file = $_FILES['file']['name'];
                                            $filetype = $_FILES['file']['tmp_name'];
                                            $folder = "student/" . $_FILES['file']['name'];
                                            move_uploaded_file($filetype, $folder);
                                        }

                                        $update = mysqli_query($conn,"update student_registration set  FirstName='$firstname', LastName ='$lastname' , SEX = '$sex', Email='$email', phone_Number='$phonenumber', Nationality='$nationality', Year='$year', Semister='$Semister', photo='$file' where Student_Id = '$student_id'");
                                        if ($update) {
                                            echo '<script type="text/javascript">alert("Successfully update student information ");window:location=\'updateinformform.php?studentid='.$student_id.'\';</script>';

                                        } else {
                                            echo mysqli_error($conn);
                                        }}

                                        ?>
                                    </div></div>
                                    <footer class="container-fluid footer">
                                        <p>Copy Right Reserved by Group One</p>
                                    </footer>
                                    </html>











