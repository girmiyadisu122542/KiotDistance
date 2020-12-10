<?php
session_start();
include("database.php");
?>
<?php
$var1 = $_POST['cod'];
if ($_SESSION['code'] == $var1) {
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

                <img src="image/4.jpg" alt="" height="200px" width="100%">
            </div>
            <div id="header">
                <table cellspacing=10> <tr> <td>
                            <h2>KIOT DCE MS </h2> </td><td>
                            <a href="index.php">HOME</A></td><td>

                            <a href="viewnotice.php">VIEW NOTICE</a></td><td>
                            <a href="about.php">ABOUT US</a></td><td>
                            <a href="contact.php">CONTACT US<A></td><td>
                                        <a href="login.php"> LOGIN </A></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <div id="maincontent">
                                        <div class="main">
                                            <fieldset>
                                                <legend> Forget Password </legend>
                                                <form class="form-horizontal" role="form" name="conformation" method="POST"action="password.php">
                                                    <div class="form-group">
                                                        <label>Inter New Password</label>
                                                        <input type="password" class="form-control" name="pwd"><br><span id="pwd"></span>
                                                        <br><button type="submit" name="chenge"class="btn btn-default">Save</button>
                                                        <br><a class="btn btn-default" href="forgotpassword.php" role="button">Previous Page</a>
                                                     </div>
                                                </form>
                                                <?php
                                                if (isset($_POST['chenge'])) {
                                                    $pass = $_POST['pwd'];
                                                    $un = $_SESSION['uname'];
                                                    $newpass = md5($pass);
                                                    $query = mysql_query($conn,"UPDATE account SET Password='$newpass' where UserName='$un'");
                                                    if (!$query) {
                                                        echo mysqli_error($conn);
                                                    } else {
                                                        echo '<script type="text/javascript"> alert("You are Successfuly Chenged Your Password Plece Login in New Password!");window:location=\'login.php\';</script>';
                                                        //echo '<div class="alert alert-success"align="center">You Are Chenged Your Password Successfuly.</div>';
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

<div class="box" style="padding-top: 40                                                                        px;padding-left: 8px;">
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
                                                                                                   document.write("<tr>");
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
                                                                                                   <?php
                                                                                               } else {
                                                                                                   //echo '<div class="alert alert-danger"align="center">Your conformation code is not corect!</div>';  
                                                                                                   echo '<script type="text/javascript"> alert("You Conformation Code IS not Much!");window:location=\'forgetPassword.php\';</script>';
                                                                                               }
                                                                                               ?>                                                                                        