<?php
session_start();
if (isset($_SESSION["instructor"]) && ($_SESSION['instructorid'])) {
    $ins_id = $_SESSION['instructorid'];
    $username = $_SESSION["instructor"];
    include '../database.php';
} else {
    header("Location: ../login.php");
}
?>
<html>
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
                var numbers = /^[0-9]/;
                var letters = /^[A-Za-z]+$/;
                if (document.form.search1.value == "") {
                    document.getElementById('serch').innerHTML = '<font color="red"> Please enter Student Id</font>';
                    document.form.search1.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
       <nav class="navbar navbar-defualt navbar-fixed-top">
            <div class="container-fluid">
                <img src="../image/inst.PNG" alt=""width="100%" height="100px">
                <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <li><a href="instrctor.php"><button type="button" class="btn btn-primary"> <div id="button">Home</div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="courseresultregister.php"><button type="button" class="btn btn-primary"> <div id="button">Course result register</div></button></a></li>
                        </div>
                         <div class="btn-group">
                            <li><a href="viewfeedback.php"><button type="button" class="btn btn-primary"> <div id="button">Viewfeedback <i class="fa fa-comment-o"></i><span class="badge badge-red"><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS TOTAL FROM feedback where INSTRCTOR_NAME ='$ins_id'"))['TOTAL'];?></span></div></button></a></li>
                        </div>
                        <div class="btn-group">
                            <li><a href="searchstudentinfo.php"><button type="button" class="btn btn-primary">Search</button></a></li>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Download <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="downloadassigmentanswer.php">Assignment answer</a></li>

                            </ul>
                        </div>

                        <div class="btn-group">

                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Upload <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="Uploadassignmentquestion.php">Assignment question</a></li>
                                <li><a href="uploadcoursematerial.php">course material</a></li>

                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Update <span class="caret"></span></button>
                            <ul class="dropdown-menu">
       <li><a href="updatecourseresult.php">CourseResult</a></li>

                            </ul>
                        </div>
                        <div class="btn-group">
                            <a href="updateaccount.php"> <button type="button" class="btn btn-primary">Change password</button></a>
                        </div>
                        <div class="btn-group">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-primary">Logout</button></a></li>       </div>
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
                    <form action="searchstudentinfo.php" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="search1" placeholder="............">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-default" name="search">Submit</button>    </div> <div class="text-right">
    <a class="btn btn-default" href="instrctor.php">Back </a>
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
            <p>Copy Right Reserved by Group One</p>
        </footer>

    </body>
</html>



