
<?php
session_start();

if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
    $ins_id = $_SESSION['studentid'];
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



            <div id="nav">  

                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><button type="button" class="btn btn-info"> <div id="button">Home</div></button></a></li>
                        <li><div class="dropdown">
                                <button type="button" class="btn btn-info"><div id="button">Download</div></button>
                                <div class="dropdown-content">
                                    <a href="downloadassignmentanswer.php">Assignmentquestion</a>
                                    <a href="downloadassignmentquestion.php"> Course Material</a>
                                </div>
                            </div></li>
                        <li><div class="dropdown">
                                <button type="button" class="btn btn-info"><div id="button">Upload</div></button>
                                <div class="dropdown-content">

                                    <a href="uploadAssignmentquestion.php">Assignment answer</a>
                                 
                                </div>
                            </div>
                        </li>
                       <li><a href="Courseregister.php"><button type="button" class="btn btn-info"> <div id="button">Courseregister</div></button></a></li>
 <li><div class="dropdown">
                                <button type="button" class="btn btn-info"><div id="button">View</div></button>
                                <div class="dropdown-content">
                                    <a href="viewnotice.php"> Notice</a>
                                    <a href="viewcourseresult.php">Feedback</a>
                                </div>
                            </div>
                        </li>  
                    </ul>
                    <div class="btn-group">
                         <li><a href="updateaccount.php"><button type="button" class="btn btn-warning">Change Password</button></a></li>
                         </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index/logout.php"> <button type="button" class="btn btn-info">Logout</button></a></li>
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
                                <li><a href="changepassword.php"><button type="button" class="btn btn-info">Change Password</button></a></li></br>
                                   <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                            </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body">
                    <h2> Well come to upload course material</h2>
                    <form class="form-horizontal" role="form"action=""method="post" enctype="multipart/form-data">
                        <?php
                        include '../database.php';
                        $select = mysql_query("select * from courseinstractor where INSTRACTOR_ID = '$ins_id'");
                        ?>
                        <div class="form-group">
                            <label class="control-label col-sm-2"  for="sel1">Course Code:</label>
                            <div class="col-sm-4">

                                <select class="form-control" name="coursename">
                                    <?php
                                    while ($row = mysql_fetch_array($select)) {
                                        ?>
                                        <option value="<?php echo $row['COURSE_CODE']; ?>"><?php echo $row['COURSE_CODE']; ?></option>;
                                        <?php
                                    }
                                    ?>
                                </select></div></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Material Type :</label>
                            <div class="col-sm-4">          
                                <input type="file" class="form-control" name="Material">
                            </div>
                        </div>

                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default"name="upload">upload</button>
                                <button type="Cancel" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    include '../database.php';
                    if (isset($_POST['upload'])) {
                        $coursecode = $_POST['coursename'];
                        $material = $_FILES['Material']['name'];
                        $filetype = $_FILES['Material']['tmp_name'];
                        $folder = "coursematerial/";
                        move_uploaded_file($filetype, $folder . $material);
                        $insert = mysql_query("insert into coursematerial values('','$coursecode','$material','$filetype')");
                        if ($insert) {
                            echo'ok';
//                        } else {
                            echo mysql_error();
                        }
                    }
                    ?>