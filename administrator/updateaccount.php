<!DOCTYPE html>
<?php
session_start();
include '../database.php';
if (isset($_SESSION["UserName"])) {
   // $ins_id = $_SESSION['instructorid'];
    $username = $_SESSION["UserName"];

} else {
    header("Location: ../login.php");
}

//if (isset($_SESSION["instructor"]) && $_SESSION['instructorid']) {
//    $instractor_id = $_SESSION['instructorid'];
//    $username = $_SESSION["instructor"];

include("../database.php");
$message = "";
if (isset($_POST["change_password"])) {
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
           <img src="../image/admin.PNG"  width="100%" height="70px">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <a href="Admin.php"> <button type="button" class="btn btn-warning">Home</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="createaccount.php"><button type="button" class="btn btn-warning">Create account</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="updateaccount.php"> <button type="button" class="btn btn-warning">Change Password</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="deactivateusers.php"><button type="button" class="btn btn-warning">Deactivate user account</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="activateusers.php"><button type="button" class="btn btn-warning">Activate user account</button></a>
                        </div>
                         <div class="btn-group">
                            <a href="searchstudentinfo.php"><button type="button" class="btn btn-warning">Search</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="../logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
                            </div>
                    </ul>
                </div>

          
        </nav>     
        <div style="padding:50px;margin-top:100px;background-color:background;height:1200px;">   
            <div class="row">
                <div class="col-sm-3 left">
                    <nav class="navbar navbar-defualt">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                               <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a><li>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                            </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body"><div class="text-right">
                                                                <a class="btn btn-default" href="admin.php">Back </a>
                                                            </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <br>
                     <form class="form-horizontal" name="form" action="" method="post">
                        <label>Old Password</label>
                        <input type="password" name="old_password" class="form-control" ><span id="op"></span><br>
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
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group one</p>
        </footer>

    </body>
</html>

