<?php
session_start();
//if (isset($_SESSION["finance"])) {
//    $uname = $_SESSION["UserName"];
//} else {
//    header("Location: ../login.php");
//}
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
            <div class="container-fluid">
             <img src="../image/fin_1.PNG" alt=""width="100%" height="115px"/>
             <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <li><a href="finance.php"><button type="button" class="btn btn-primary"> <div id="button">Home</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="updateaccount.php"><button type="button" class="btn btn-primary"> <div id="button">Change Password</div></button></a></li>
                        </div>
                         <div class="btn-group">
                             <li><a href="viewpayment.php"><button type="button" class="btn btn-primary"> <div id="button">View payment</div></button></a></li>
                        </div>
                          
                        <div class="btn-group">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-primary">Logout</button></a></li>       </div>
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
                                <li><a href="changepassword.php"><button type="button" class="btn btn-info"> update account </button></a></li></br>
                                <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                            </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body">
                    <form action="searchstudentinfo.php" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="search1" placeholder="search.....">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-default" name="search">Submit</button>    </div>
                        </div>
                    </form>

                    <?php
                    include '../database.php';
                    if (isset($_POST['search'])) {
                        $search = $_POST['search1'];

                        $query = mysql_query("select * from student where Student_Id='$search'");
                        $row = mysql_fetch_array($query);
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr> <th>Student_Id</th>
                                    <th>First_Name</th>
                                    <th>Last_Name</th>
                                    <th>Department</th>
                                    <th>Year</th>
                                    <th>Sex</th>
                                    <th>Nationality</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php
    echo '<tr>';
    echo '<td>' . $search . '</td><td>' . $row['FirstName'] . '</td><td>' . $row['LastName'] . '</td><td>' . $row['Department'] . '</td><td>' . $row['Year'] . '</td><td>' . $row['Sex'] . '</td><td>' . $row['Nationality'] . '</td></tr>';
}
?></tbody></table>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group five</p>
        </footer>

    </body>
</html>



