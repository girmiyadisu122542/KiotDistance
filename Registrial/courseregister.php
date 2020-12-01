<?php
session_start();

if (isset($_SESSION["registrar"])) {
    $uname = $_SESSION["registrar"];
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
    <script type="text/javascript">
        function fun() {
            var letters = /^[A-Za-z]/;
            var numbers = /^[0-9]/;
            if (document.form.dep.value == "abcd") {
                document.getElementById("se").innerHTML = '<font color ="red"> Select Departiment</font>';
                document.getElementById("ct").innerHTML = '';
                document.form.dep.focus();
                return false;
            } else if (document.form.CourseTitle.value == "") {
                document.getElementById("ct").innerHTML = '<font color ="red"> enter Corse Title</font>';
                document.getElementById("se").innerHTML = '';
                document.form.CourseTitle.focus();
                return false;
            } else if (!letters.test(form.CourseTitle.value)) {
                document.getElementById("ct").innerHTML = '<font color ="red">enter Letters Only</font>';
                document.getElementById("se").innerHTML = '';
                document.form.CourseTitle.focus();
                return false;
            } else if (document.form.CourseCode.value == "") {
                document.getElementById("cc").innerHTML = '<font color ="red">enter Corse Code</font>';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.form.CourseCode.focus();
                return false;
            } else if (document.form.Credithr.value == "") {
                document.getElementById("ch").innerHTML = '<font color ="red">inter Corse Cridet Hour</font>';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.Credithr.focus();
                return false;
            } else if (!numbers.test(form.Credithr.value)) {
                document.getElementById("ch").innerHTML = '<font color ="red">enter Numbers Only</font>';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.Credithr.focus();
                return false;
            } else if (document.form.ECTS.value == "") {
                document.getElementById("ec").innerHTML = '<font color ="red">enter Corse ETC Value</font>';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.ECTS.focus();
                return false;
            } else if (!numbers.test(form.ECTS.value)) {
                document.getElementById("ec").innerHTML = '<font color ="red">inter Numbers Only</font>';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.ECTS.focus();
                return false;
            } else if (document.form.lechour.value == "") {
                document.getElementById("le").innerHTML = '<font color ="red">inter Corse ETC Value</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.lechour.focus();
                return false;
            } else if (!numbers.test(form.lechour.value)) {
                document.getElementById("le").innerHTML = '<font color ="red">inter Numbers Only</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.lechour.focus();
                return false;
            } else if (document.form.Labhour.value == "") {
                document.getElementById("lb").innerHTML = '<font color ="red"> inter Lab Hour</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.Labhour.focus();
                return false;
            } else if (!numbers.test(form.Labhour.value)) {
                document.getElementById("lb").innerHTML = '<font color ="red">enter Numbers Only</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.form.Labhour.focus();
                return false;
            } else if (document.form.Tur.value == "") {
                document.getElementById("tur").innerHTML = '<font color ="red">enter  Tutorial Value</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.getElementById("lb").innerHTML = '';
                document.form.Tur.focus();
                return false;
            } else if (!numbers.test(form.Tur.value)) {
                document.getElementById("tur").innerHTML = '<font color ="red">inter Numbers Only</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.getElementById("lb").innerHTML = '';
                document.form.Tur.focus();
                return false;
            } else if (document.form.year.value == "") {
                document.getElementById("year").innerHTML = '<font color ="red">inter  Acadamic Year</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.getElementById("lb").innerHTML = '';
                document.getElementById("tur").innerHTML = '';
                document.form.year.focus();
                return false;
            } else if (!numbers.test(form.year.value)) {
                document.getElementById("year").innerHTML = '<font color ="red">enter Numbers Only</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.getElementById("lb").innerHTML = '';
                document.getElementById("tur").innerHTML = '';
                document.form.year.focus();
                return false;
            } else if (document.form.Semister.value == "") {
                document.getElementById("sem").innerHTML = '<font color ="red"> enter  Acadamic Year</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.getElementById("lb").innerHTML = '';
                document.getElementById("tur").innerHTML = '';
                document.getElementById("year").innerHTML = '';
                document.form.Semister.focus();
                return false;
            } else if (document.form.cost.value == "") {
                document.getElementById("cp").innerHTML = '<font color ="red">inter  Acadamic Year</font>';
                document.getElementById("ec").innerHTML = '';
                document.getElementById("se").innerHTML = '';
                document.getElementById("ct").innerHTML = '';
                document.getElementById("cc").innerHTML = '';
                document.getElementById("lb").innerHTML = '';
                document.getElementById("tur").innerHTML = '';
                document.getElementById("year").innerHTML = '';
                document.getElementById("sem").innerHTML = '';
                document.form.cost.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-defualt navbar-fixed-top">
        <img src="../image/reg.PNG" alt=""width="100%" height="70px"/>
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <a href="registral.php"> <button type="button" class="btn btn-warning">Home</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="assigndepartmenhead.php"><button type="button" class="btn btn-warning">assigndepartmenthead</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="updatestudentinfo.php"> <button type="button" class="btn btn-warning">updatestudentinfo</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="withdrawapprove.php"><button type="button" class="btn btn-warning">withdrawapprove</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="courseregister.php"><button type="button" class="btn btn-warning">courseregister</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="regestercsv.php"><button type="button" class="btn btn-warning">Uploade Student list</button></a>
                    </div>                        <div class="btn-group">
                        <a href="changepassword.php"> <button type="button" class="btn btn-warning">Change passowrd</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="searchstudentinfo.php"> <button type="button" class="btn btn-warning">search</button></a>
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
                         <li><a href="http//:www.asu.edu.et"><button type="button" class="btn btn-info">KIOT</button><img src="../image/wollo.jpg" width="90"height="40"><a>
                                    <li><a href="http//:www.icon_facebook.com"><button type="button" class="btn btn-info">Facebook</button><img src="../image/facebook.jpg" width="90"height="40"></a></br>
                                        <li><a href="http//:www.gmail.com"><button type="button" class="btn btn-info">Gmail</button><img src="../image/gmail.jpg" width="90" height="40"></a></li>
                                        <li><a href="http//:www.google.com"><button type="button" class="btn btn-info">Google</button><img src="../image/goog.png"width="90"height="40"></a></li></br>
                                        <li><a href="http//:www.youtube.com"><button type="button" class="btn btn-info">You Tube</button><img src="../image/youtube.png"width="90"height="40"></a></li></br>
                                    </ul> </div>
                                </nav>

                            </div>

                            <div class="col-sm-9 body"><div class="text-right">
                                <a class="btn btn-default" href="registral.php">Back </a>
                            </div>

                            <fieldset><legend> Course Registration Form </legend>
                                <form class="form-horizontal" name="form"action=""method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2"for="sel1">Department:</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="dep">
                                                <option value="abcd">Select one</option>
                                                <option value="computer science">Computer Scince</option>
                                                <option value="civil engnering">civil engnering</option>
                                                <option value="mechancal engnering">mechancal engnering</option>
                                                <option value="electrical engnering">electrical engnering</option>
                                                <option value="plant scince">plant scince</option>
                                                <option value="anmial scince">anmial scince</option>
                                                <option value="information scince">Information Scince</option>
                                                <option value="Information thechnology">Information Tecnology</option>
                                            </select><span id="se"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2" form="email">Course Title:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="CourseTitle" placeholder="Enter Course Title"><span id="ct"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Course Code:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="CourseCode" placeholder="Enetr your Course Code"><span id="cc"></span>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="pwd">Credithr:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="Credithr" placeholder="Enter your Credithr"><span id="ch"></span>

                                            </div></div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">ECTS:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="ECTS" placeholder="Enter your ECTS"><span id="ec"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Lec hour:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="lechour" placeholder="Enter your Lec hour"><span id="le"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Lab hour:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="Labhour" placeholder="Enter your Lab hour"><span id="lb"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Tur:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="Tur" placeholder="Enter your Tur"><span id="tur"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Year:</label>
                                                <div class="col-sm-4">
                                                    <select name="year" class="form-control">
                                                        <option value="0">Select Class Year</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">5</option>
                                                        <option value="7">7</option>
                                                    </select>
                                                    <span id="year"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Semister:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="Semister" placeholder="Enter your Semister"><span id="sem"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Cost Price per Crh:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="cost" placeholder="Enter Amount Cost"><span id="cp"></span>
                                                </div>
                                                <br><br>
                                                <p align="center">
                                                    <button type="submit" class="btn btn-success"name="Course" value="Course" onclick="return fun()">Register</button>
                                                    <button type="reset" class="btn btn-success"name=>cancel</button></p>
                                                </form></fieldset>
                            <?php
                            include("../database.php");
                            if (isset($_POST['Course'])) {
                                $departiment = $_POST['dep'];
                                $title = $_POST['CourseTitle'];
                                $code = $_POST['CourseCode'];
                                $credtthr = $_POST['Credithr'];
                                $ECTS = $_POST['ECTS'];
                                $lechour = $_POST['lechour'];
                                $Labhour = $_POST['Labhour'];
                                $Tur = $_POST['Tur'];
                                $year = $_POST['year'];
                                $Semister = $_POST['Semister'];
                                $cost = $_POST['cost'];
                                $totalcost = $cost * $credtthr;
                                $query = mysqli_query($conn,"INSERT INTO course VALUES('','$departiment','$title','$code','$credtthr','$ECTS','$lechour','$Labhour','$Tur','$year','$Semister','$cost','$totalcost','')");
                                if ($query) {
                                    echo 'Successfuly Course Register';
                                } else {
                                    echo mysqli_error($conn);
                                }
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
