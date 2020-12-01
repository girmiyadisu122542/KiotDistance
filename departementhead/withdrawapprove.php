<?php
session_start();
if (isset($_SESSION["departmenthead"]) && ($_SESSION['departmentheadid'])) {
    $dep_id = $_SESSION['departmentheadid'];
    $username = $_SESSION['departmenthead'];
    include("../database.php");
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
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css">

        <link rel="stylesheet" href="../css/bootstrap.min.css">

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
                              <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                            <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                            <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                            <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                            <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                        </ul> </div>
                </nav>


            </div>
            <div id="maincontent">
                <div class="main"><div class="text-right">
                                            <a class="btn btn-default" href="departmenthead.php">Back </a>
                                                            </div>
                    <h1> Well come to withdraw approve page </h1>
                    <?php
                    include '../database.php';
                    $query = mysqli_query($conn,"SELECT * FROM withdraw");
                    echo '<table border="$conn,2" width="80%" align="center"><tr><th>';
                    echo 'Student Id</th><th>First Name</th><th>Last Name</td><td>Sex</th><th>Departiment</th><th>Year</th>';
                    echo '<th>Semister</th><th>Email</th><th>Reson</th><th>Action</th></tr>';
                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row['id'];
                        $_SESSION['id'] = $id;
                        echo '<tr><td>' . $row['Student_Id'] . '</td><td>' . $row['firstname'] . '</td><td>' . $row['lastname'] . '</td><td>' . $row['sex'] . '</td>';
                        echo '<td>' . $row['departiment'] . '</td><td>' . $row['year'] . '</td><td>' . $row['semister'] . '</td>';
                        echo '<td>' . $row['email'] . '</td><td>' . $row['reson'] . '</td><td>';
                        ?>
                        <form method="post">
                            <?php
                            if($row['depheadaprove'] ==0){
                            
                           echo '<a href="withdrawapprove.php?idd='.$id.'" class="btn btn-success" role="button">Approve</a>';
                            
                            }else{
                                ?>
                              <button type="submit" class="btn btn-success disabled"name="">Approved</button> 
                            <?php
                            }
                           
                            echo '<a href="withdrawapprove.php?ide='.$id.'"  class="btn btn-default" role="button">Delete</a>';
                            ?>
                        </form>

                        <?php
                        echo '</td><tr>';
                        
                    }
                    echo '</table>';
                    ?>
                    <?php
                    if (isset($_GET['idd'])) {
                        $id = $_GET['idd'];

                        mysqli_query($conn,"UPDATE withdraw SET depheadaprove='1' where id='$id'");
                    }if (isset($_GET['ide'])) {
                        $id = $_GET['ide'];

                        mysqli_query($conn,"delete from withdraw  where id='$id'");
                    }
                    ?>
                    <?php
                    
                    ?>

                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid footer">
    <p>Copy Right Reserved by Group one</p>
</footer></BODY>
</html>