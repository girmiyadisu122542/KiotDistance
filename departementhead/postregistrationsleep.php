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
        <link rel="stylesheet" type="text/css" href="../css/style.css">
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/dropdown.js" type="text/javascript"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
         <script type="text/javascript">
            function fun() {
                var letters = /^[A-Za-z]/;
                var numbers = /^[0-9]/;
                if (document.form.dep.value == "default") {
                    document.getElementById("se").innerHTML ='<font color ="red"> pllease Select Departiment</font>';
                    document.getElementById("cc").innerHTML ='';
                      document.getElementById("ed").innerHTML ='';
                    document.form.dep.focus();
                    return false;
                } else if (document.form.class.value == "") {
        document.getElementById('cc').innerHTML = '<font color="red"> enter class year</font>';
        document.getElementById('se').innerHTML = '';
          document.getElementById("ed").innerHTML ='';
        document.fom.class.focus();
        return false;
        
            
        }else if (document.fom.exdate.value == "") {
        document.getElementById('ed').innerHTML = '<font color="red"> Pleas Select Class year</font>';
        document.getElementById('se').innerHTML = '';
          document.getElementById("cc").innerHTML ='';
        document.fom.exdate.focus();
        return false;
                    }
                return true;
            }
        </script>
       
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
    <form class="form-horizontal" name="form"action=""method="post">
               <?php 
               include '../database.php';
               $query = mysqli_query($conn,"select * from departmenthead where departmenthead_id='$dep_id'");
               $row = mysqli_fetch_array($query);
               $Departmentid = $row['department_id'];
               $select = mysqli_query($conn,"select * from department where DEPARTEMENT_ID='$Departmentid'");
               $row1 = mysqli_fetch_array($select);
               $Departmentname = $row1['DEPARTMENT_NAME'];
              
               ?>
        <input type="hidden" name="dep" value="<?PHP echo $Departmentname;?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Class Year:</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="class" class="form-control" >
                            <option value="default">..Select Class Year..</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select><span id="cc"></span><br>
                    </div>
                </div>
        <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Expir Date:</label>
                    <div class="col-sm-4">
                        <input type="Date"name="exdate" class="form-control" ><span id="ed"></span><br>
                    </div>
                </div>
        <p align="center">
            <button type="submit" class="btn btn-success"name="post" value="Course"onclick="return fun()">View</button>
            <button class="btn btn-info" type="submit" name="save">Post</button>
            <button type="submit" class="btn btn-success"name="">cancel</button></p>
    </form>
<?php
include '../database.php';
if (isset($_POST['post'])){
$dep = $_POST['dep'];
$clas = $_POST['class'];
$exdate = $_POST['exdate'];
$_SESSION['dep']=$dep;
$_SESSION['class']=$clas;
$_SESSION['exdate']=$exdate;
$ret = mysqli_query($conn,"select * from course where DEPARTEMENT='$dep' and YEAR='$clas'");
if (mysqli_num_rows($ret) > 0){
    echo '<table width="70%" border="1"><tr><th>Cource Code</th><th>cource Title</th><th>Cridit hr</th><th>ECTS</th><th>Total Cost per Course</th><th>Lec hr</th><th>Lab hr</th><th>Tut</th></tr>';
    $sum =0;
    $sum1 =0;
    $sum2 =0;
    while ($row = mysqli_fetch_array($ret)) {
        $var1 = $row['CREDITHR'];
        $var2 = $row['ECTS'];
        $vary2 = $row['cost prise per crh'];
        $sum = $sum + $var1;
        $sum1 = $sum1 + $var2;
        $sum2 = $sum2 + $vary2;
        
        echo '<tr><td>'.$row['COURSE_CODE'].'</td>';  
        echo '<td>'.$row['TITLE'].'</td>';  
        echo '<td>'.$row['CREDITHR'].'</td>';  
        echo '<td>'.$row['ECTS'].'</td><td>'.$row['cost prise per crh'].'</td>';  
        echo '<td>'.$row['LECHER_HOUR'].'</td>';  
        echo '<td>'.$row['LAB_HOUR'].'</td>';  
        echo '<td>'.$row['TUR'].'</td>';
        echo '</tr>';  
    } 
    echo '<tr><td></td><td>Tottal</td><td>'.$sum.'</td><td>'.$sum1.'</td><td>'.$sum2.'</td></tr>';
    echo '<form >';
    echo '';
    echo '</table>';
}
}
if(isset($_POST['save'])){
    $dep = $_SESSION['dep'];
    $class = $_SESSION['class'];
    $exdate = $_SESSION['exdate'];
    
    $query = mysqli_query($conn,"update student_registration set Status='0' where Department='$dep' and classyear='$class'");
    echo mysqli_error($conn);
    $expird = mysqli_query($conn,"update course set expiredate='$exdate' where YEAR='$class' AND DEPARTEMENT='$dep' ");
    if($query and $expird){
        echo 'Success.';
    } else {
        echo mysqli_error($conn);  
    }
}
?>
    
    
    
</div>
</div>
</div>
</div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group one</p>
        </footer>

</BODY>


</html>