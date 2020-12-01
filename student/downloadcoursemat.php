<?php
session_start();

if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
    $student_id = $_SESSION['studentid'];
    $username = $_SESSION["student"];
} else {
    header("Location: ../login.php");
}
?>
<?php
include '../database.php';
$select = mysqli_query($conn,$conn,"select * from student where Student_Id = '$student_id'");
$row = mysqli_fetch_array($select);
$year = $row['Year'];
$term = $row['Term'];
$Department = $row['Department'];
?>
<html>
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        function fun() {
            var numbers = /^[0-9]/;
            var letters = /^[A-Za-z]+$/;
            if (document.form.coursename.value == "default") {
                document.getElementById('coid').innerHTML = '<font color="red"> Pleas Select Cource Code</font>';
                document.form.coursename.focus();
                return false;
            }
            return true;
        }
    </script>
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
                                            <a class="btn btn-default" href="student.php">Back </a>
                                        </div>
                                        <form class="form-horizontal" role="form"action=""method="post" enctype="multipart/form-data">

    <div class="form-group">
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

            </select></div></div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"name="select">select</button>
                    <button type="Cancel" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </form>
        <?php
        include '../database.php';
        if (isset($_POST['select'])) {
            $coursecode = $_POST['coursecode'];
            if (empty($coursecode)) {
                echo 'please select the course code';
            } else {
                $select2 = mysqli_query($conn,"select * from coursematerial where COURSE_CODE='$coursecode'");
                ?>


                <table class = "table table-bordered table-hover table-striped">
                    <tr>
                        <th>Course Code</th> <th>Course Material Type</th>
                        <th>File name</th> <th>Action</th>

                        <tr/><?php
                        while ($row1 = mysqli_fetch_array($select2)) {
                            ?>
                            <tr><td><?php echo $row1['COURSE_CODE']; ?></td>
                                <td><?php echo $row1['File_type']; ?></td>
                                <td><?php echo $row1['Filename']; ?></td>
                                <?php
                                echo "<td align=center><a title='Click here to download in file.' 
                                href='downloadcs.php?id={$row1['Filename']}'><i class='fa fa-2x fa-download'></i> Download</a>";
                                echo"</td>";
                            }
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <footer class="container-fluid footer">
        <p>Copy Right Reserved by Group One</p>
    </footer>

</body>
</html>



