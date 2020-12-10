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
include("../database.php");
$message = "";
$message1 = "";
$message2 = '';
if (isset($_POST["change_password"])) {
    echo $username;
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $re_password = $_POST["re_password"];

    //$email = $_SESSION["usename"];
    if ($new_password == $re_password) {
        $check_query = mysqli_query($conn,"SELECT * FROM account WHERE UserName='$username' AND Password='$old_password'");
        if (mysqli_num_rows($check_query) > 0) {
            mysqli_query($conn,"UPDATE account SET Password='$new_password' WHERE UserName='$username'");
            $message = "success";
        } else {
            $message1 = "old_password_not_match";
        }
    } else {
        $message2 = "new_password_not_match";
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
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
                    <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">DISTANCE</button><img src="../image/distance.Png" width="90"height="40"><a>
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
            <h3 class="h3">Change Your Password</h3>
           
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal" name="form" action="" method="post">
                        <label>Old Password</label>
                        <input type="password" name="old_password" class="form-control"><span id="op"></span><br>
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-control"><span id="np"></span><br>
                        <label>Retype New Password</label>
                        <input type="password" name="re_password" class="form-control"><span id="cp"></span><br/>
                        <input type="submit" name="change_password" value="Change" onclick="return fun()"class="btn btn-primary"/>
                    </form>
                    <?php
                    if($message == "success "){
                         echo '<script type="text/javascript">alert("'.$message.'");window:location=\'updateaccount.php\';</script>';
                       
                    }
                    if($message1 == "old_password_not_match"){
                         echo '<script type="text/javascript">alert("'.$message1.'");window:location=\'updateaccount.php\';</script>';
                       
                    }
                    if($message2 == "new_password_not_match"){
                         echo '<script type="text/javascript">alert("'.$message2.'");window:location=\'updateaccount.php\';</script>';
                       
                    }
                   
                    ?>
                </div>
            </div>
        </div>
        </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Girmay Addisu</p>
        </footer>

        </body>
        </html>

