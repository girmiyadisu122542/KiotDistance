<?php
session_start();
include '../database.php';
if (isset($_SESSION["instructor"]) && ($_SESSION['instructorid'])) {
    $ins_id = $_SESSION['instructorid'];
    $username = $_SESSION["instructor"];
} else {
    header("Location: ../login.php");
}
if (isset($_SESSION["instructor"]) && $_SESSION['instructorid']) {
    $instractor_id = $_SESSION['instructorid'];
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
<!--        <script src="../js/corse.js" type="text/javascript"></script>-->
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/dropdown.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
<!--        <script type="text/javascript">
        function validate() {
    var numbers = /^[0-9]/;
    var letters = /^[A-Za-z]+$/;
    if (document.name.Assigment1.value == "") {
        document.getElementById('err1').innerHTML = '<font color="red"> Please Fill The assignement one</font>';
          document.getElementById('err2').innerHTML ='';
        document.name.Assigment1.focus();
        return false;
    } else if (!numbers.test(document.name.Assigment1.value)) {
        document.getElementById('err1').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
          document.getElementById('err2').innerHTML ='';
        document.name.Assigment1.focus();
        return false;
    }
    // Assignement 2
     if (document.name.Assigment2.value == "") {
        document.getElementById('err2').innerHTML = '<font color="red"> Please Fill The assignement two</font>';
         document.getElementById('err1').innerHTML ='';
        document.name.Assigment2.focus();
        return false;
    } else if (!numbers.test(document.name.Assigment2.value)) {
        document.getElementById('err2').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
         document.getElementById('err1').innerHTML ='';
        document.name.Assigment2.focus();
        return false;
    }
    //Quizz
       if (document.name.Quizz.value == "") {
        document.getElementById('err3').innerHTML = '<font color="red"> Please Fill The quizz</font>';
        document.name.Quizz.focus();
        return false;
    } else if (!numbers.test(document.name.Quizz.value)) {
        document.getElementById('err3').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
         document.getElementById('err1').innerHTML ='';
         document.getElementById('err2').innerHTML ='';
        document.name.Quizz.focus();
        return false;
        
    }
    //test
     if (document.name.Test1.value == "") {
        document.getElementById('err4').innerHTML = '<font color="red"> Please Fill The test one value</font>';
        document.name.Test1.focus();
        return false;
    } else if (!numbers.test(document.name.Test1.value)) {
        document.getElementById('err4').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
         document.getElementById('err1').innerHTML ='';
         document.getElementById('err2').innerHTML ='';
          document.getElementById('err3').innerHTML ='';
        document.name.Test1.focus();
        return false;
    
    }
    }
        </script>  -->
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
                                <li><a href="http//:www.distance.asu.edu.et"><button type="button" class="btn btn-info">distance</button><img src="../image/distance.PNG" width="100"height="50"></a></li></br>
                               <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                    </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body">
        <br><br><br>
        <fieldset><legend>UpdateCourseresult Form </legend>             <div class="text-right">
    <a class="btn btn-default" href="instrctor.php">Back </a>
            </div>
            <form class="form-horizontal" role="form"action=""method="post">
                <DIV class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Student id:</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="Studentid">
                            <option value="">Select</option>
                            <?php
                            include '../database.php';
                            $query = mysqli_query($conn,"select * from courseinstractor where INSTRACTOR_ID='$instractor_id'");
                            while ($row1 = mysqli_fetch_array($query)) {
                                $coursecode = $row1['COURSE_CODE'];

                                $select = mysqli_query($conn,"select * from student_course where COURSE_CODE='$coursecode'");
                                ?>

                                <?PHP
                                while ($row = mysqli_fetch_array($select)) {
                                    ?>
                                    <option value="<?php echo $row['STUDENT_ID']; ?>"><?php echo $row['STUDENT_ID']; ?></option>
                                    <?php
                                }
                            }
                            ?>



                        </select>
                    </div></div><p align="center">
                    <button type="submit" class="btn btn-success"name="course" value="Course">select</button>
                    <button type="reset" class="btn btn-success">cancel</button></p>
            </form></fieldset>
        <?php
        include '../database.php';
        if (isset($_POST['course'])) {
            $studentid = $_POST['Studentid'];
            $select = mysqli_query($conn,"select * from courseresult where STUDENT_ID='$studentid'");
            if (mysqli_num_rows($select) >= 1) {
                $row2 = mysqli_fetch_array($select);
              
                ?>
        <form action="" method="post" class="form-horizontal" name="name" onSubmit="return validate();">
                <input type="hidden" name="StudentId" value="<?php echo $studentid; ?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Assigment1:</label><br>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Assigment1" value="<?php echo $row2['ASSIGMENT1']; ?>"><p id="err1"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Assigment2:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Assigment2" value="<?php echo $row2['ASSIGMENT2']; ?>"><p id="err2"></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Quizz:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Quizz" value="<?php echo $row2['QUIZZ']; ?>"><p id="err3"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Test1:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Test1" value="<?php echo $row2['TEST1']; ?>"><p id="err4"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Test2:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Test2" value="<?php echo $row2['TEST2']; ?>"><p id="err5"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Test3:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Test3" value="<?php echo $row2['TEST3']; ?>"><p id="err6"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Final:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="final" value="<?php echo $row2['Final']; ?>"><p id="err7"></p>
                    </div>
                </div
         <div>   <p align="center">
            <button type="submit" class="btn btn-success"name="update" value="update">update</button>
            <button type="reset" class="btn btn-success">cancel</button></p> 
        </div>
        </form></div>
 <?php
           
        }
    }
    ?>
    <?php
    include("../database.php");
    if (isset($_POST['update'])) {
        $id = $_POST['StudentId'];


        $Assigment1 = $_POST['Assigment1'];
        $Assigment2 = $_POST['Assigment2'];
        $Quizz = $_POST['Quizz'];
        $Test1 = $_POST['Test1'];
        $Test2 = $_POST['Test2'];
        $Test3 = $_POST['Test3'];
        $final = $_POST['final'];
       
            $Total = $Assigment1 + $Assigment2 + $Quizz + $Test1 + $Test2 + $Test3 + $final;
            $query = mysqli_query($conn,"update courseresult set ASSIGMENT1='$Assigment1', ASSIGMENT2='$Assigment2' ,TEST1='$Test1', TEST2='$Test2', TEST3='$Test3', Final='$final', TOTAL='$Total' where STUDENT_ID='$id'");
            if ($query) {
                echo 'Successfuly Update Courseresult';
            } else {
                echo mysqli_error($conn);
            }
        
    }
    ?>
             </div>
            </div>
        </div>
           <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group five</p>
        </footer>
</body>
</html>

