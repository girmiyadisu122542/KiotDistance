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
                            <a href="../logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
                        </div>

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
                    <a class="btn btn-default" href="admin.php">Back </a>
                </div>
                <form action="searchstudentinfo.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="search1" placeholder="Search...">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default" name="search">Submit</button>    </div>
                    </div>
                </form>

                <?php
                include '../database.php';
                if (isset($_POST['search'])) {
                    $search = $_POST['search1'];
                    if (empty($search)) {
                        echo 'please fill the info';
                    } else {
                        $query = mysqli_query($conn,"select * from student where Student_Id='$search'");
                        $row = mysqli_fetch_array($query);
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
                        }
                        ?></tbody></table>
            </div>
        </div>
    </div>
    <footer class="container-fluid footer">
        <p>Copy Right Reserved by Girmay Addisu</p>
    </footer>

</body>
</html>



