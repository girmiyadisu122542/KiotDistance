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
                        <a href="changepassword.php"> <button type="button" class="btn btn-warning">change password</button></a>
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
    <div id="maincontent">
    <div class="main">
    <h1> Well come to withdraw approve page </h1>
    <?php
    include '../database.php';
    $query = mysqli_query($conn,"SELECT * FROM withdraw where depheadaprove='1'");
    echo '<table class="table table-responsive"><tr><th> ';
    echo 'Student Id</th><th>First Name</th><th>Last Name</td><td>Sex</th><th>Departiment</th><th>Year</th>';
    echo '<th>Semister</th><th>Email</th><th>Reson</th><th>Action</th></tr>';
    while ($row = mysqli_fetch_assoc($query)) {
        $id = $row['id'];
        $_SESSION['id'] = $id;
        echo '<tr><td>' . $row['Student_Id'] . '</td><td>' . $row['firstname'] . '</td><td>' . $row['lastname'] . '</td><td>' . $row['sex'] . '</td>';
        echo '<td>' . $row['departiment'] . '</td><td>' . $row['year'] . '</td><td>' . $row['semister'] . '</td>';
        echo '<td>' . $row['email'] . '</td><td>' . $row['reson'] . '</td><td>';
        ?>
        <form method="post">
            <?php
            if ($row['registeraprove'] == 0) {
                echo'<a href="withdrawapprove.php?idd=' . $id . '"  class="btn btn-default" role="button">Approve</a>  ';
            } else {
                echo'<a href="?"  class="btn btn-default disabled" role="button">Approved</a>  ';
            }
            echo'  <a href="withdrawapprove.php?ide=' . $id . '"  class="btn btn-default" role="button">Delete</a>';
            ?>
        </form>
        <?php
        echo '</td><tr>';
    }
    ?>
    <?php
    if (isset($_GET['idd'])) {
        $ida = $_GET['idd'];


        $resu = mysqli_query($conn,"select * from withdraw where id='$ida'");
        $row3 = mysqli_num_rows($resu);
        $email = $row3['email'];
        $fname = $row3['firstname'];



        require '../PHPmailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ageriewudu766@gmail.com';
        $mail->Password = '12345asu';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('ageriewudu766@gmail.com', 'ASU');

        $mail->addAddress('ageriewudu766@gmail.com', 'ASU');

        $mail->isHTML(true);
        $msge = 'Der CustomerYour Post Box rent Time is Finished.<br> Piese Renew Your Post Box Rent.';
        $mail->Subject = 'Asossa Universty Student Notification';
        $mail->Body = $msge;
        $mail->AltBody = 'ASU';
        $mail->send();
        if (!$mail->send()) {
            echo 'Notification could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Notification has been sent';
            $res = mysqli_query($conn,"UPDATE withdraw SET registeraprove='1' where id='$ida'");
                                    
        }
    }
    if (isset($_GET['ide'])) {
        $ide = $_GET['ide'];
        mysqli_query($conn,"delete from withdraw where id='$ide'");
    }
    ?>
    <?php
    echo '</table>';
    ?>

    </div>

    </div>
    </div>
    </div>
    </div>
    <footer class="container-fluid footer">
    <p>Copy Right Reserved by Group one</p>
    </footer>
    </BODY>
    </html>