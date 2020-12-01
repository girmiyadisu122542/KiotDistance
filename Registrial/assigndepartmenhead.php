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
        function funn() {
            var letters = /^[A-Za-z]/;
            var numbers = /^[0-9]/;
            var minlength = '10';
            var num = /^[-+]?[0-9]+\.[0-9]+$/;
            var re = '0';
            var te = 't';
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var account = document.fom.firstname.value;
            var pwd = document.fom.lastname.value;
            var pw = document.fom.sex.value;
            var pwdd = document.fom.phonenumber.value;
            var pwds = document.fom.email.value;
            if (account == '' || account == 'null') {
                document.getElementById('f1').innerHTML = '<font color="red"> Please fill your first name</font>';
                document.getElementById('f2').innerHTML = '';
                document.getElementById('sex').innerHTML = '';
                document.getElementById('phonenumber').innerHTML = '';
                document.getElementById('email').innerHTML = '';
                document.fom.firstname.focus();
                return false;
            }else if (!letters.test(document.fom.firstname.value)) {
                document.getElementById('f1').innerHTML = '<font color="red"> Please fill your first name</font>';
                document.getElementById('f2').innerHTML = '';
                document.getElementById('sex').innerHTML = '';
                document.getElementById('phonenumber').innerHTML = '';
                document.getElementById('email').innerHTML = '';
                document.fom.firstname.focus();
                return false;
            }
            if (pwd == '' || pwd == 'null') {
                document.getElementById('f2').innerHTML = '<font color="red"> Please fill your last name</font>';
                document.getElementById('f1').innerHTML = '';
                document.getElementById('sex').innerHTML = '';
                document.getElementById('phonenumber').innerHTML = '';
                document.getElementById('email').innerHTML = '';
                document.fom.lastname.focus();
                return false;
            }else if (!letters.test(document.fom.lastname.value)) {
             document.getElementById('f2').innerHTML = '<font color="red"> Please fill your last name</font>';
             document.getElementById('f1').innerHTML = '';
             document.getElementById('sex').innerHTML = '';
             document.getElementById('phonenumber').innerHTML = '';
             document.getElementById('email').innerHTML = '';
             document.fom.lastname.focus();
             return false;
         }
         if (pw == 'default' || pw  == 'default') {
            document.getElementById("sex").innerHTML = "<font color='red'>plese select your sex</font>"
            document.getElementById('f2').innerHTML = '';
            document.getElementById('f1').innerHTML = '';
            document.getElementById('phonenumber').innerHTML = '';
            document.getElementById('email').innerHTML = '';
            document.fom.sex.focus();
            return false;
        }if (pwdd == '' || pwdd == 'null') {
            document.getElementById("phonenumber").innerHTML = "<font color='red'>plese fill your phonenumber</font>"
            document.getElementById('email').innerHTML = '';
            document.getElementById('sex').innerHTML = '';
            document.getElementById('f2').innerHTML = '';
            document.getElementById('f1').innerHTML = '';
            document.fom.phonenumber.focus();
            return false;
        }
        else if (!numbers.test(document.fom.phonenumber.value)) {
         document.getElementById("phonenumber").innerHTML = "<font color='red'>plese fill only number</font>"
         document.getElementById('sex').innerHTML = '';
         document.getElementById('f2').innerHTML = '';
         document.getElementById('f1').innerHTML = '';
         document.getElementById('email').innerHTML = '';
         document.fom.phonenumber.focus();
         return false;
     }
     else if (pwdd.length != minlength) {
        document.getElementById("phonenumber").innerHTML = "<font color='red'>plese fill your phonenumber only 10 digets</font>"
        document.getElementById('sex').innerHTML = '';
        document.getElementById('f2').innerHTML = '';
        document.getElementById('f1').innerHTML = '';
        document.getElementById('email').innerHTML = '';
        document.fom.phonenumber.focus();
        return false;
    }
    else if (pwdd.charAt(0) != re) {
        document.getElementById("phonenumber").innerHTML = "<font color='red'>plese fill your phonenumber start from zero</font>"
        document.getElementById('sex').innerHTML = '';
        document.getElementById('f2').innerHTML = '';
        document.getElementById('f1').innerHTML = '';
        document.getElementById('email').innerHTML = '';
        document.fom.phonenumber.focus();
        return false;
    }
    if (pwds == '' || pwds == 'null') {
        document.getElementById("email").innerHTML = "<font color='red'>plese fill your email</font>"
        document.getElementById('phonenumber').innerHTML = '';
        document.getElementById('sex').innerHTML = '';
        document.getElementById('f2').innerHTML = '';
        document.getElementById('f1').innerHTML = '';
        document.fom.email.focus();
        return false;
    } else if (!mailformat.test(document.fom.email.value)) {
        document.getElementById("email").innerHTML = "<font color='red'>plese fill your corect email formate</font>"
        document.getElementById('phonenumber').innerHTML = '';
        document.getElementById('sex').innerHTML = '';
        document.getElementById('f2').innerHTML = '';
        document.getElementById('f1').innerHTML = '';
        document.fom.email.focus();
        return false;
    }

    else {
        return true;
    }
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
                    </div>
                    <div class="btn-group">
                        <a href="changepassword.php"> <button type="button" class="btn btn-warning">Change password</button></a>
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


                            <div class="col-sm-9 body">
                                <div class="text-right">
                                    <a class="btn btn-default" href="registral.php">Back </a>
                                </div> <form class="form-horizontal" method="POST"role="form" action=""name="fom" onsubmit="return funn();">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="name">First Name:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="firstname" placeholder="Enter firstname"><span id="f1"></span><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Last Name:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="lastname" placeholder="enetr lastname"><span id="f2"></span><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2"for="sel1">Sex:</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="sex">
                                             <option value="default">..Select sex..</option>
                                             <option value="Male">Male</option>
                                             <option value="Female">Female</option>
                                         </select><span id="sex"></span>
                                     </div></div><br>
                                     <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Phone_Number:</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="phonenumber" placeholder="Enter phonenumber"><span id="phonenumber"></span><br>
                                        </div>
                                    </div><div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Email:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="email" placeholder="Enter email"><span id="email"></span><br>
                                        </div>
                                    </div>
                                    <?php
                                    include '../database.php';
                                    $select = mysqli_query($conn,"select * from department");

                                    echo'<div class="form-group">';
                                    echo'<label class="control-label col-sm-2">Department:</label>';
                                    echo'<div class="col-sm-4">';
                                    echo'<select  type="dropdown"class="form-control" name="departmentid">'
                                    . '<option>select one</option>';

                                    while ($row = mysqli_fetch_array($select)) {
                                        echo $row['DEPARTEMENT_ID'];

                                        echo'<option value="' . $row['DEPARTEMENT_ID'] . '">' . $row['DEPARTMENT_NAME'] . '</option>';
                                    }

                                    echo'</select>';
                                    echo'</div></div>';
                                    ?>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default" name="register">Assign</button>
                                            <button type="reset" class="btn btn-default" name="register" >Cancle</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                include '../database.php';
                                if (isset($_POST['register'])) {
                                    $firstName = $_POST['firstname'];
                                    $lastName = $_POST['lastname'];
                                    $sex = $_POST['sex'];
                                    $departmentid = $_POST['departmentid'];
                                    $phonenumber = $_POST['phonenumber'];
                                    $email = $_POST['email'];
                                    echo $departmentid;
                                    $select1 = mysqli_query($conn,"select * from departmenthead where DEPARTMENT_ID='$departmentid'");
                                    if (mysqli_num_rows($select1) <= 0) {
                                        $insert = mysqli_query($conn,"insert into departmenthead values('','$firstName','$lastName','$sex','$phonenumber','$email','$departmentid')");
                                        if ($insert) {
                                            echo 'ok';
                                        } else {
                                            echo mysqli_error($conn);
                                        }
                                    } else {

                                        echo 'The select departmenthead has already department head';
                                    }
                                }
                                ?>

                            </div>
                        </div></div>
                        <footer class="container-fluid footer">
                            <p>Copy Right Reserved by Group one</p>
                        </footer>
                        </html>











