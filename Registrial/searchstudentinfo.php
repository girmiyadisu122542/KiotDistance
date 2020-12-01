<?php
session_start();

if(isset($_SESSION["registrar"])){
   $uname= $_SESSION["registrar"];
}
else{
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
       <img src="../image/reg.PNG" alt=""width="100%" height="70px"/>
       <div class="container-fluid">
        <ul class="nav navbar-nav">
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    <a href="registral.php"> <button type="button" class="btn btn-warning">Home</button></a>
                </div>
                <div class="btn-group">
                    <a href="assigndepartmenhead.php"><button type="button" class="btn btn-warning">assigndepartmenthead</button></a>
                </div>
                <div class="btn-group">
                    <a href="updatestudentinfo.php"> <button type="button" class="btn btn-warning">updatestudentinfo</button></a>
                </div>
                <div class="btn-group">
                    <a href="withdrawapprove.php"><button type="button" class="btn btn-warning">withdrawapprove</button></a>
                </div>
                <div class="btn-group">
                    <a href="courseregister.php"><button type="button" class="btn btn-warning">courseregister</button></a>
                </div>
                <div class="btn-group">
                    <a href="regestercsv.php"><button type="button" class="btn btn-warning">Uploade Student list</button></a>
                </div>
                <div class="btn-group">
                    <a href="changepassword.php"> <button type="button" class="btn btn-warning">Change passowrd</button></a>
                </div>
                <div class="btn-group">
                 <a href="searchstudentinfo.php"> <button type="button" class="btn btn-warning">search</button></a>
             </div>
             <div class="btn-group">
                <a href="../logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
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
                        <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                        <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                        <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                        <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                    </ul> </div>
                </nav>


            </div>

            <div class="col-sm-9 body"><br><br>
                <form action="searchstudentinfo.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                       <div class="col-sm-4">
                        <input type="text" class="form-control" name="search1" placeholder="............">
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-default" name="search">Submit</button>    </div><div class="text-right">
                            <a class="btn btn-default" href="registral.php">Back </a>
                        </div>
                    </div>

                </form>

                <?php
                include '../database.php';
                if (isset($_POST['search'])) {
                    $search = $_POST['search1'];

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
                            echo '<td>'.$search.'</td><td>'.$row['FirstName'].'</td><td>'.$row['LastName'].'</td><td>'.$row['Department'].'</td><td>'.$row['Year'].'</td><td>'.$row['Sex'].'</td><td>'.$row['Nationality'].'</td></tr>';
                        }
                        ?></tbody></table>
                    </div>
                </div>
            </div>

            <footer class="container-fluid footer">
                <p>Copy Right Reserved by Group One</p>
            </footer>

        </body>
        </html>



