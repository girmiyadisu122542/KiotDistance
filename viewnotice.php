<html>
    <head>

        <script language="JavaScript">
            <!--
            var right_now = new Date()
                    //-->
    </script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstraps.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>

</head>
<body>
    <div id="header1">

        <img src="image/HEADER.jpg" alt="" height="200px" width="100%">
    </div>
    <div id="header">
        <div class="container">
            <div class="col-sm-2"> <a href="index.php">HOME</a></div>
            <div class="col-sm-2"><a href="viewnotice.php">VIEW NOTICE</a></div>
            <div class="col-sm-2"> <a href="About.php">ABOUTUS</a></div>
            <div class="col-sm-2"><a href="contact.php">CONTACTUS</a></div>
            <div class="col-sm-2"><a href="login.php"> LOGIN </a></div>
        </div>
    </div>
    <div id="maincontent">

        <div class="main">

            <?php
            include 'database.php';
            $day = date('d/m/Y');

            $result = mysqli_query($conn,"SELECT * FROM notice WHERE expareddate > '$day'");
            echo mysqli_error($conn);
            if(mysqli_num_rows($result) >0){
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-sm-6">
                    <div class="well">
                        <div class="panel-header">
                            Prepared by:<?php echo $row['postedby']; ?>
                            <div class="text-right">
                                Prepared on:<?php echo $row['posteddate']; ?>
                            </div>
                        </div>  
                        <?php echo $row['contente']; ?> 
                    </div>
                </div>
                <?php
            }
            } else {
                echo '<div class="well"><div class="alert alert-info">There is no new Notice</div></div>'; 
            }
            ?>
        </div>
        <div class="right">
            Calendar<br>
<script language="JavaScript">
<!--
document.write(right_now)
//-->
</script>

<div class="box" style="padding-top: 40px;padding-left: 8px;">
				<script LANGUAGE="JavaScript">
monthnames = new Array("January","Februrary","March","April","May","June","July","August","September","October","November","Decemeber");
var linkcount=0;
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
monthdays[0]=31;
monthdays[1]=28;
monthdays[2]=31;
monthdays[3]=30;
monthdays[4]=31;
monthdays[5]=30;
monthdays[6]=31;
monthdays[7]=31;
monthdays[8]=30;
monthdays[9]=31;
monthdays[10]=30;
monthdays[11]=31;
todayDate=new Date();
thisday=todayDate.getDay();
thismonth=todayDate.getMonth();
thisdate=todayDate.getDate();
thisyear=todayDate.getYear();
thisyear = thisyear % 100;
thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
if (((thisyear % 4 == 0) 
&& !(thisyear % 100 == 0))
||(thisyear % 400 == 0)) monthdays[1]++;
startspaces=thisdate;
while (startspaces > 7) startspaces-=7;
startspaces = thisday - startspaces + 1;
if (startspaces < 0) startspaces+=7;
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
for (s=0;s<startspaces;s++) {
document.write("<td> </td>");
}
count=1;
while (count <= monthdays[thismonth]) {
for (b = startspaces;b<7;b++) {
linktrue=false;
document.write("<td>");
for (c=0;c<linkdays.length;c++) {
if (linkdays[c] != null) {
if ((linkdays[c][0]==thismonth + 1) && (linkdays[c][1]==count)) {
document.write("<a href=\"" + linkdays[c][2] + "\">");
linktrue=true;
      }
   }
}
if (count==thisdate) {
document.write("<font color='FF0000'><strong>");
}
if (count <= monthdays[thismonth]) {
document.write(count);
}
else {
document.write(" ");
}
if (count==thisdate) {
document.write("</strong></font>");
}
if (linktrue)
document.write("</a>");
document.write("</td>");
count++;
}
document.write("</tr>");
document.write("<tr>");
startspaces=0;
}
document.write("</table></p>");
</script>
<SCRIPT LANGUAGE="JavaScript">
var timee;
function stopClock(){
clearTimeout(timee);
}
function yourClock(){
var nd = new Date();
var h, m, s;
var time=" ";
h = nd.getHours();
m = nd.getMinutes();
s = nd.getSeconds();
if (s <=9) s="0" + s;
if (m <=9) m="0" + m;
if (h <=9) h="0" + h;
time+=h+":"+m+":"+s;
document.the_clock.the_time.value=time;
timee=setTimeout("yourClock()",1000);
}
// Stop hiding -->
</SCRIPT>
			</div>


                                                



</div>
</div>
<div id="footer">
             <p>Copy Right Reserved by Group one</p>
</div>
</BODY>


</html>