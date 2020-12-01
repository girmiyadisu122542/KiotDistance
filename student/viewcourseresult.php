<?php
session_start();
if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
    $student_id = $_SESSION['studentid'];
    $username = $_SESSION["student"];
} else {
    header("Location: ../login.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-defualt navbar-fixed-top">
            <img src="../image/STU.PNG" alt=""width="100%" height="70px"/>
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <a href="student.php"> <button type="button" class="btn btn-warning">Home</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="Givefeedback.php"><button type="button" class="btn btn-warning">GiveFeedback</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="withdrawalrequestnew.php"><button type="button" class="btn btn-warning">Withdrawal Request</button></a>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                Download <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="downloadassignmentquestion.php">Assignment question</a></li>
                                <li><a href="downloadcoursemat.php">course material</a></li>

                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                View <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="viewcourseresult.php">Registration Sleep</a></li>
                                <li><a href="viewcourseresult.php">Course Result</a></li>

                            </ul>
                        </div>

                        <div class="btn-group">

                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                Upload <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="Uploadassignmentanswer.php">Assignment answer</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <li><a href="updateaccount.php"><button type="button" class="btn btn-warning">Change Password</button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-warning">Logout</button></a></li>       </
                            </ul>
                        </div>

                    </div>
                    </nav>     
                    <div style="padding:50px;margin-top:100px;background-color:#1abc9c;height:1200px;">   
                        <div class="row">
                            <div class="col-sm-3 left">
                                <nav class="navbar navbar-defualt">
                                    <div class="container-fluid">
                                        <ul class="nav navbar-nav">
                                            <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                                            <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                            <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                            <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                            <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                        </ul> </div>
                                </nav>
                            </div>

                            <div class="col-sm-9 body"><div class="text-right">
                                    <a class="btn btn-default" href="student.php">Back </a>
                                </div>
                                <form class="form-horizontal" name="form"action=""method="post" enctype="multipart/form-data">

                                    <div class="form-group" >
                                        <label for="sel1" class="control-label col-sm-2">Course_Code</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="coursecode">
                                                <option value="default">Select</option>


                                                <?php
                                                include '../database.php';
                                                $select = mysqli_query($conn,"select * from student where Student_Id='$student_id'");
                                                $row = mysqli_fetch_array($select);
                                                $Department = $row['Department'];
                                                $Year = $row['Classyear'];
                                                $term = $row['Term'];

                                                $query = mysqli_query($conn,"select * from course where DEPARTEMENT='$Department' AND YEAR ='$Year' AND SEMISTER='$term'");
                                                while ($row1 = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <option value="<?php echo $row1['COURSE_CODE']; ?>"><?php echo $row1['COURSE_CODE']; ?></option>
                                                    <?php
                                                }
                                                ?>
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
                                    $coursecode = $_POST['coursecode'];
                                    $result_view = mysqli_query($conn,"SELECT  * FROM courseresult WHERE STUDENT_ID='$student_id' AND COURSE_CODE='$coursecode'");
                                    if (mysqli_num_rows($result_view)> 0) {
                                        echo '<table border="1" width="88%" align="center"><tr>';
                                        echo '<th>Id</th><th>Course Code</th><th>Assigment1</th><th>Assigment 2</th><th>Quize</th><th>Test1</th><th>Test2</th><th>Test3</th><th>Final</th><th>Total</th><th>grade</th><th></tr>';
                                        while ($resulte_row = mysqli_fetch_assoc($result_view)) {
                                            if ($student_id = $resulte_row['STUDENT_ID']) {
                                                echo '<tr><td>' . $resulte_row['STUDENT_ID'] . '</td><td>' . $resulte_row['COURSE_CODE'] . '</td><td>' . $resulte_row['ASSIGMENT1'] . '</td><td>' . $resulte_row['ASSIGMENT2'] . '</td><td>' . $resulte_row['QUIZZ'] . '</td><td>' . $resulte_row['TEST1'] . '</td><td>' . $resulte_row['TEST2'] . '</td><td>' . $resulte_row['TEST3'] . '</td><td>' . $resulte_row['Final'] . '</td><td>' . $resulte_row['TOTAL'] . '</td><td>' . $resulte_row['grade'] . ' </tr>';
                                            }
                                        }
                                        echo '</table>';
                                    } else {
                                        echo"there is no Result this student." . mysqli_error($conn);
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

