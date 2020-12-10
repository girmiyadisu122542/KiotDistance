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
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
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
                            <li><a href="searchestudentinfo.php"><button type="button" class="btn btn-primary">Search</button></a></li>
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

               <div class="col-sm-9 body"><br><br>
                   <form action="searchestudentinfo.php" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                             <div class="col-sm-4">
                                <input type="text" class="form-control" name="search1" placeholder="search....">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-default" name="search">Submit</button>    </div>
                        <div class="text-right">
                                            <a class="btn btn-default" href="departmenthead.php">Back </a>
                                                            </div>
                        </div>
                        
                    </form>
                  
                     <?php
                    include '../database.php';
                    if (isset($_POST['search'])) {
                        $search = $_POST['search1'];
   if(empty($search)){
    echo 'please fill the info';
       }else{
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
                    }}
                            ?></tbody></table>
                </div>
            </div>
        </div>
                        <footer class="container-fluid footer">
                            <p>Copy Right Reserved by Girmay Addisu</p>
                        </footer>
                        </body>
                        </html>



