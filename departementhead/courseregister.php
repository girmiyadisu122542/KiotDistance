<?php
session_start();

if (isset($_SESSION["departmenthead"]) && ($_SESSION['departmentheadid'])) {
    $dep_id = $_SESSION['departmentheadid'];
    $username = $_SESSION['departmenthead'];
     include '../database.php';
} else {
    header("Location: ../login.php");
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
            var numbers = /^[0-9]/;
            var letters = /^[A-Za-z]+$/;
            if (document.form.Student_id.value == "") {
            document.getElementById('sid').innerHTML = '<font color="red"> Please enter Student Id</font>';
            document.form.Student_id.focus();
            return false;
            } else if (!letter.test(document.form.firstname.value)) {
            document.getElementById('Student_id').innerHTML = '<font color="red">please fill the sd only letter</font>';
            document.getElementById("Coursecode").innerHTML ='';
            document.form.Student_id.focus();
            return false;
            }
            return true;
            }
        </script>
    </head>
    <body>
        <nav class="navbar navbar-defualt navbar-fixed-top">
            <div class="container-fluid">
                <img src="../image/dep.PNG" alt=""width="100%" height="70px"/>
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <li><a href="departmenthead.php"><button type="button" class="btn btn-primary"> <div id="button">Home</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="courseregister.php"><button type="button" class="btn btn-primary"> <div id="button">Course register</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="assigninstructor.php"><button type="button" class="btn btn-primary"> <div id="button">AssignInstructor</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="viewfeedback.php"><button type="button" class="btn btn-primary"> <div id="button">Viewfeedback<span class="badge badge-red"><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS TOTAL FROM feedback WHERE DEPARTMENT ='$dep_id'"))['TOTAL'];?></span></div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="searchestudentinfo.php"><button type="button" class="btn btn-primary"> <div id="button">Search</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="withdrawapprove.php"><button type="button" class="btn btn-primary">WithdrawApprove</button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="postnotice.php"><button type="button" class="btn btn-primary">Post Notice</button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="postregistrationsleep.php"><button type="button" class="btn btn-primary">Post Registration Sleep</button></a></li>
                        </div>

                        <div class="btn-group">
                            <a href="updateaccount.php"> <button type="button" class="btn btn-primary">Change password</button></a>
                        </div>
                        <div class="btn-group">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-primary">Logout</button></a></li>       </div>
                </ul>
                <ul class="nav navbar-nav navbar-right">

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
                           <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                            <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                            <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                            <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                            <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                        </ul> </div>
                </nav>
            </div>

            <div class="col-sm-9 body">
                <fieldset><legend> Course Registration Form for Student </legend>
                    <form class="form-horizontal" name="form"action=""method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Student_id:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="Student_id" placeholder="Enter Student_id"><span id="sid"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Course _Code:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="Coursecode" placeholder="Enter Course _Code">
                            </div>
                        </div>
                        <p align="center">
                            <button type="submit" class="btn btn-success"name="Course" value="Course"onclick="return fun()">Register</button>
                            <button type="reset" class="btn btn-success"name=>cancel</button></p>
                    </form></fieldset>
                <?php
                include("../database.php");
                if (isset($_POST['Course'])) {
                    $studentid = $_POST['Student_id'];
                    $coursecode = $_POST['Coursecode'];

                    $query = mysqli_query($conn,"INSERT INTO student_course VALUES('','$studentid','$coursecode')");
                    if ($query) {
                        echo 'Successfuly Course Register';
                    } else {
                        echo mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>
        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Girmay Addisu</p>
        </footer>

</body>
</html>
