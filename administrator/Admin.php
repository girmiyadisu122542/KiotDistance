<?php
session_start();
// if(isset($_SESSION["administrator"])){
//     $uname= $_SESSION["UserName"] ;
//  }
//  else{
//    header("Location: ../login.php");  
//  }
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
                            <a href="../logout.php"><button type="button" class="btn btn-warning">Logout<span class="glyphicon glyphicon-log-out"></span></button></a>
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
                                <image src="../image/wollo.jpg" width="50%" heigth="60px"></image><font size="3px">Wellcome &nbsp;&nbsp;<?php
                                echo$_SESSION["UserName"];
                                ?>&nbsp;&nbsp;&nbsp;&nbsp;Page</font>
                                <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a><li>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                            </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body">
                   

                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group one</p>
        </footer>

    </body>
</html>

