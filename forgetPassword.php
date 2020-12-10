<?php
session_start();
include("database.php");
?>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!--        <link rel="stylesheet" href="css/bootstrap.min.css">
                <script src="js/jquery.min.js"></script>
                <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
                <script src="js/bootstrap.min.js"></script>
                <link href="css/student.css" rel="stylesheet" type="text/css"/>-->

            </head>
            <body>
                <div id="header1">

                    <img src="image/HEADER.jpg" alt="" height="200px" width="100%">
                </div>
                <div id="header">
                    <table cellspacing=10> <tr> <td>
                        <h2>KIOT DCE MS </h2> </td><td>
                            <a href="index.php">HOME</A></td><td>

                                <a href="viewnotice.php">VIEW NOTICE</a></td><td>
                                    <a href="about.php">ABOUT US</a></td><td>
                                        <a href="contact.php">CONTACT US<a></td><td>
                                            <a href="login.php"> LOGIN </a></td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="maincontent">
                                    <div class="main">
                                        <fieldset>
                                            <legend> Forget Password </legend>
                                            <form class="form-horizontal" role="form" name="forform" method="POST"  >

                                                <br>

                                                <br><label id="font">User Name</label>
                                                <br><input type="text" class="form-control" name="uname"><span id="uname"></span><br>
                                                <br><label id="font">Email Address</label>
                                                <br><input type="text" class="form-control" name="uemail"><span id="uemail"></span><br>

                                                <p align="center"><br>
                                                    <button type="submit" name="forg" class="btn btn-default">Submit</button>
                                                    <button type="submit" class="btn btn-default">Cancel</button>
                                                    <a class="btn btn-default" href="login.php" role="button">Back to Privious</a>
                                                </p>
                                            </form>
<?php
if (isset($_POST['forg'])) {
$uname = $_POST['uname'];
$emailaa = $_POST['uemail'];
$query =  mysqli_query($conn,"SELECT * FROM account where UserName='$uname'");
if ( mysqli_num_rows($query) > 0) {
    $row =  mysqli_fetch_assoc($query);
    if ($row['UserName'] == $uname) {
        $utype = $row['UserType'];
        if ($utype == 'student') {
            $stuid = $row['Student_Id'];
            $selectemail =  mysqli_query($conn,"select * from student where Student_Id='$stuid'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['Email'];
        }if ($utype == 'instructor') {
            $id = $row['Instructor_Id'];
            $selectemail =  mysqli_query($conn,"select * from instractor where INSTROCTER_ID='$id'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['email'];
        }if ($utype == 'registrar') {
            $id = $row['registrar_Id'];
            $selectemail =  mysqli_query($conn,"select * from registrar where USER_ID='$id'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['email'];
        }if ($utype == 'dministrator') {
            $id = $row['ADMIN_ID'];
            $selectemail =  mysqli_query($conn,"select * from admin where ADMI_ID='$id'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['Email'];
        }if ($utype == 'facultyregistrar') {
            $id = $row['facultyregistrar_Id'];
            $selectemail =  mysqli_query($conn,"select * from facultyregistrar where User_ID='$id'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['email'];
        }if ($utype == 'finance') {
            $id = $row['Finance_Id'];
            $selectemail =  mysqli_query($conn,"select * from finance where User_ID='$id'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['email'];
        }if ($utype == 'departmenthead') {
            $id = $row['Dep_Id'];
            $selectemail =  mysqli_query($conn,"select * from departmenthead where departmenthead_Id ='$id'");
            $rowemail =  mysqli_fetch_assoc($selectemail);
            $email = $rowemail['Email'];
        }
        echo $email;

        if ($email== $emailaa) {
            $code = "";
            for ($x = 0; $x < 4; $x++) {
                $code .= rand(0, 9);
            }
            $_SESSION['uname'] = $uname;
            $_SESSION['code'] = $code;
            $msg = 'Your Conformation Code: ' . $code;
            require 'PHPmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ageriewudu766@gmail.com';
            $mail->Password = '12345asu';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('ageriewudu766@gmail.com', 'ASU');

            $mail->addAddress($email, 'ASU');

            $mail->isHTML(true);
            $mail->Subject = 'Forgote Conformation Code';
            $mail->Body = $msg;
            $mail->AltBody = 'Assosa Unversty';

            if (!$mail->send()) {
                echo '<div class="alert alert-danger">Conformation code could not be sent .</div>';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                ?>
                <div class="alert alert-success">
                    <?php
                    echo 'Conformation Code has been sent     <br>';
                    ?>

                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Fill Conformation code</button>

                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title" align="center">Inter Conformation Code</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form class="form-horizontal" role="form" name="conformation" method="POST"action="forgot.php">
                                                                                        <div class="form-group">
                                                                                            <table  align="center" width="90%">
                                                                                                <tr><td><label> Code</label></td>
                                                                                                    <td aligne="right"><input type="text" class="form-control" name="cod"><br><span id="cod"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td align="center"><br><button type="submit" name="code"class="btn btn-default">Submit</button></td>
                                                                                                        <td align="center"><br><a class="btn btn-default" href="" role="button">Cancel</a></td>
                                                                                                    </tr>    
                                                                                                </table>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                            }
                                                                        } else {
                                                                            echo '<div class="alert alert-danger" align="center">Your email is not much.</div>';
                                                                        }
                                                                    } else {
                                                                        echo '<div class="alert alert-danger" align="center">your user name is not correct</div>';
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </fieldset>
                                                    </div>
                                                    <div class="right">

                                                        <script language="Java Script">
                                                            <!--
                                                                document.write(right_now)
                                                                    //-->
                                                                </script>

                                                                <div class="box" style="padding-top: 40px;padding-left: 8px;">
                                                                    <script LANGUAGE="JavaScript">
                                                                        monthnames = new Array("January", "Februrary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Decemeber");
                                                                        var linkcount = 0;
                                                                        function addlink(month, day, href) {
                                                                            var entry = new Array(3);
                                                                            entry[0] = month;
                                                                            entry[1] = day;
                                                                            entry[2] = href;
                                                                            this[linkcount++] = entry;
                                                                        }
                                                                        Array.prototype.addlink = addlink;
                                                                        linkdays = new Array();
                                                                        monthdays = new Array(12);
                                                                        monthdays[0] = 31;
                                                                        monthdays[1] = 28;
                                                                        monthdays[2] = 31;
                                                                        monthdays[3] = 30;
                                                                        monthdays[4] = 31;
                                                                        monthdays[5] = 30;
                                                                        monthdays[6] = 31;
                                                                        monthdays[7] = 31;
                                                                        monthdays[8] = 30;
                                                                        monthdays[9] = 31;
                                                                        monthdays[10] = 30;
                                                                        monthdays[11] = 31;
                                                                        todayDate = new Date();
                                                                        thisday = todayDate.getDay();
                                                                        thismonth = todayDate.getMonth();
                                                                        thisdate = todayDate.getDate();
                                                                        thisyear = todayDate.getYear();
                                                                        thisyear = thisyear % 100;
                                                                        thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
                                                                        if (((thisyear % 4 == 0)
                                                                            && !(thisyear % 100 == 0))
                                                                            || (thisyear % 400 == 0))
                                                                            monthdays[1]++;
                                                                        startspaces = thisdate;
                                                                        while (startspaces > 7)
                                                                            startspaces -= 7;
                                                                        startspaces = thisday - startspaces + 1;
                                                                        if (startspaces < 0)
                                                                            startspaces += 7;
                                                                        document.write("<table border=0 bgcolor=white width=297 height=260");
                                                                        document.write("bordercolor=black><font color=black>");
                                                                        document.write("<tr><td colspan=7><center><strong>"
                                                                         + monthnames[thismonth] + " " + thisyear
                                                                         + "</strong></center></font></td></tr>");
                                                                        document.write("<tr>");
                                                                        document.write("<td align=center>Su</td>");
                                                                        document.write("<td align=center>M</td>");
                                                                        document.write("<td align=center>Tu</td>");
                                                                        document.write("<td align=center>W</td>");
                                                                        document.write("<td align=center>Th</td>");
                                                                        document.write("<td align=center>F</td>");
                                                                        document.write("<td align=center>Sa</td>");
                                                                        document.write("</tr>");
                                                                        document.write("<tr>");
                                                                        for (s = 0; s < startspaces; s++) {
                                                                            document.write("<td> </td>");
                                                                        }
                                                                        count = 1;
                                                                        while (count <= monthdays[thismonth]) {
                                                                            for (b = startspaces; b < 7; b++) {
                                                                                linktrue = false;
                                                                                document.write("<td>");
                                                                                for (c = 0; c < linkdays.length; c++) {
                                                                                    if (linkdays[c] != null) {
                                                                                        if ((linkdays[c][0] == thismonth + 1) && (linkdays[c][1] == count)) {
                                                                                            document.write("<a href=\"" + linkdays[c][2] + "\">");
                                                                                            linktrue = true;
                                                                                        }
                                                                                    }
                                                                                }
                                                                                if (count == thisdate) {
                                                                                    document.write("<font color='FF0000'><strong>");
                                                                                }
                                                                                if (count <= monthdays[thismonth]) {
                                                                                    document.write(count);
                                                                                } else {
                                                                                    document.write(" ");
                                                                                }
                                                                                if (count == thisdate) {
                                                                                    document.write("</strong></font>");
                                                                                }
                                                                                if (linktrue)
                                                                                    document.write("</a>");
                                                                                document.write("</td>");
                                                                                count++;
                                                                            }
                                                                            document.write("</tr>");
                                                                            do                                                                                                                                       cument.write("<                                                                                                   tr>");
                                                                            startspaces = 0;
                                                                        }
                                                                        document.write("</table></p>");
                                                                    </script>
                                                                    <SCRIPT LANGUAGE=                                                                                        "JavaScript">
                                                                     var ti                                                                                        mee;
                                                                     function stopClock                                                                                        () {
                                                                         clearTimeout(tim                                                                                        ee);
                                                                     }
                                                                     function yourC                                                                                        lock() {
                                                                         var nd = new Date();
                                                                         var h, m, s;
                                                                         var time = " ";
                                                                         h = nd.getHours();
                                                                         m = nd.getMinutes                                                                                        ();
                                                                         s = nd.getSeconds();
                                                                         if (s <= 9)
                                                                             s = "0" + s;
                                                                         if (m <= 9)
                                                                             m = "0" + m;
                                                                         if (h < = 9)
                                                                             h = "0" + h;
                                                                         time + = h + "                                                                                    :" + m + ":" + s;
                                                                         document.the_clock.the_time.value = time;
                                                                         timee = setTimeout("yourClock()", 1000);
                                                                     }
// Stop hiding -->
</SCRIP                                                                                               T>
</div>                                             

</div>
</div>
<div id                                                                                               ="footer">
Copy Ri                                                                                                   ght Reserved by Girmay Addisu
</div>
</BODY>                                                                                               
</html>