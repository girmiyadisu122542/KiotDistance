<?php
session_start();

// if(isset($_SESSION["administrator"])){
//     $uname= $_SESSION["UserName"] ;
//  }
//  else{
//    header("Location: ../login.php");  
//  }
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
    <script src="../js/createaccount.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-defualt navbar-fixed-top">
        <img src="../image/admin.PNG"  width="100%" height="70px">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <a href="Admin.php"> <button type="button" class="btn btn-warning">Home</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="createaccount.php"><button type="button" class="btn btn-warning">Create account</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="updateaccount.php"> <button type="button" class="btn btn-warning">Change Password</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="deactivateusers.php"><button type="button" class="btn btn-warning">Deactivate user account</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="activateusers.php"><button type="button" class="btn btn-warning">Activate user account</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="searchstudentinfo.php"><button type="button" class="btn btn-warning">Search</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="../logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
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
                                <li><a href="http//:www.facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a><li>
                                    <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                    <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                    <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                </ul> </div>
                            </nav>


                        </div>

                        <div class="col-sm-9 body">
                            <div class="main">
                                <fieldset><legend> Creataccount </legend><div class="text-right">
                                    <a class="btn btn-default" href="admin.php">Back </a>
                                </div>
                                <form class="form-horizontal" role="form" name="fom" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Firstname">Firstname:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname"><span id="firstname"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Lastname">Lastname:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname"><span id="lastname"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2"for="sel1">Sex:</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="sex">
                                                <option value="sex">Select one</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select><span id="sex"></span>
                                        </div></div><div class="form-group">
                                            <label class="control-label col-sm-2" for="User_Id">User_Id:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="userid" placeholder="Enter User_Id"><span id="userid"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="phonenumber">phonenumber:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="phonenumber" placeholder="Enter phonenumber"><span id="phonenumber"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="Eamil">Email:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="email" placeholder="Enter Eamil"><span id="email"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="Username">Username:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="username" placeholder="Enter Username"><span id="username"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="Password">Password:</label>
                                            <div class="col-sm-4">
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password"><span id="password"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="usertype"> usertype:</label>
                                            <div class="col-sm-4">
                                                <select name="usertype">
                                                    <option value="b">Select one </option> 
                                                    <option value="administrator">administrator</option> 
                                                    <option value="finance">finance</option>
                                                    <option value="registrar">registrar</option>
                                                    <option value="instructor">instructor</option>
                                                    <option value="departmenthead">departmenthead</option>
                                                    <option value="facultyregistrar">facultyregistrar</option>
                                                    <option value="student">student</option>
                                                </select><span id="usertype"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="phonenumber">Department:</label>
                                            <div class="col-sm-4">
                                                <select name="department">
                                                    <option value="a">Select one </option> 
                                        <?php
                                        include("../database.php");
                                        $query = mysqli_query($conn,"select * from department ");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo'<option value="' . $row['DEPARTEMENT_ID'] . '">' . $row['DEPARTMENT_NAME'] . '</option>';
                                        }
                                        ?>
                                                </select><span id="dep"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" name="CreateAccount" value="CreateAccount" onclick="return useraccount()">CreateAccount</button>
                                                <button type="reset" class="btn btn-default"Name="Cancel" Value="Cancel">Cancel</button>
                                                <a type="reset" href="ViewUsers.php" class="btn btn-default" name="view" >Viwe User Account</a>
                                            </div>
                                        </div>
                                    </form>
        <?php
        include("../database.php");
        if (isset($_POST['CreateAccount'])) {
            $fname = $_POST["firstname"];
            $lname = $_POST['lastname'];
            $sex = $_POST["sex"];
            $UserId = $_POST['userid'];

            $phone = $_POST['phonenumber'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];
            $department = $_POST['department'];
            $query12 = mysqli_query($conn,"select * from department where DEPARTMENT_NAME='$department'");
            $row12 = mysqli_fetch_assoc($query12);
            $did2 = $row12['DEPARTEMENT_ID'];
            if ($usertype == 'administrator') {
                $sql = "INSERT INTO admin VALUES('$UserId','$fname','$lname','$sex','$email','$phone')";
                $result = mysqli_query($conn,$sql);
                echo"Succsfully Insert Data In the Admin Table" . mysqli_error($conn);
                $sql1 = "Insert Into account(UserName,Password,Admin_Id,UserType)values('$username','$password', '$UserId',' $usertype')";
                $result2 = mysqli_query($conn,$sql1);
                echo"And  Succesfully Create Account" . mysqli_error($conn);
            } else if ($usertype == 'finance') {
                $sql = "INSERT INTO finance VALUES('$UserId','$fname','$lname','$phone','$email','$sex')";
                $result = mysqli_query($conn,$sql);
                echo"Succsfully Insert Data In the Finance Table" . mysqli_error($conn);
                $sql1 = "Insert Into account(UserName,Password,Finance_Id,UserType)values('$username','$password', '$UserId',' $usertype')";
                $result2 = mysqli_query($conn,$sql1);
                echo"And  Succesfully Create Account" . mysqli_error($conn);
            } else if ($usertype == 'registrar') {
                $sql = "INSERT INTO registrar VALUES('$UserId','$fname','$lname','$phone','$email','$sex')";
                $result = mysqli_query($conn,$sql);
                echo"Succsfully Insert Data In the registrar Table" . mysqli_error($conn);
                $sql1 = "Insert Into account(UserName,Password,registrar_Id,UserType)values('$username','$password', '$UserId',' $usertype')";
                $result2 = mysqli_query($conn,$sql1);
                echo"And  Succesfully Create Account" . mysqli_error($conn);
            } else if ($usertype == 'instructor') {
                $sql = "INSERT INTO instractor VALUES('$UserId','$fname','$lname','$sex','$phone','$email','$did2')";
                $result = mysqli_query($conn,$sql);
                echo"Succsfully Insert Data In the instructor Table" . mysqli_error($conn);
                $sql1 = "Insert Into account(Instructor_Id,UserName,Password,UserType)values('$UserId','$username','$password','$usertype')";
                $result2 = mysqli_query($conn,$sql1);
                echo"And  Succesfully Create Account" . mysqli_error($conn);
            } else if ($usertype == 'departmenthead') {
                $sql = "INSERT INTO departmenthead VALUES('$UserId','$fname','$lname','$sex','$phone','$email','$department')";
                $result = mysqli_query($conn,$sql);
                echo"Succsfully Insert Data In the Department Head Table" . mysqli_error();
                $sql1 = "Insert Into account(UserName,Password,Dep_Id,UserType)values('$username','$password', '$UserId',' $usertype')";
                $result2 = mysqli_query($conn,$sql1);
                echo"And  Succesfully Create Account" .mysqli_error($conn);
            } else if ($usertype == 'facultyregistrar') {
                $sql = "INSERT INTO facultyregistrar VALUES('$UserId','$fname','$lname','$sex','$phone','$email')";
                $result = mysqli_query($conn,$sql);
                echo"Succsfully Insert Data In the facultyregistrar Table" . mysqli_error($conn);
                $sql1 = "Insert Into account(UserName,Password,facultyregistrar_Id,UserType)values('$username','$password', '$UserId','$usertype')";
                $result2 = mysqli_query($conn,$sql1);
                echo"And  Succesfully Create Account" . mysqli_error($conn);
            } else if ($usertype == "student") {
// $sutudent = mysqli_query("");
                $query9 = mysqli_query($conn,"select * from student_registration where Student_Id='$UserId'");
                if (mysqli_num_rows($query9) > 0) {
                    $sql = "INSERT INTO student (Student_Id, FirstName, LastName, Phone_Number,Email, Sex) VALUES('$UserId','$fname','$lname','$phone','$email','$sex')";
                    $result = mysqli_query($conn,$sql);
                    echo"Succsfully Insert Data In the Student Table" . mysqli_error($conn);
                    $query8 = mysqli_query($conn,"select * from student_registration where Student_Id='$UserId'");
                    $row4 = mysqli_fetch_assoc($query8);
                    $dep = $row4['Department'];
                    echo $dep;
                    $query7 = mysqli_query($conn,"select * from department where DEPARTMENT_NAME='$dep'");
                    $row5 = mysqli_fetch_assoc($query7);
                    $did = $row5['DEPARTEMENT_ID'];
                    echo $did;
                    $sql1 = "Insert Into account(UserName,Password,Student_Id,UserType,Dep_Id)values('$username','$password', '$UserId','$usertype','$did')";
                    $result2 = mysqli_query($conn,$sql1);
                    echo"And  Succesfully Create Account" . mysqli_error($conn);
                } else {
                    echo 'You cannot not registerd please first register.';
                }
            } else {
//echo" Can not Craeted Account";
            }
            mysqli_close($conn);
        }

        ?>
                                </fieldset>
                            </div> 
                        </div>
                    </div>
                </div>

                <footer class="container-fluid footer">
                    <p>Copy Right Reserved by Group five</p>
                </footer>

            </body>
            </html>

