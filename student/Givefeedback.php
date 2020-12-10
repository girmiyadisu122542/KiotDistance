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
<body>  <nav class="navbar navbar-defualt navbar-fixed-top">
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
                            <li><a href="Uploadassignmentanswer.php">Assignment question</a></li>
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
                        <h2> Well come to student page</h2>

                        <p><h1 align="center">If you want to give feedback fill the form</h1></p>

                        <?php
                        include("../database.php");
                        $student_id = $_SESSION['studentid'];

                        $query = mysqli_query($conn,"select * from student where Student_Id='$student_id'");
                        $he = mysqli_fetch_assoc($query);
                        $department = $he['Department'];

                        $dep = mysqli_query($conn,"select * from department where DEPARTMENT_NAME='$department'");
                        $depid = mysqli_fetch_assoc($dep);
                        $id = $depid['DEPARTEMENT_ID'];

                        echo mysqli_error($conn);
                        $head = mysqli_query($conn,"select * from departmenthead where department_id='$id'");
                        $hea = mysqli_fetch_assoc($head);
                        $depheadid = $hea['departmenthead_Id'];
                        $FirstNAME = $hea['FirstName'];
                        $LASTNAME = $hea['LastName'];
                        $INS = mysqli_query($conn,"select * from instractor where department_id='$id'");

                        ?>
                        <form class="form-horizontal" role="form"action=""method="post">
                            <div class="col-sm-4">
                                <select class="form-control" name="givefeed">
                                    <option value="">Select one</option>
                                    <option value="<?php echo $depheadid; ?>"><?php echo $FirstNAME.' '.$LASTNAME.'(head)'; ?></option>
                                    <?php
                                    while ($row1 = mysqli_fetch_assoc($INS)) {
                                       $inid = $row1['INSTROCTER_ID'];
                                       $infname = $row1['FIRST_NAME'];
                                       $inlname = $row1['LAST_NAME'];
                                       echo '<option value="'.$inid.'">'.$infname.' '.$inlname.'</option>';  
                                   }


                                   ?>
                               </select>
                           </div><br><br><br>
                           <table>
                            <tr>
                                Feedback:<br>
                                <textarea name="feedback" cols=40 rows=7 wrap></textarea>><span id="feedback"></span><br>
                            </tr>
                        </table>
                        <p align="center">
                            <button type="submit" class="btn btn-success"name="got">Send</button>
                            <button type="cancel" class="btn btn-success"name=>cancel</button></p>
                        </form>         
                        <?php
                        if (isset($_POST['got'])){
                         $employee = $_POST['givefeed'];             
                         $body = $_POST['feedback']; 
                         $bbbb = mysqli_query($conn,"select * from departmenthead where departmenthead_Id='$employee'");
                         if(mysqli_num_rows($bbbb) > 0){
                            $sid = $_SESSION['studentid'];
                            $departmentid = $_SESSION["department"];
                            $full = mysqli_query($conn,"select * from student_registration where Student_Id='$sid'");
                            $name = mysqli_fetch_assoc($full);
                            $fname = $name['FirstName'];
                            $lname = $name['LastName'];
                            $email = $name['Email'];
                            $query = mysqli_query($conn,"INSERT INTO feedback VALUES('','$fname','$lname','$email','$body','','$employee','','$sid')");
                            if ($query) {
                                echo 'Successfuly Give FeedBack';
                            } else {
                                echo mysqli_error($conn);
                            }
                        } else {
                            $sid = $_SESSION['studentid'];
                            $departmentid = $_SESSION["department"];
                            $full = mysqli_query($conn,"select * from student_registration where Student_Id='$sid'");
                            $name = mysqli_fetch_assoc($full);
                            $fname = $name['FirstName'];
                            $lname = $name['LastName'];
                            $email = $name['Email'];
                            $query = mysqli_query($conn,"INSERT INTO feedback VALUES('','$fname','$lname','$email','$body','$employee','','','$sid')");
                            if ($query) {
                                echo 'Successfuly Give FeedBack';
                            } else {
                                echo mysqli_error($conn);
                            }  
                        }
                    }

                    ?>


<!--    <form class="form-horizontal" role="form"action=""method="post">
        <div class="col-sm-4">
            <select class="form-control" name="givefeed">
                <option value="">Select one</option>
                <option value="department">department head</option>
                <option value="instractor">Instrctor</option>
            </select>
        </div><br><br><br>
        <p align="center">
            <button type="give" class="btn btn-success"name="go">Go</button>
            <button type="cancel" class="btn btn-success"name=>cancel</button></p>
        </form>-->
        <?php
        if (isset($_POST['go'])) {

            $option = $_POST['givefeed'];
            if(empty($option)){
                echo 'please select the one';
            }
            else{
                if ($option == 'department head') {
                    ?>
                    <form class="form-horizontal" role="form"action=""method="post">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Departiment Head:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="dephead" placeholder="Enter your departmenthead name">
                            </div>
                        </div>

                        <table>
                            <tr>
                                <td><lable class="">Feedback:</lable></td>
                                <td><textarea name="fedback" class="form-control" row="12" col="150"></textarea><span id="feedback"></span><br></td>
                            </tr></table>
                            <p align="center">
                                <button type="give" class="btn btn-success"name="go">send</button>
                                <button type="cancel" class="btn btn-success"name=>cancel</button></p>
                            </form>

                            <?php
                        } else {
                            ?>
                            <form class="form-horizontal" role="form"action=""method="post">

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="pwd">InstrctorName:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="instrctor_name" placeholder="Enter your Instrctor Name">
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <td><lable class="">Feedback:</lable></td>
                                        <td><textarea name="fedback" class="form-control" row="12" col="150"></textarea><span id="feedback"></span><br></td>
                                    </tr></table>
                                    <p align="center">
                                        <button type="give" class="btn btn-success"name="feedbackins">send</button>
                                        <button type="cancel" class="btn btn-success"name=>cancel</button></p>
                                    </form>    
                                    <?php
                                }
                            }}
                            ?>

                            <?php

                            if (isset($_POST['feedback'])) {
                                $sid = $_SESSION['studentid'];
                                $departmentid = $_SESSION["department"];
                                $full = mysqli_query($conn,"select * from student_registration where Student_Id='$sid'");
                                $name = mysqli_fetch_assoc($full);
                                $fname = $name['FirstName'];
                                $lname = $name['LastName'];
                                $email = $name['Email'];
                                $feedback = $_POST['fedback'];
                                $dephead = $_POST['dephead'];
                                $query = mysqli_query($conn,"INSERT INTO feedback VALUES('','$fname','$lname','$email','$feedback','','$dephead','')");
                                if ($query) {
                                    echo 'Successfuly Give FeedBack';
                                } else {
                                    echo mysqli_error($conn);
                                }
                            } if(isset($_POST['feedbackins'])) {
                                $sid = $_SESSION['studentid'];
                                $departmentid = $_SESSION["department"];
                                $full = mysqli_query($conn,"select * from student_registration where Student_Id='$sid'");
                                $name = mysqli_fetch_assoc($full);
                                $fname = $name['FirstName'];
                                $lname = $name['LastName'];
                                $email = $name['Email'];
                                $feedback = $_POST['fedback'];
                                $insname = $_POST['instrctor_name'];
                                $query = mysqli_query($conn,"INSERT INTO feedback VALUES('','$fname','$lname','$email','$feedback','$insname','','')");
                                if ($query) {
                                    echo 'Successfuly Give FeedBack';
                                } else {
                                    echo mysqli_error($conn);
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

