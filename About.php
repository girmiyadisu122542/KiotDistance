<html>
<head>
    
     
    <script language="JavaScript">
<!--
var right_now = new Date()
//-->
</script>
    
 <link rel="stylesheet" type="text/css" href="css/style.css">
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
<a href="About.php">ABOUT US</a></td><td>
<a href="contact.php">CONTACT US<A></td><td>

          <ul class="nav navbar-nav navbar-right">
           <a href="login.php"> Login</A></td>
                    </ul>
</tr>
</table>
</div>
 
<div id="maincontent">

<div class="main">
    <center> <h1> History of Distance Education </h1>
      <p>Distance education traces its origins to mid-19th century Europe and the United States. 
	The pioneers of distance education used the best technology of their day, the postal 
	to open educational opportunities to people who wanted to learn but were not able to
	People who most benefited from such correspondence education included those with 
	women who were not allowed to enroll in educational institutions open only to men,  
        and those who lived in remote regions where schools did not exist.</P></center>
</div>
<div class="right">
    
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
<p>Copy Right Reserved by Group five</p>
</div>
</BODY>
</html>