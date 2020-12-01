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
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-defualt navbar-fixed-top">
            <div class="container-fluid">
               <img src="../image/dep.PNG" alt=""width="100%" height="70px"/>
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <li><a href="index.php"><button type="button" class="btn btn-primary"> <div id="button">Home</div></button></a></li>
                        </div>
 <div class="btn-group">
                            <li><a href="assigninstructor.php"><button type="button" class="btn btn-primary"> <div id="button">AssignInstructor</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="viewfeedback.php"><button type="button" class="btn btn-primary"> <div id="button">View Feedback</div></button></a></li>
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
                            <image src="../image/about1.PNG" width="50%" heigth="60px"></image><font size="3px">Wellcome<?php
                                echo$_SESSION["UserName"];
                                  ?>&nbsp;&nbsp;&nbsp;&nbsp;</font>
                             <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                            <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                            <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                            <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                            <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                        </ul> </div>
                </nav>


            </div>

            <div class="col-sm-9 body">
                <form class="form-horizontal" role="form" method="post"action="">
            </div>
        </div>

</div>

<footer class="container-fluid footer">
    <p>Copy Right Reserved by Group one</p>
</footer>

</body>
</html>

