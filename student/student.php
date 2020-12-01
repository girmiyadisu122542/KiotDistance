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
                                <li><a href="viewregistrationsleep.php">Registration Sleep</a></li>
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
                                <image src="../image/about1.PNG" width="50%" heigth="60px"></image><font size="3px">Wellcome<?php
                                echo$_SESSION["UserName"];
                                  ?>&nbsp;&nbsp;&nbsp;&nbsp;Page</font>
                                <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">DISTANCE</button><img src="../image/distance.Png" width="90"height="40"><a>
                                 <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                                <li><a href="http//:www.icon_facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                   </ul> </div>
                    </nav>
 </div>

                <div class="col-sm-9 body">
                <?php
                    echo $_SESSION['department'];
//                    ?>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group five</p>
        </footer>

    </body>
</html>

