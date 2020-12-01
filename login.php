<?php
session_start();
include("database.php");
?>
<html>

<head>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!--        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/dropdown.js" type="text/javascript"></script>
<link href="css/student.css" rel="stylesheet" type="text/css"/>-->

</head>

<body>
  <div id="header1">

    <img src="image/HEADER.jpg" alt="" height="200px" width="100%">
  </div>
  <div id="header">
    <table cellspacing=10>
      <tr>
        <td>
          <h2>KIOT DCE MS </h2>
        </td>
        <td>
          <a href="index.php">HOME</A>
        </td>
        <td>

          <a href="viewnotice.php">VIEW NOTICE</a>
        </td>
        <td>
          <a href="about.php">ABOUT US</a>
        </td>
        <td>
          <a href="contact.php">CONTACT US<A>
        </td>
        <td>
          <a href="login.php"> LOGIN </A>
        </td>
      </tr>
    </table>
  </div>
  <div id="maincontent">
    <div class="main">
      <fieldset>
        <legend> LOGIN </legend>

        <form name="form" action="" method="post">
          <img src="image/login.jpg" alt="" height="75px" width="70%">
          <table>
            <tr>
              <td>
                Username </td>
              <td><input type="text" name="username" id="user" pattern="[a-zA-Z]+" title="pleas Insert only string" required></br></td>
            </tr>
            <tr>
              <td>
                Password </td>
              <td><input type="password" name="password" id="pswd" pattern="[a-zA-Z0-9]+" title="Insert number and string" required></br></td>
            </tr>
            <tr>
              <td>
                usertype</td>
              <td><select name="usertype" required title="Select UserType">
                  <option value="">Select one </option>
                  <option value="administrator">administrator</option>
                  <option value="finance">finance</option>
                  <option value="registrar">registrar</option>
                  <option value="instructor">instructor</option>
                  <option value="departmenthead">departmenthead</option>
                  <option value="facultyregistrar">facultyregistrar</option>
                  <option value="student">student</option>
                </select></td>
            </tr>
            <tr>
              <td>
                <input type="submit" name="login" value="LOGIN">
              </td>
              <td>
                <input type="Reset" name="Cancel" value="Cancel">
                <br></a>
              </td>
            </tr>


          </table>
          <a href="forgetPassword.php">
            <p>
              <font color="black"> Forget Password</font>
            </p>
          </a>
        </form>

        <?php
        if (isset($_POST['login'])) {
          $uname = $_POST["username"];
          $password = $_POST["password"];
          $privilage = $_POST["usertype"];
          $result = mysqli_query($conn, "Select * from  account where UserName='$uname' and Password='$password'");
          if (mysqli_num_rows($result) >= 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["UserName"] = $row["UserName"];
            //    while($loginvalue=mysqli_fetch_assoc($result)){
            //        $privilage=$loginvalue("usertype");
            //    }
            $status = $row['Status'];
            $dep_id = $row['Dep_Id'];
            if ($status == "1") {
              if ($privilage == "administrator") {
                $_SESSION["UserName"] = $uname;
                header("Location:administrator/Admin.php");
              } else if ($privilage == "finance") {
                $_SESSION["finance"] = $uname;
                header("Location:financeofficer/finance.php");
              } else if ($privilage == "student") {
                $_SESSION["student"] = $uname;
                $_SESSION["department"] = $row['Dep_Id'];
                $_SESSION['studentid'] = $row['Student_Id'];
                header("Location: student/student.php");
              } else if ($privilage == "instructor") {
                $_SESSION["instructor"] = $uname;
                $_SESSION['instructorid'] = $row['Instructor_Id'];
                header("Location:Instructor/instrctor.php");
              } else if ($privilage == "departmenthead") {
                $_SESSION["departmenthead"] = $uname;
                $_SESSION['departmentheadid'] = $dep_id;
                header("Location: departementhead/departmenthead.php");
              } else if ($privilage == "registrar") {
                $_SESSION["registrar"] = $uname;
                header("Location:Registrial/registral.php");
              } else if ($privilage == "facultyregistrar") {
                $_SESSION["facultyregistrar"] = $uname;
                header("Location:facultyregistral/facultyregister.php");
              } else {
                echo "Incorrect UserName and Password";
                header("Location:login.php");
              }
            } else {
              echo '<div class="alert alert-info">Your Account is Deactivated Please Contact The Admin.</div>';
            }
          } else {
            echo '<h3>Password or Username incorrect</h3>';
          }
        }
        ?>

      </fieldset>
    </div>
    <div class="right">

      <script language="Java Script">
        <!--
        document.write(right_now)
        //
        -->
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
          if (((thisyear % 4 == 0) &&
              !(thisyear % 100 == 0)) ||
            (thisyear % 400 == 0))
            monthdays[1]++;
          startspaces = thisdate;
          while (startspaces > 7)
            startspaces -= 7;
          startspaces = thisday - startspaces + 1;
          if (startspaces < 0)
            startspaces += 7;
          document.write("<table border=0 bgcolor=white width=297 height=260");
          document.write("bordercolor=black><font color=black>");
          document.write("<tr><td colspan=7><center><strong>" +
            monthnames[thismonth] + " " + thisyear +
            "</strong></center></font></td></tr>");
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
        <SCRIPT LANGUAGE="JavaScript">
          var timee;

          function stopClock() {
            clearTimeout(timee);
          }

          function yourClock() {
            var nd = new Date();
            var h, m, s;
            var time = " ";
            h = nd.getHours();
            m = nd.getMinutes();
            s = nd.getSeconds();
            if (s <= 9)
              s = "0" + s;
            if (m <= 9)
              m = "0" + m;
            if (h < = 9)
              h = "0" + h;
            time + = h + ":" + m + ":" + s;
            document.the_clock.the_time.value = time;
            timee = setTimeout("yourClock()", 1000);
          }
          // Stop hiding -->
        </SCRIPT>
      </div>
    </div>
  </div>
  <div id="footer">
    Copy Right Reserved by Group five
  </div>
</BODY>

</html>