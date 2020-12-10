<?php
session_start();
if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
    $student_id = $_SESSION['studentid'];
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
                        <li><a href="student.php"><button type="button" class="btn btn-info"> <div id="button">Home</div></button></a></li>
                        <li><a href="Givefeedback.php"><button type="button" class="btn btn-info"> <div id="button">Givefeedback</div></button></a></li>
                         
                        <li><div class="dropdown">
                                <button type="button" class="btn btn-info"><div id="button">Download</div></button>
                                <div class="dropdown-content">
                                    <a href="downloadcoursemat.php"> Course Material</a>
                                    <a href="downloadassignmentquestion.php">Assignment Question</a>
                                </div>
                            </div></li>
                        <li><div class="dropdown">
                                <button type="button" class="btn btn-info"><div id="button">Upload</div></button>
                                <div class="dropdown-content">

                                    <a href="uploadassignmentanswer.php">Assignment Answer</a>
                                </div>
                            </div>
                        </li>

                        <li><a href="withdrawalrequestnew.php"><button type="button" class="btn btn-info"><div id="button">Withdrawal request</div></button></a></li>
                        <li><div class="dropdown">
                                <button type="button" class="btn btn-info"><div id="button">View</div></button>
                                <div class="dropdown-content">
                                    <a href="viewnotice.php"> Notice</a>
                                    <a href="SearchResult.php">Course Result</a>
                                    <a href="viewregistrationsleep.php">Registration Sleep</a>
                                </div>
                            </div>
                        </li> 
                        <li><div class="dropdown">
                                    <button type="button" class="btn btn-info"><div id="button">update</div></button>
                                    <div class="dropdown-content">
                                        <a href="updateaccount.php"> account</a>

                                    </div>
                                </div>
                            </li>  

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="../logout.php"> <button type="button" class="btn btn-info">Logout</button></a></li>
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

                <div class="col-sm-9 body">
                    <h2> View Course Resulte Page</h2>
                     <form class="form-horizontal" role="form"  method="post">
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Student Id:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Studentid" placeholder="Enetr your Student Id">
                    </div></div>
                <p align="center">
                    <button type="submit" class="btn btn-success"name="Search" value="Search">Search</button>
                    <button type="reset" class="btn btn-success">cancel</button></p>
            </form>
      <?php
      include '../database.php';
      if(isset($_POST['Search'])){
          $student_id=$_POST["Studentid"];
      $result_view=mysql_query("SELECT  *FROM courseresult WHERE STUDENT_ID='$student_id'");
      if($result_view){
          echo '<table border="1" width="88%" align="center"><tr>';
    echo '<th>Id</th><th>Course Name</th><th>Course Code</th><th>Assigment1</th><th>Assigment 2</th><th>Quize</th><th>Test1</th><th>Test2</th><th>Test3</th><th>Final</th><th>Total</th></tr>';
      while($resulte_row=mysql_fetch_assoc($result_view)){
          if($student_id=$resulte_row['STUDENT_ID']){
          echo '<tr><td>'.$resulte_row['STUDENT_ID'].'</td><td>'.$resulte_row['COURSE_NAME'].'</td><td>'.$resulte_row['COURSE_CODE'].'</td><td>'.$resulte_row['ASSIGMENT1'].'</td><td>'.$resulte_row['ASSIGMENT2'].'</td><td>'.$resulte_row['QUIZZ'].'</td><td>'.$resulte_row['TEST1'].'</td><td>'.$resulte_row['TEST2'].'</td><td>'.$resulte_row['TEST3'].'</td><td>'.$resulte_row['Final'].'</td><td>'.$resulte_row['TOTAL'].'</td></tr>';
      }}
      echo '</table>';
} else {
    echo"there is no Result this student.".mysql_error();
      }}
      ?>
                    
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Girmay Addisu</p>
        </footer>

    </body>
</html>

