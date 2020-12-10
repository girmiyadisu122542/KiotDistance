
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
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>        <script type="text/javascript">
            function fun() {
                var letters = /^[A-Za-z]/;
                var numbers = /^[0-9]/;
                if (document.form.instructor.value == "abcd") {
                    document.getElementById("se").innerHTML ='<font color ="red">plase Select instructor</font>';
                    document.getElementById("ct").innerHTML ='';
                    document.form.instructor.focus();
                    return false;
                    } else if (document.form.coursename.value == "") {
                    document.getElementById("ct").innerHTML ='<font color ="red"> enter Corse name</font>';
                     document.getElementById("se").innerHTML ='';
                    document.form.coursename.focus();
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

                                    <div class="col-sm-9 body"><div class="text-right">
                                            <a class="btn btn-default" href="departmenthead.php">Back </a>
                                                            </div>
                                        <form class="form-horizontal" role="form" method="post"action="">

                                            <?php
                                            include '../database.php';
                                            $query = mysqli_query($conn,"select * from departmenthead where departmenthead_Id='$dep_id'");
                                            $sql = mysqli_fetch_array($query);
                                            $Departmentid = $sql['department_id'];
                                            $select = mysqli_query($conn,"select * from instractor where department_id='$Departmentid'");

                                            echo'<div class="form-group">';
                                            echo'<label class="control-label col-sm-2"  for="sel1">Instructor Name:</label>';
                                            echo'<div class="col-sm-4">
                                    
                                    <select class="form-control" name="instructor">
                                    <option value="abcd">Select one</option>';
                                            

                                            while ($row = mysqli_fetch_array($select)) {
                                                $instr = $row['INSTROCTER_ID'];
                                                $instrname = $row['FIRST_NAME'];
                                                ?>
                                                <option value="<?php echo $instr; ?>"><?php echo $instrname; ?></option>

                                                <?php
                                            }


                                            echo'</select><span id="se"></span></div></div>';
                                            ?>

                                            <?php
                                            include '../database.php';
                                            $selectd = mysqli_query($conn,"select * from department where DEPARTEMENT_ID='$Departmentid'");
                                            $rowd = mysqli_fetch_array($selectd);
                                            $Department_name = $rowd['DEPARTMENT_NAME'];
                                            $select1 = mysqli_query($conn,"select * from course where DEPARTEMENT='$Department_name'");
                                            ?>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2"  for="sel1">Course Name:</label>
                                                <div class="col-sm-4">

                                                    <select class="form-control" name="coursename">
                                                        <option value="abcd">Select one</option>
                                                        <?php
                                                        while ($row1 = mysqli_fetch_array($select1)) {
                                                            ?>
                                                            <option value="<?php echo $row1['COURSE_CODE']; ?>"><?php echo $row1['TITLE']; ?></option>;

                                                        <?php } ?>


                                                    </select><span id="ct"></span></div></div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default"name="assign" value="assign"onclick="return fun()">Assign</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        include '../database.php';
                                        if (isset($_POST['assign'])) {
                                            $instractor_id = $_POST['instructor'];
                                            $coursecode = $_POST['coursename'];
                                            $queryselect = mysqli_query($conn,"select * from courseinstractor  where COURSE_CODE='$coursecode'");
                                            if (mysqli_num_rows($queryselect) >= 1) {
                                                echo 'the selected course is assign to instructor';
                                            } else  {
                                                $insert = mysqli_query($conn,"insert into courseinstractor values('','$instractor_id','$coursecode')");
                                                if ($insert) {
                                                    echo 'succesfully assign the instrctor';
                                                } else {
                                                    echo mysqli_error();
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                 </div>
                                <footer class="container-fluid footer">
                                    <p>Copy Right Reserved by Girmay Addisu</p>
                                </footer>
                                </body>
                                </html>










