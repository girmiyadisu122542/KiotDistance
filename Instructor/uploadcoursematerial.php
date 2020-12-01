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
    if (document.form.coursename.value == "default") {
        document.getElementById('coid').innerHTML = '<font color="red"> Pleas Select Cource Code</font>';
        document.form.coursename.focus();
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
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                            </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body"><div class="text-right">
                    <a class="btn btn-default" href="instrctor.php">Back </a>
                            </div>
                    <h2> Well come to upload course material</h2>
                    <form class="form-horizontal" name="form"action=""method="post" enctype="multipart/form-data">
                        <?php
                        include '../database.php';
                        $select = mysqli_query($conn,"select * from courseinstractor where INSTRACTOR_ID = '$ins_id'");
                        ?>
                        <div class="form-group">
                            <label class="control-label col-sm-2"  for="sel1">Course Code:</label>
                            <div class="col-sm-4">

                                <select class="form-control" name="coursename">
                                      <option value="default">Select</option>
                                    <?php
                                    while ($row = mysqli_fetch_array($select)) {
                                        ?>
                                        <option value="<?php echo $row['COURSE_CODE']; ?>"><?php echo $row['COURSE_CODE']; ?></option>;
                                        <?php
                                    }
                                    ?>
                                </select><span id ="coid"></span></div></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Material Type :</label>
                            <div class="col-sm-4">          
                                <input type="file" class="form-control" name="Material">
                            </div>
                        </div>

                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default"name="upload" onclick="return fun()">upload</button>
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
                        $insert = mysqli_query($conn,"insert into coursematerial values('','$coursecode','$material','$filetype')");
                        if ($insert) {
                            echo'Succsfully upload course material';
                        } else {
                            echo mysqli_error($conn);
                        }
                    }
                    ?>