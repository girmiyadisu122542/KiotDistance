<?php
session_start();
include '../database.php';
if (isset($_SESSION["ADMIN"]) && $_SESSION['Dep_ID']) {
    $Dep_ID = $_SESSION['Dep_ID'];
    $username = $_SESSION["Dep"];
    
}
$message = "";
if (isset($_POST["change_password"])) {
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $re_password = $_POST["re_password"];
    $username = $_SESSION["departmenthead"];
    if ($new_password == $re_password) {
        $check_query = mysqli_query($conn,"SELECT * FROM account WHERE UserName='$username' AND Password='$old_password'");
        if (mysqli_num_rows($check_query) > 0) {
            mysqli_query($conn,"UPDATE account SET Password='$new_password' WHERE UserName='$username'");
            $message = "success";
        } else {
            $message = "old_password_not_match";
        }
    } else {
        $message = "new_password_not_match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/corse.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/dropdown.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
                <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/dropdown.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>        
        <script type="text/javascript">
            function fun() {
                var letters = /^[A-Za-z]/;
                var numbers = /^[0-9]/;
                var fname = document.form.old_password.value;
                var lname = document.form.new_password.value;
                var rpasword = document.form.re_password.value
                if (fname == "" || fname == 'null') {
                    document.getElementById('op').innerHTML = '<font color="red"> Please fill the old_ passworde</font>';
                    document.getElementById('np').innerHTML = '';
                    document.getElementById('cp').innerHTML = '';
                    document.form.old_password.focus();
                    return false;
                }

                if (lname == '' || lname == 'null') {
                    document.getElementById("np").innerHTML = '<font color="red"> Please enter new_password</font>';
                    document.getElementById('op').innerHTML = '';
                    document.getElementById('cp').innerHTML = '';

                    document.form.new_password.focus();
                    return false;
                } else if (document.form.new_password.value != document.form.re_password.value) {
                    document.getElementById("cp").innerHTML = '<font color="red">Please enter Retype New Password</font>';
                     document.getElementById("np").innerHTML = '';
                       document.getElementById('op').innerHTML = '';
                    document.form.re_password.focus();
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
                        </div>                        <div class="btn-group">
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
                <div class="row">
                    <div class="col-sm-6">
                        <br>
                       
                     <form class="form-horizontal" name="form" action="" method="post">
                        <label>Old Password</label>
                        <input type="password" name="old_password" class="form-control"><span id="op"></span><br>
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-control"><span id="np"></span><br>
                        <label>Retype New Password</label>
                        <input type="password" name="re_password" class="form-control"><span id="cp"></span><br/>
                        <input type="submit" name="change_password" value="Change" onclick="return fun()"class="btn btn-primary"/>
                    </form>
                    </div>
                    </div>
                <?php
                    if ($message != "") {
                        $print = "";
                        if ($message == "success") {
                            $print = "Passowrd Changed Successfully";
                        } else if ($message == "old_password_not_match") {
                            $print = "Old password is not correct. Please try later";
                        } else if ($message == "new_password_not_match") {
                            $print = "New password is does not match . Please try again";
                        }
                        if ($print != "") {
                            ?>
                            <div class="alert alert-info">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $print ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <?php
//                    if (isset($_POST["change_password"])) {
//                        $old_password = $_POST["old_password"];
//                        $new_password = $_POST["new_password"];
//                        $re_password = $_POST["re_password"];
//                        $uname = $_SESSION["UserName"];
////                        echo $uname;
//                        if ($new_password == $re_password) {
//                            $check_query = mysqli_query("SELECT * FROM account WHERE UserName='$uname' AND Password='$old_password' ");
//                            if (mysqli_num_rows($check_query) > 0) {
//                                mysqli_query("UPDATE account SET Password='$new_password' WHERE UserName='$uname'");
//                                echo mysqli_error();
//                                $message = "success";
//                            } else {
//                                $message = "old_password_not_match";
//                            }
//                        } else {
//                            $message = "new_password_not_match";
//                        }
//                    }
                    ?>
                <div class="text-right">
            <a class="btn btn-default" href="departmenthead.php">Back </a>
             </div>
            </div>
        </div>
        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group five</p>
        </footer>
</body>
</html>








