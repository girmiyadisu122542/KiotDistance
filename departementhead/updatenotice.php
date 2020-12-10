<?php
session_start();

if (isset($_SESSION["departmenthead"]) && ($_SESSION['departmentheadid'])) {
    $dep_id = $_SESSION['departmentheadid'];
    $username = $_SESSION['departmenthead'];
} else {
    header("Location: ../login.php");
}
?>
<html>
<head>
    <link rel="stylesheet"type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/bootstraps.min.js" type="text/javascript"></script>
    <script src="../js/jquery.js" type="text/javascript"></script>
    <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/student.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        function fun() {
            var letters = /^[A-Za-z]/;
            var numbers = /^[0-9]/;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var us = document.form.title.value;
            var pwd = document.form.posteddate.value;
            var npwd = document.form.postedby.value;
            var npwd = document.form.expareddate.value;
            var npwd = document.form.content.value;
            if (us == '' || us == 'null') {
                document.getElementById('TL').innerHTML = '<font color="red"> Please fill notice titel??</font>';
                document.getElementById('PD').innerHTML = '';
                document.getElementById('PB').innerHTML = '';
                document.getElementById('ed').innerHTML = '';
                document.getElementById('message5').innerHTML = '';
                document.form.title.focus();
                return false;
            } else if (!letters.test(document.fom.title.value)) {
                document.getElementById('title').innerHTML = '<font color="blue"> Please fill only letter??</font>';
                document.fom.title.focus();
                return false;
            } else if (pwd == '' || pwd == 'null') {
                document.getElementById('PD').innerHTML = '<font color="red">Please fill posteddate</font>';
                document.getElementById('title').innerHTML = '';
                document.getElementById('PB').innerHTML = '';
                document.getElementById('ed').innerHTML = '';
                document.getElementById('message5').innerHTML = '';
                document.fom.announce.focus();
                return false;
            }
//                 else if (!letters.test(document.fom.announce.value)) {
//                    document.getElementById('announce2').innerHTML = '<font color="blue"> Please fill only letter??</font>';
//                    document.fom.announce.focus();
//                    return false;
//                }
//                 else if (npwd == '' || npwd == 'null') {
//                    document.getElementById('subjec3').innerHTML = '<font color="red">Please fill subject</font>';
//                    document.getElementById('announce2').innerHTML = '';
//                    document.getElementById('jtitel1').innerHTML = '';
//                    document.getElementById('exdate4').innerHTML = '';
//                    document.getElementById('message5').innerHTML = '';
//                    document.fom.subjec.focus();
//                    return false;
//                }
//                 else if (!letters.test(document.fom.subjec.value)) {
//                    document.getElementById('subjec3').innerHTML = '<font color="blue"> Please fill only letter??</font>';
//                    document.fom.subjec.focus();
//                    return false;
//                }
//                else if (npwd == '' || npwd == 'null') {
//                    document.getElementById('exdate4').innerHTML = '<font color="red">Please fill your email</font>';
//                    document.getElementById('subjec3').innerHTML = '';
//                    document.getElementById('announce2').innerHTML = '';
//                    document.getElementById('jtitel1').innerHTML = '';
//                    document.getElementById('message5').innerHTML = '';
//                    document.fom.exdate.focus();
//                    return false;
//                }
//                else if (npwd == '' || npwd == 'null'){
//                    document.getElementById('message5').innerHTML = '<font color="red">Please fill core of the  vaccancy!</font>';
//                    document.getElementById('exdate4').innerHTML = '';
//                    document.getElementById('subjec3').innerHTML = '';
//                    document.getElementById('announce2').innerHTML = '';
//                    document.getElementById('jtitel').innerHTML = '';
//                    document.fom.message.focus();
//                    return false;
//                }
//                  else if (!letter.test(document.fom.message.value)) {
//                    document.getElementById('message5').innerHTML = '<font color="blue"> Please fill only letters??</font>';
//                    document.fom.message.focus();
//                    return false;
//                }
//                else {
    return true;
}


</script>

</head>
<body>
    <nav class="navbar navbar-defualt navbar-fixed-top">



        <div id="nav">  

            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="departmenthead.php"><button type="button" class="btn btn-info"> <div id="button">Home</div></button></a></li>
                    <li><a href="searchstudentinfo.php"><button type="button" class="btn btn-info">Search</button></a></li>
                    <li><a href="courseregister.php"><button type="button" class="btn btn-info"> <div id="button">courseregister</div></button></a></li>
                    <li><a href="postnotice.php"><button type="button" class="btn btn-info"> <div id="button">postnotic</div></button></a></li>
                    <li><a href=" withdrawapprove.php"><button type="button" class="btn btn-info"><div id="button"> withdrawapprove</div></button></a></li>
                    <li><a href=" postregistrationsleep.php"><button type="button" class="btn btn-info"><div id="button"> postregistrationsleep</div></button></a></li>
                    <li><a href="assigninstructor.php"><button type="button" class="btn btn-info"><div id="button">Assign instructor</div></button></a></li>
                    <li><div class="dropdown">
                        <button type="button" class="btn btn-info"><div id="button">View</div></button>
                        <div class="dropdown-content">
                            <a href="viewfeedback.php">Feed back</a>
                        </div>
                    </div>
                </li> 

                <li><div class="dropdown">
                    <button type="button" class="btn btn-info"><div id="button">update</div></button>
                    <div class="dropdown-content">
                        <a href="updateaccount.php"> account</a>
                        <li><a href="../logout.php"> <button type="button" class="btn btn-info">Logout</button></a></li>
                    </ul>
                    <div id="header">
                        <form method="post">
                            <button type="submit" class="btn btn-success" name="notice">Post New Notice</button>
                        </form>
                    </div><br><br>
                    <div id="maincontent">
                        <div class="main"> 

                            <?php
                            include('../database.php');
                            if (isset($_GET['ide'])) {
                                $nid = $_GET['ide'];
                                $query = mysqli_query($conn,"select * from notice where noticeId='$nid'");
                                $row = mysqli_fetch_assoc($query);
                                ?>
                                <p align="center">
                                    <form class="form-horizontal" name="form"action=""method="post">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email"> Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="title" value="<?php echo $row['Title']; ?>"><span id="TL"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="pwd">Posted date:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" name="posteddate" value="<?php echo $row['posteddate']; ?>"><span id="PD"></span>
                                            </div></div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Expared date:</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control" name="expareddate" value="<?php echo $row['expareddate']; ?>"><span id="ed"></span>
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo $nid; ?>"><span id="ed"></span>

                                                </div>
                                            </div>
                                            content:<br>
                                            <textarea name="comments" cols=40 rows=7 value="<?php echo $row['contente']; ?>" wrap></textarea><span id="message5"></span>
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-success"name="cheange" value="post">Cheange</button>
                                            <button type="reset" class="btn btn-success"name=>Cancel</button>

                                        </form>

                                    </p>
                                    <?php
                                }
                                if (isset($_POST['cheange'])){

                                    $nid = $_POST['id'];
                                    $title = $_POST['title'];
                                    $pdate = $_POST['posteddate'];
                                    $exdate = $_POST['expareddate'];
                                    $content = $_POST['comments'];
                                    $query = mysqli_query($conn,"update notice set Title='$title', contente='$content',expareddate='$exdate',posteddate='$pdate' where noticeId='$nid' ");
                                    echo mysqli_error($conn); 
                                    if($query){
                                        echo '<script type="text/javascript">alert("You are Successfuly update.");window:location=\'postnotice.php\';</script>';
                                    }

                                }
                                ?>


                            </div>
                        </div>
                        <footer class="container-fluid footer">
                            <p>Copy Right Reserved by Girmay Addisu</p>
                        </footer>
                    </BODY>


                    </html>
