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
                var letter = /^[A-Za-z]+$/;
                var emailvalidate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var data = /^[0-9-"/"]+$/
                var phone = /^\+?([0-9]{2})\)?[-.]?([0-9]{4})[-.]?([0-9]{4})$/;
                if (document.form.title.value == "") {
                    document.getElementById("TL").innerHTML = '<font color ="red">please fill the title</font>';
                    document.getElementById("PD").innerHTML = '';
                    document.form.title.focus();
                    return false;
                } else if (!letter.test(document.form.title.value)) {
                    document.getElementById('TL').innerHTML = '<font color="red">please fill the title only letter</font>';
                    document.getElementById("PD").innerHTML = '';
                    document.form.title.focus();
                    return false;
                } else if (document.form.posteddate.value == "") {
                    document.getElementById('PD').innerHTML = '<font color="red"> Please fill posteddate.</font>';
                    document.getElementById('TL').innerHTML = '';
                    document.form.posteddate.focus();
                    return false;
                } else if (!numbers.test(document.form.posteddate.value)) {
                    document.getElementById('PD').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
                    document.getElementById('TL').innerHTML = '';
                    document.form.posteddate.focus();
                    return false;
                } else if (document.form.postedby.value == "") {
                    document.getElementById("PB").innerHTML = '<font color ="red">please fill the postedby name</font>';
                    document.getElementById("PD").innerHTML = '';
                    document.getElementById('TL').innerHTML = '';
                    document.form.postedby.focus();
                    return false;
                } else if (!letter.test(document.form.postedby.value)) {
                    document.getElementById('PB').innerHTML = '<font color="red">please fill the postedby only letter</font>';
                    document.getElementById("PD").innerHTML = '';
                    document.getElementById('TL').innerHTML = '';
                    document.form.postedby.focus();
                    return false;
                } else if (document.form.expareddate.value == "") {
                    document.getElementById('ed').innerHTML = '<font color="red"> Pleas fill expareddate.</font>';
                    document.getElementById('TL').innerHTML = '';
                    document.getElementById('PD').innerHTML = '';
                    document.form.expareddate.focus();
                    return false;
                } else if (!numbers.test(document.form.expareddate.value)) {
                    document.getElementById('ed').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
                    document.getElementById('TL').innerHTML = '';
                    document.getElementById('PD').innerHTML = '';
                    document.form.expareddate.focus();
                    return false;
                }

                return true;
            }
        </script>

    </head>
    <body>
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
            <div id="header">
                <form method="post">
                    <button type="submit" class="btn btn-success" name="notice">Post New Notice</button>
                    <div class="text-right">
                        <a class="btn btn-default" href="departmenthead.php">Back </a>
                    </div>
                </form>
            </div><br><br>
            <div id="maincontent">
                <div class="main"> 

                    <?php
                    include('../database.php');
                    if (isset($_POST['notice'])) {
                        ?>
                        <p align="center">
                        <form class="form-horizontal" name="form"action=""method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email"> Title:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="title" placeholder="Enter your Title"><span id="TL"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Posted date:</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="posteddate" placeholder="Enetr your Posted date"><span id="PD"></span>
                                </div></div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd" >Posted by:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="postedby" placeholder="Enter your Posted by"><span id="PB"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Expared date:</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="expareddate" placeholder="Enter your Expared date"><span id="ed"></span>
                                </div>
                            </div>
                            content:<br>
                            <textarea name="comments" cols=40 rows=7 wrap></textarea><span id="message5"></span>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success"name="postnotice" value="post"onclick="return fun()">Post</button>
                            <button type="reset" class="btn btn-success"name=>cancel</button>

                        </form>

                        </p>
                        <?php
                    }
                    ?>
                    <?php
                    if (isset($_POST['postnotice'])) {
                        $title = $_POST['title'];
                        $postdate = $_POST['posteddate'];
                        $postedby = $_POST['postedby'];
                        $expiredate = $_POST['expareddate'];
                        $notice = $_POST['comments'];
                        $query = mysqli_query($conn,"insert into notice values('','$title','$postdate','$postedby','$expiredate','$notice','')");
                        echo mysqli_error($conn);
                        if ($query) {
                            echo 'Successfuly Posted';
                        }
                    }

                    $query1 = mysqli_query($conn,"select * from notice where Status='0'");
                    echo '<p>Posted Notice</p>';
                    if (mysqli_num_rows($query1) > 0) {
                        while ($row = mysqli_fetch_assoc($query1)) {
                            $title = $row['Title'];
                            $content = $row['contente'];
                            echo ' <div class="col-sm-5">

                       <div class="panel-group">
                        <div class="panel panel-info">
                            <div class="panel-heading">' . $title . '</div>
                            <div class="panel-body">' . $content . '
                                 <br>                             
                            <a href="postnotice.php?idd=' . $row['noticeId'] . '" role="button" class="btn btn-info btn-sm"><i class="fa fa-trash"></i></a>
                            <a href="updatenotice.php?ide=' . $row['noticeId'] . '" role="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            
                       </div>
                               
                       </div>
                    </div>
                
                        </div>
                    ';
                        }
                    }
                    if (isset($_GET['idd'])) {
                        $nid = $_GET['idd'];
                        mysqli_query($conn,"delete from notice where noticeId='$nid'");
                    }
                    ?>

                </div>
            </div>
    </BODY>

</html>
