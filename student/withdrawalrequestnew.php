
<?php
session_start();

if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
  $student_id = $_SESSION['studentid'];
  $username = $_SESSION["student"];
} else {
  header("Location: ../login.php");
}
?>
<?php
include '../database.php';
$select = mysqli_query($conn,"select * from student where Student_Id = '$student_id'");
$row = mysqli_fetch_array($select);
$year = $row['Year'];
$term = $row['Term'];
$Department = $row['Department'];
$firstname = $row['FirstName'];
$lastname = $row['LastName'];
$sex = $row['Sex'];
$email = $row['Email'];

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
   <img src="../image/STU.PNG" alt=""width="100%" height="70px"/>
   <div class="container-fluid">
    <ul class="nav navbar-nav">
      <div class="btn-group btn-group-justified">
        <div class="btn-group">
          <a href="student.php"> <button type="button" class="btn btn-warning">Home</button></a>
        </div>
        <div class="btn-group">
          <a href="Givefeedback.php"><button type="button" class="btn btn-warning">GiveFeedback</button></a>
        </div>
        <div class="btn-group">
         <a href="withdrawalrequestnew.php"><button type="button" class="btn btn-warning">Withdrawal Request</button></a>
       </div>
       <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
          Download <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="downloadassignmentquestion.php">Assignment question</a></li>
            <li><a href="downloadcoursemat.php">course material</a></li>

          </ul>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
            View <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="viewcourseresult.php">Registration Sleep</a></li>
              <li><a href="viewcourseresult.php">Course Result</a></li>

            </ul>
          </div>

          <div class="btn-group">

            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
              Upload <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="Uploadassignmentanswer.php">Assignment answer</a></li>
              </ul>
            </div>
            <div class="btn-group">
             <li><a href="updateaccount.php"><button type="button" class="btn btn-warning">Change Password</button></a></li>
           </div>
           <div class="btn-group">
            <li><a href="../logout.php"> <button type="button" class="btn btn-warning">Logout</button></a></li>       </
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
                <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">DISTANCE</button><img src="../image/distance.Png" width="90"height="40"><a>
                  <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                    <li><a href="http//:www.icon_facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></br>
                      <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                      <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                      <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                    </ul> </div>
                  </nav>

                </div>

                <div class="col-sm-9 body"><div class="text-right">
                  <a class="btn btn-default" href="student.php">Back </a>
                </div>
                <form class="form-horizontal" role="form"action=""method="post">

                  <input type="hidden" class="form-control" name="firstname" value="<?php echo $firstname;?>">

                  <input type="hidden" class="form-control" name="lastname" value="<?php echo $lastname;?>">

                  <input type="hidden" class="form-control" name="Sex" value="<?php echo $sex;?>">

                  <input type="hidden" class="form-control" name="Department" value="<?php echo $Department;?>">

                  <input type="hidden" class="form-control" name="Year" value="<?php echo $year;?>">

                  <input type="hidden" class="form-control" name="Semister" value="<?php echo $term;?>">

                  <input type="hidden" class="form-control" name="email" value="<?php echo $email;?>">
                  <table>
                    <p><h1>If you want withdrawlrequest fill the form</h1></p>
                    <tr>
                      <!--            <td><lable class="">Reason for leaving:</lable></td>-->
                      Reason for leaving:<br>
                      <textarea name="comments" cols=40 rows=7 wrap></textarea>
                                          </tr></table>
                    <p align="center">
                      <button type="submit" class="btn btn-success"name="feedback">send</button>
                      <button type="cancel" class="btn btn-success"name=>cancel</button></p>
                    </form>
                    <?php
                    include '../database.php';
                    if(isset($_POST['feedback'])){
                      $fname = $_POST['firstname'];
                      $lname = $_POST['lastname'];
                      $sex = $_POST['Sex'];

                      $Dep = $_POST['Department'];
                      $year = $_POST['Year'];
                      $semister = $_POST['Semister'];
                      $email = $_POST['email'];
                      $reason = $_POST['comments'];

                      $query = mysqli_query($conn,"INSERT INTO withdraw VALUES('','$student_id','$fname','$lname','$sex','$Dep','$year','$semister','$email','$reason','','')");
                      if($query){
                       echo 'You are Successfuly Send Requist.';
                     } else {
                       echo mysqli_error($conn);  
                     }
                   }
                   ?>

                 </div>
               </div>
             </div>

             <footer class="container-fluid footer">
              <p>Copy Right Reserved by Girmay Addisu</p>
            </footer>

          </body>
          </html>

