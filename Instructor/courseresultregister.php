<?php
session_start();
include '../database.php';
if (isset($_SESSION["instructor"]) && $_SESSION['instructorid']) {
    $instractor_id = $_SESSION['instructorid'];
    $ins_id = $_SESSION['instructorid'];
} else {
    header("Location: ../login.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
<!--        <script src="../js/corse.js" type="text/javascript"></script>-->
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/dropdown.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-defualt navbar-fixed-top">
            <div class="container-fluid">
                <img src="../image/inst.PNG" alt=""width="100%" height="100px">
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <li><a href="instrctor.php"><button type="button" class="btn btn-primary"> <div id="button">Home</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="courseresultregister.php"><button type="button" class="btn btn-primary"> <div id="button">Course result register</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="viewfeedback.php"><button type="button" class="btn btn-primary"> <div id="button">Viewfeedback <i class="fa fa-comment-o"></i><span class="badge badge-red"><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS TOTAL FROM feedback where INSTRCTOR_NAME ='$ins_id'"))['TOTAL']; ?></span></div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="searchstudentinfo.php"><button type="button" class="btn btn-primary">Search</button></a></li>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Download <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="downloadassigmentanswer.php">Assignment answer</a></li>

                            </ul>
                        </div>

                        <div class="btn-group">

                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Upload <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="Uploadassignmentquestion.php">Assignment question</a></li>
                                <li><a href="uploadcoursematerial.php">course material</a></li>

                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Update <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="updatecourseresult.php">CourseResult</a></li>

                            </ul>
                        </div>
                        <div class="btn-group">
                            <a href="updateaccount.php"> <button type="button" class="btn btn-primary">Change password</button></a>
                        </div>
                        <div class="btn-group">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-primary">Logout</button></a></li>       </div>
                </ul>
            </div>
        </nav> 
        <div style="padding:50px;margin-top:100px;background-color:background;height:1200px;">   
            <div class="row">
                <div class="col-sm-3 left">
                    <nav class="navbar navbar-defualt">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li><a href="http//:www.distance.asu.edu.et"><button type="button" class="btn btn-info">distance</button><img src="../image/distance.PNG" width="100"height="50"></a></li></br>
                                <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                            </ul> </div>
                    </nav>


                </div>
                <div class="col-sm-9 body">
                    <fieldset><legend> Course result registration Form </legend><div class="text-right">
                            <a class="btn btn-default" href="instrctor.php">Back </a>
                        </div>
                        <form class="form-horizontal" role="form" name="fom" action="" method="post">
                            <DIV class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Student id:</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="Studentid">
                                        <option value="default">Select</option>
                                        <?php
                                        include '../database.php';
                                        $query = mysqli_query($conn,"select * from courseinstractor where INSTRACTOR_ID='$instractor_id'");
                                        while ($row1 = mysqli_fetch_array($query)) {
                                            $coursecode = $row1['COURSE_CODE'];

                                            $select = mysqli_query($conn,"select * from course where COURSE_CODE='$coursecode'");
                                            $row3 = mysqli_fetch_array($select);
                                            $departiment = $row3['DEPARTEMENT'];
                                            $year = $row3['YEAR'];
                                            $semister = $row3['Semister'];
                                            $select2 = mysqli_query($conn,"select DISTINCT Student_Id from student where Department='$departiment' AND Classyear='$year' AND Term='$semister'")
                                            ?>

                                            <?PHP
                                            while ($row = mysqli_fetch_array($select2)) {
                                                ?>
                                                <option value="<?php echo $row['Student_Id']; ?>"><?php echo $row['Student_Id']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>



                                    </select><span id="sid"></span>
                                </div></div>
                            <DIV class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Course_Code:</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="coursecode">
                                        <option value="default">Select</option>
                                        <?php
                                        include '../database.php';
                                        $query1 = mysqli_query($conn,"select * from courseinstractor where INSTRACTOR_ID='$instractor_id'");
                                        while ($row1 = mysqli_fetch_array($query1)) {
                                            ?>
                                            <option value="<?php echo $row1['COURSE_CODE']; ?>"><?php echo $row1['COURSE_CODE']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select><span id="coid"></span></div></div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Assigment1:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Assigment1" placeholder="Enter your Assigment1"><span id="ass1"></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Assigment2:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Assigment2" placeholder="Enter your Assigment2"><span id="ass2"></span><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Quizz:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Quizz" placeholder="Enter your Quizz"><span id="quizz"></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Test1:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Test1" placeholder="Enter your Test1"><span id="test1"></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Test2:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Test2" placeholder="Enter your Test2"><span id="test2"></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Test3:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Test3" placeholder="Enter your Test3"><span id="test3"></span><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Final:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="final" placeholder="Enter final Exam Result"><span id="final"></span><br>
                                </div>
                            </div>
                            <p align="center">
                                <button type="submit" class="btn btn-success"name="course" onclick="return corsevalidation()" value="Course">Register</button>
                                <button type="reset" class="btn btn-success">cancel</button></p>
                        </form></fieldset>
                      <table class="table table-bordered">
                            <thead>
                                <tr><th>Course_code</th>
                                    <th>Student_Id</th>
                                    <th>Assignment1</th>
                                    <th>Assignment2</th>
                                   <th>Quizz</th>
                                    <th>Test1</th>
                                    <th>Test2</th>
                                    <th>Test3</th>
                                    <th>Final</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                    include '../database.php';
                    $studentlist = mysqli_query($conn,"select * from courseinstractor where INSTRACTOR_ID='$instractor_id'");
                    while ($row1 = mysqli_fetch_array($studentlist)) {
                    $coursecode = $row1['COURSE_CODE'];
                    $selectquery = mysqli_query($conn,"select * from courseresult where COURSE_CODE='$coursecode'");
                    $row2 = mysqli_fetch_array($selectquery);
                    echo '<tr>';
                    echo '<td>'.$coursecode.'</td><td>'.$row2['STUDENT_ID'].'</td><td>'.$row2['ASSIGMENT1'].'</td><td>'.$row2['ASSIGMENT2'].'</td><td>'.$row2['QUIZZ'].'</td><td>'.$row2['TEST1'].'</td><td>'.$row2['TEST2'].'</td><td>'.$row2['TEST3'].'</td><td>'.$row2['Final'].'</td>';
                    echo '</tr>';
                        
                    }
                    ?>
                            </tbody></table>
                    <?php
                    include("../database.php");
                    if (isset($_POST['course'])) {
                        $id = $_POST['Studentid'];

                        $code = $_POST['coursecode'];

                        $Assigment1 = $_POST['Assigment1'];
                        $Assigment2 = $_POST['Assigment2'];
                        $Quizz = $_POST['Quizz'];
                        $Test1 = $_POST['Test1'];
                        $Test2 = $_POST['Test2'];
                        $Test3 = $_POST['Test3'];
                        $final = $_POST['final'];
                        if (empty($Assigment1) && empty($Assigment2) && empty($Quizz) && empty($Test1) && empty($Test2) && empty($Test3) && empty($final)) {
                            echo 'PLEASE FILL THE STUDENT RESULTS';
                        } else {

                            if (empty($Assigment2) && empty($Quizz) && empty($Test1) && empty($Test2) && empty($Test3) && empty($final)) {
                                $query = mysqli_query($conn,"INSERT INTO courseresult VALUES('','$id', '$code','$Assigment1','Null','Null','Null','Null','Null','Null','Null','Null')");
                            } else if (empty($Assigment1) && empty($Quizz) && empty($Test1) && empty($Test2) && empty($Test3) && empty($final)) {
                                $update = mysqli_query($conn,"update courseresult set ASSIGMENT2 ='$Assigment2' where STUDENT_ID = '$id' AND COURSE_CODE ='$code'");
                                if ($update) {
                                    echo"SUCCESSFULLY REGISTER RESULT";
                                }
                            } else if (empty($Assigment1) && empty($Assigment2) && empty($Test1) && empty($Test2) && empty($Test3) && empty($final)) {
                                $update1 = mysqli_query("UPDATE courseresult SET QUIZZ ='$Quizz' where STUDENT_ID = '$id' AND COURSE_CODE ='$code'");
                                if ($update1) {
                                    echo"SUCCESSFULLY REGISTER RESULT";
                                }
                            } else if (empty($Assigment2) && empty($Assigment1) && empty($Quizz) && empty($Test2) && empty($Test3) && empty($final)) {
                                $update2 = mysqli_query($conn,"UPDATE courseresult SET TEST1 ='$Test1' where STUDENT_ID = '$id' AND COURSE_CODE ='$code'");
                                if ($update2) {
                                    echo"SUCCESSFULLY REGISTER RESULT";
                                }
                            }if (empty($Assigment2) && empty($Quizz) && empty($Test1) && empty($Assigment1) && empty($Test3) && empty($final)) {
                                $update3 = mysqli_query("UPDATE courseresult SET TEST2 ='$Test2' where STUDENT_ID = '$id' AND COURSE_CODE ='$code'");
                                if ($update3) {
                                    echo"SUCCESSFULLY REGISTER RESULT";
                                }
                            } else if (empty($Assigment2) && empty($Quizz) && empty($Test1) && empty($Test2) && empty($Assigment1) && empty($final)) {
                                $update4 = mysqli_query($conn,"UPDATE courseresult SET TEST3 ='$Test3' where STUDENT_ID = '$id' AND COURSE_CODE ='$code'");
                                if ($update4) {
                                    echo"SUCCESSFULLY REGISTER RESULT";
                                }
                            } else if (empty($Assigment2) && empty($Quizz) && empty($Test1) && empty($Test2) && empty($Test3) && empty($Assigment1)) {
                                $select1 = mysqli_query($conn,"select * from courseresult where STUDENT_ID = '$id' AND COURSE_CODE ='$code'");
                                $row2 = mysqli_fetch_array($select1);
                                $Assigment11 = $row2['ASSIGNMENT1'];
                                $Assigment22 = $row2['ASSIGNMENT2'];
                                $Quizz1 = $row2['QUIZZ'];
                                $Test11 = $row2['TEST1'];
                                $Test22 = $row2['TEST2'];
                                $Test33 = $row2['TEST3'];
                                $final1 = $row2['FINAL'];
                                $Total = $Assigment11 + $Assigment22 + $Quizz1 + $Test11 + $Test22 + $Test33 + $final1;
                                if ($Total <= 100 && $Total >= 90) {
                                    $grade = 'A+';
                                } else if ($Total <= 89 && $Total >= 85) {
                                    $grade = 'A';
                                } else if ($Total <= 84 && $Total >= 80) {
                                    $grade = 'A-';
                                } else if ($Total <= 79 && $Total >= 75) {
                                    $grade = 'B+';
                                } else if ($Total <= 74 && $Total >= 70) {
                                    $grade = 'B';
                                } else if ($Total <= 69 && $Total >= 65) {
                                    $grade = 'B-';
                                } else if ($Total <= 64 && $Total >= 80) {
                                    $grade = 'C+';
                                } else if ($Total <= 59 && $Total >= 50) {
                                    $grade = 'C';
                                } else if ($Total <= 49 && $Total >= 45) {
                                    $grade = 'C-';
                                } else if ($Total <= 44 && $Total >= 40) {
                                    $grade = 'D';
                                } else if ($Total <= 39 && $Total >= 30) {
                                    $grade = 'Fx';
                                } else if ($Total <= 29 && $Total >= 0) {
                                    $grade = 'F';
                                } else {
                                    $grade = '';
                                }
                                $update = mysqli_query($conn,"UPDATE courseresult SET FINAL ='$final', TOTAL='$Total', grade='$grade' where STUDENT_ID = '$id' AND COURSE_CODE ='$code')");
                                if ($update) {
                                    echo"SUCCESSFULLY REGISTER RESULT";
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group One</p>
        </footer>

    </body>
</html>

