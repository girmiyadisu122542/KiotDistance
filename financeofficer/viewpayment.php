<?php
session_start();
 if(isset($_SESSION["finance"])){
     $uname= $_SESSION["UserName"] ;
  }
  else{
    header("Location: ../login.php");  
  }
    ?>
<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/print.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <nav class="navbar navbar-defualt navbar-fixed-top">
            <div class="container-fluid">
             <img src="../image/fin_1.PNG" alt=""width="100%" height="115px"/>
             <ul class="nav navbar-nav">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <li><a href="finance.php"><button type="button" class="btn btn-primary"> <div id="button">Home</div></button></a></li>
                        </div>
                         <div class="btn-group">
                            <li><a href="updateaccount.php"><button type="button" class="btn btn-primary"> <div id="button">Change Password</div></button></a></li>
                        </div>                         <div class="btn-group">
                             <li><a href="viewpayment.php"><button type="button" class="btn btn-primary"> <div id="button">View payment</div></button></a></li>
                        </div>
                          
                        <div class="btn-group">
                            <li><a href="../logout.php"> <button type="button" class="btn btn-primary">Logout</button></a></li>       </div>
                    </ul>
                </div>

            </div>
        </nav>     
 <div style="padding:50px;margin-top:100px;background-color:#1abc9c;height:1200px;">   
            <div class="row">
                <div class="col-sm-3 left">

                    
                    <nav class="navbar navbar-defualt">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                
                                <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/1.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></li></br>
                                <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                 </ul> </div>
                    </nav>


                </div>

                <div class="col-sm-9 body">
                    <h2> Well come to finance page</h2>
                    <form class="form-horizontal" role="form" method="post">
                        <table width="40%">
                            <tr>
                                <td>Departiment</td>
                                <td>
                                    <select name="department" class="form-control">
                                        <option value="default">..Select Departinent..</option>
                                        <?php
                                        include '../database.php';
                                        $select = mysqli_query($conn,"select * from department");
                                        while ($row = mysqli_fetch_assoc($select)) {
                                            echo '<option value="' . $row['DEPARTMENT_NAME'] . '">' . $row['DEPARTMENT_NAME'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><br>Class Year</td>
                                <td><br>
                                    <select name="classyear" class="form-control">
                                        <option value="default">..Select Class Year..</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>

                                    </select> 
                                </td>
                            </tr>
                        </table>
                        <p><br><br>
                            <button class="btn btn-info" type="submit" name="payid" >View</button>
                        </p>
                    </form>
                    <?php
                    if (isset($_POST['payid'])) {
                        $department = $_POST['department'];
                        $classYear = $_POST['classyear'];
                        echo '<button class="btn btn-success" type="submit" onclick="return print()">Print Ricit</button>';
                        echo '<div id="printRicit">';
                        echo '<table border="1" width="70%">';
                        $stud = mysqli_query($conn,"select * from student_registration where Department='$department' and classyear='$classYear' and Status='1'");
                        echo mysqli_error($conn);
                        if (mysqli_num_rows($stud) > 0) {
                            echo '<tr><th>Student Id</th><th>Student Name</th><th>Sex</th><th>Email</th><th>Class Year</th><th>Semister</th><th>Payid Date</th><th>Cost Price</th><th></th></tr>';
                            while ($row1 = mysqli_fetch_assoc($stud)) {
                                echo '<tr><td>' . $row1['Student_Id'] . '</td><td>' . $row1['FirstName'] . ' ' . $row1['LastName'] . '</td><td>' . $row1['SEX'] . '</td><td>' . $row1['Email'] . '</td><td>' . $row1['classyear'] . '</td><td>' . $row1['Semister'] . '</td><td>' . $row1['registerddate'] . '</td><td>' . $row1['costprice'] . '</td></tr>';
                            }
                        }
                        echo '</table>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <p>Copy Right Reserved by Group One</p>
        </footer>

    </body>
</html>

