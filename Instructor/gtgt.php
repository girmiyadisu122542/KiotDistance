<?php
session_start();
include '../database.php';
if (isset($_SESSION["ADMIN"]) && $_SESSION['ADMIN_ID']) {
    $ADMIN_ID = $_SESSION['ADMIN_ID'];
    $username = $_SESSION["ADMIN"];
}
include("../database.php");
$message = "";
$username=$_SESSION["finance"];
if (isset($_POST["change_password"])) {
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $re_password = $_POST["re_password"];
    //$email = $_SESSION["usename"];
    if ($new_password == $re_password) {
        $check_query = mysql_query("SELECT * FROM account WHERE UserName='$username' AND Password='$old_password'");
        if (mysql_num_rows($check_query) > 0) {
            mysql_query("UPDATE account SET Password='$new_password' WHERE UserName='$username'");
            $message = "success";
        } else {
            $message = "old_password_not_match";
        }
    } else {
        $message = "new_password_not_match";
    }
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
            <div id="nav">  

                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><button type="button" class="btn btn-info"> <div id="button">Home</div></button></a></li>
                        <li><a href="searchstudentinfo.php"><button type="button" class="btn btn-info"> <div id="button">Search</div></button></a></li>
                            <li><div class="dropdown">
                                    <button type="button" class="btn btn-info"><div id="button">view</div></button>
                                    <div class="dropdown-content">
                                        <a href="viewpayment.php"> payment</a>
                                      
                                    </div>
                                </div>
                            </li> 
                             <li><div class="dropdown">
                                    <button type="button" class="btn btn-info"><div id="button">update</div></button>
                                    <div class="dropdown-content">
                                        <a href="updateaccount.php">account</a>
                                      
                                    </div>
                                </div>
                            </li> 
               
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-info">Logout</button></a></li>
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
                                 <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                   </ul> </div>
                    </nav>
                </div>
                <div class="col-sm-9 body">
                    <h3 class="h3">Change Your Password</h3>
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
                    <form action="updateaccount.php" method="POST">
                            <label>Old Password</label>
                            <input type="password" name="old_password" class="form-control"><br/>
                            <label>New Password</label>
                            <input type="password" name="new_password" class="form-control"><br/>
                            <label>Retype New Password</label>
                            <input type="password" name="re_password" class="form-control"><br/>
                            <input type="submit" name="change_password" value="Change" class="btn btn-primary"/>
                        </form>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group five</p>
        </footer>

    </body>
</html>

