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
                                    <li><a href="changepassword.php"><button type="button" class="btn btn-info"> update account </button></a></li></br>
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
                <form class="form-horizontal" name="form"action=""method="post" enctype="multipart/form-data">

                    <div class="form-group" >
                        <label for="sel1" class="control-label col-sm-2">Department_Name</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="departmentname">
                                <option value="default">Select</option>


                                <?php
                                include '../database.php';
                                $query = mysqli_query($conn,"select * from department");
                                while ($row1 = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $row1['DEPARTMENT_NAME']; ?>"><?php echo $row1['DEPARTMENT_NAME']; ?></option>
                                    <?php
                                }
                                ?>
                            </select><span id="coid"></span><br>
                        </div></div>

                        <div class="form-group" >
                            <label for="sel1" class="control-label col-sm-2">Year</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="year">
                                    <option value="default">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select><span id="coid"></span><br>
                            </div></div>

                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"name="select" >select</button>
                                    <button type="Cancel" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>

                <?php
                include '../database.php';
                if (isset($_POST['select'])) {
                    $Departmentid = $_POST['departmentname'];
                    $year = $_POST['year'];
                    ?>     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student_id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Sex</th>
                                <th>Email</th>
                                <th>Phonenumber</th>
                                <th>Year</th>
                                <th>Semister</th>
                                <th>Profile</th>
                                <th>Update</th>
                            </tr>
                            </thead><?php
                            $select = mysqli_query($conn,"select * from student_registration where Department='$Departmentid' AND classyear = '$year'");
                            if (mysqli_num_rows($select) >= 1) {
                                while ($row = mysqli_fetch_array($select)) {
                                    $student_id = $row['Student_Id'];
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_Id'], '</td><td>' . $row['FirstName'] . '</td><td>' . $row['LastName'] . '</td><td>' . $row['SEX'] . '</td><td>' . $row['Email'] . '</td><td>' . $row['phone_Number'] . '</td><td>' . $row['Year'] . '</td><td>' . $row['Semister'] . '</td>';
                                    ?>
                                    <td><img src="student/<?php echo $row['photo']; ?>" width="30" height="20"></td>
                                    <?php
                                    echo '<td> <a href = updateinformform.php?studentid=' . $student_id . '><i class="fa fa-2x fa-edit"></i></a></td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo 'these is no student for these deartyment';
                            }
                        }
                        ?>
                    </table>



                                        </div></div></div>
                                        <footer class="container-fluid footer">
                                            <p>Copy Right Reserved by Girmay Addisu</p>
                                        </footer>
                                        </html>











