<?php
session_start();
if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
	 $student_id = $_SESSION['studentid'];
	 $username = $_SESSION["student"];
} else {
	 header("Location: ../login.php");
}

if (isset($_SESSION['studentid']) && $_SESSION["student"]) {
	 $student_id = $_SESSION['studentid'];
}
?>
<html>
	 <head>
		  <link rel="stylesheet" href="../css/bootstrap.min.css">
		  <script src="../js/jquery.min.js"></script>
		  <script src="../js/bootstrap.min.js"></script>
<!--        <script src="../js/print.js" type="text/javascript"></script>-->
		  <link href="../css/student.css" rel="stylesheet" type="text/css"/>
		  <style>#printRicit{background-color: red;}</style>
			<script type="text/javascript">
				function fun() {
					 var letters = /^[A-Za-z]/;
					 var numbers = /^[0-9]/;
					 var minlength = '13';
					 var account = document.fom.account.value;
					 var pwd = document.fom.pwd.value;
					 if (account == '' || account == 'null') {
						  document.getElementById('b1').innerHTML = '<font color="red"> Please fill your account number??</font>';
						  document.getElementById('b2').innerHTML = '';
						  document.fom.account.focus();
						  return false;
					 } else if (account.length != minlength) {
						  document.getElementById("b1").innerHTML = "<font color='red'>The length must be  13 characters, please try again??</font>"
						  document.getElementById('b2').innerHTML = '';
						  document.fom.account.focus();
						  return false;
					 }
					  if (pwd == '' || pwd == 'null') {
						  document.getElementById("b2").innerHTML = "<font color='red'>plese fill your password??</font>"
						  document.getElementById('b1').innerHTML = '';
						  document.fom.pwd.focus();
						  return false;
					 }
					 else {
						  return true;
					 }
				}

		  </script>
			<script type="text/javascript">
				function funn() {
					 var letters = /^[A-Za-z]/;
					 var numbers = /^[0-9]/;
					 var minlength = '13';
					 var account = document.fom.account.value;
					 var pwd = document.fom.pwd.value;
					 if (account == '' || account == 'null') {
						  document.getElementById('b1').innerHTML = '<font color="red"> Please fill your account number??</font>';
						  document.getElementById('b2').innerHTML = '';
						  document.fom.account.focus();
						  return false;
					 } else if (account.length != minlength) {
						  document.getElementById("b1").innerHTML = "<font color='red'>The length must be  13 characters, please try again??</font>"
						  document.getElementById('b2').innerHTML = '';
						  document.fom.account.focus();
						  return false;
					 }
					  if (pwd == '' || pwd == 'null') {
						  document.getElementById("b2").innerHTML = "<font color='red'>plese fill your password??</font>"
						  document.getElementById('b1').innerHTML = '';
						  document.fom.pwd.focus();
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
				<img src="../image/STU.PNG" alt=""width="100%" height="70px"/>
				<div class="container-fluid">
					 <ul class="nav navbar-nav">
						  <div class="btn-group btn-group-justified">
								<div class="btn-group">
									 <a href="student.php"> <button type="button" class="btn btn-warning">Home</button></a>
								</div>
								<div class="btn-group">
									 <a href="Givefeedback.php"><button type="button" class="btn btn-warning">GiveFeedback</button></a>
								</div>
								<div class="btn-group">
									 <a href="withdrawalrequestnew.php"><button type="button" class="btn btn-warning">Withdrawal Request</button></a>
								</div>
								<div class="btn-group">
									 <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
										  Download <span class="caret"></span></button>
									 <ul class="dropdown-menu" role="menu">
										  <li><a href="downloadassignmentquestion.php">Assignment question</a></li>
										  <li><a href="downloadcoursemat.php">course material</a></li>

									 </ul>
								</div>
								<div class="btn-group">
									 <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
										  View <span class="caret"></span></button>
									 <ul class="dropdown-menu" role="menu">
										  <li><a href="viewcourseresult.php">Registration Sleep</a></li>
										  <li><a href="viewcourseresult.php">Course Result</a></li>

									 </ul>
								</div>

								<div class="btn-group">

									 <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
										  Upload <span class="caret"></span></button>
									 <ul class="dropdown-menu" role="menu">
										  <li><a href="Uploadassignmentanswer.php">Assignment answer</a></li>
									 </ul>
								</div>
								<div class="btn-group">
									 <li><a href="updateaccount.php"><button type="button" class="btn btn-warning">Change Password</button></a></li>
								</div>
								<div class="btn-group">
									 <li><a href="../logout.php"> <button type="button" class="btn btn-warning">Logout</button></a></li>       </
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
<a class="btn btn-default" href="student.php">Back </a>
</div>
<h2> Well come to view registration page</h2>
						  <?php
						  include '../database.php';
						  $depid = $_SESSION['department'];
						  $stud_id = $_SESSION['studentid'];
						  $student = mysqli_query($conn,"select * from student where Student_Id='$stud_id'");
						  $stu = mysqli_fetch_assoc($student);
						  $classYear = $stu['Classyear'];
						  $ret1 = mysqli_query($conn,"select * from department where DEPARTEMENT_ID='$depid'");
						  $row1 = mysqli_fetch_assoc($ret1);
						  $dep = $row1['DEPARTMENT_NAME'];
						  $currentdate = date("Y-m-d");


						  $ret = mysqli_query($conn,"select * from course where DEPARTEMENT='$dep' and YEAR='$classYear' and expiredate >= '$currentdate'");
						  if (mysqli_num_rows($ret) > 0) {
						  echo '<table width="80%" border="1"><tr><th>Cource Code</th><th>course Title</th><th>Cridit hr</th><th>ECTS</th><th>Total Cost per Course</th><th>Lec hr</th><th>Lab hr</th><th>Tut</th></tr>';
						  $sum = 0;
						  $sum1 = 0;
						  $sum2 = 0;
						  while ($row = mysqli_fetch_array($ret)) {
						  $var1 = $row['CREDITHR'];
						  $var2 = $row['ECTS'];
						  $vary2 = $row['cost prise per crh'];
						  $sum = $sum + $var1;
						  $sum1 = $sum1 + $var2;
						  $sum2 = $sum2 + $vary2;

						  echo '<tr><td>' . $row['COURSE_CODE'] . '</td>';
						  echo '<td>' . $row['TITLE'] . '</td>';
						  echo '<td>' . $row['CREDITHR'] . '</td>';
						  echo '<td>' . $row['ECTS'] . '</td><td>' . $row['cost prise per crh'] . '</td>';
						  echo '<td>' . $row['LECHER_HOUR'] . '</td>';
						  echo '<td>' . $row['LAB_HOUR'] . '</td>';
						  echo '<td>' . $row['TUR'] . '</td>';
						  echo '</tr>';
						  }
						  echo '<tr><td></td><td>Tottal</td><td>' . $sum . '</td><td>' . $sum1 . '</td><td>' . $sum2 . ' bir</td></tr>';
						  $exp = mysqli_query($conn,"select * from course where DEPARTEMENT='$dep' and YEAR='$classYear' and expiredate >= '$currentdate'");
						  $row3 = mysqli_fetch_assoc($exp);
						  echo '<div class="alert alert-success">The Expeird Date for Registration is ' . $row3['expiredate'] . '</div>';
						  echo '</table>';
						  ?>
<form method="post">
<p align="center"><br>
<button type="submit" class="btn btn-success" name="veiwacc">View Current Balance</button>  
<button type="submit" class="btn btn-success"name="register">Register Now</button>  
<a href="viewregistrationsleep.php" role="button" class="btn btn-success"name="register">Cancel</a>
</p><br><br>
</form>

								<?php
								} else {
								echo '<div class="alert alert-success">The Registration Date is Expired.</div>';
								}
								if (isset($_POST['veiwacc'])) {
								?>
								<form class="form-horizontal" method="POST"role="form" action=""name="fom" onsubmit="return funn();">
								<table width="60%">

								<tr>
								<td><br>Bank Account Number:</td>
								<td><br><input type="text" name="account" class="form-control"><span id="b1"></span><br></td>
								</tr>
								<tr>
								<td><br>Bank Account Password:</td>
								<td><br><input type="text" name="pwd" class="form-control"><span id="b2"></span><br></td>
								</tr>
								</table>
								<p align="center"><br>
								<button type="submit" class="btn btn-success" name="view">View BAlance</button>  
								</p><br>
								</form>   
								</div>

								<?php
								}
								if(isset($_POST['view'])){
								$accnum = $_POST['account'];
								$pass = $_POST['pwd'];
								$queryA = mysqli_query($conn,"select * from bankaccount where accountnum='$accnum'");
								if(mysqli_num_rows($queryA) > 0){
								$queryB = mysqli_query($conn,"select * from bankaccount where accountnum='$accnum' and password='$pass'");
								$rowB = mysqli_fetch_assoc($queryB);
								if(mysqli_num_rows($queryB) > 0){
								echo 'Dear Customer Currently You have '.$rowB['balance'];
								} else {
								echo 'your password is not correct please tray again';  
								}
								} else {
								echo ' Your Bank Account number is not valid.';  
								}
								}
								?>
								<?php
								if (isset($_POST['register'])) {
								?>
								<div class="well">
								<form class="form-horizontal" method="POST"role="form" action=""name="fom" onsubmit="return fun();">
								<table width="60%">

								<tr>
								<td><br>Bank Account Number:</td>
								<td><br><input type="text" name="account" class="form-control"><span id="b1"></span><br></td>
								</tr>
								<tr>
								<td><br>Bank Account Password:</td>
								<td><br><input type="text" name="pwd" class="form-control"><span id="b2"></span><br></td>
								</tr>
								</table>
								<p align="center"><br>
								<button type="submit" class="btn btn-success"name="save">Submit</button>  
								<a href="viewregistrationsleep.php" role="button" class="btn btn-success"name="register">Cancel</a>
								</p><br>
								</form>   
								</div>
								<?php
								}
				 if(isset($_POST['save'])) {
								$sid = $_SESSION['studentid'];
								$departmentid = $_SESSION["department"];
								$depname = mysqli_query($conn,"select * from department where DEPARTEMENT_ID='$departmentid'");
								$sos = mysqli_fetch_assoc($depname);
								$depar = $sos['DEPARTMENT_NAME'];
								$bankacc = $_POST['account'];
								$pass = $_POST['pwd'];
								$date = date("Y-m-d");
								$sum2;
								$student = mysqli_query($conn,"select * from student_registration where Student_Id='$sid'");
								if (mysqli_num_rows($student) > 0) {
								$pop = mysqli_fetch_assoc($student);
								$cyear = $pop['classyear'];
								$acadamicyear = $pop['Year'];
								$fname = $pop['FirstName'];
								$lname = $pop['LastName'];

								$checkaccountnum = mysqli_query($conn,"select * from bankaccount where accountnum='$bankacc'");
								if (mysqli_num_rows($checkaccountnum) > 0) {
								$checkaccountpass = mysqli_query($conn,"select * from bankaccount where accountnum='$bankacc' and password='$pass'");
								if (mysqli_num_rows($checkaccountpass) > 0) {
								$bank = mysqli_fetch_assoc($checkaccountpass);
								$balance = $bank['balance'];
								if ($balance >= $sum2) {
								$newbalance = $balance - $sum2;
								$asubalance = mysqli_query($conn,"select * from bankaccount where accountnum='1000012131415'");
								$asu = mysqli_fetch_assoc($asubalance);
								$asunewbalance = $asu['balance'] + $sum2;
								$insertstudent = mysqli_query($conn,"update student_registration set Year='$acadamicyear',classyear='$cyear',costprice='$sum2',status='1',registerddate='$date' where Student_Id='$sid'");
								echo mysqli_error($conn);
								$studentaccount = mysqli_query($conn,"update bankaccount set balance='$newbalance' where accountnum='$bankacc'");
								$asuaccount = mysqli_query($conn,"update bankaccount set balance='$asunewbalance' where accountnum='1000012131415'");
								echo mysqli_error($conn);
								if ($insertstudent and $studentaccount and $asuaccount) {
								echo 'Successfuly Registered.';
								echo '<button class="btn btn-success" type="submit" onclick="return print()">Print Ricit</button>';
								echo '<div id="printRicit"><div class="alert alert-success">';
								echo '<h3>Assosa Unverstiy Distance Education</h3><br><br>';
								echo 'Student Full Name: ' . $fname . ' ' . $lname . '<br>';
								echo 'Department: ' . $depar . ' <br>';
								echo 'Bank Account Number: ' . $bankacc . ' <br>';
								echo 'Class Year: ' . $cyear . '<br>';
								echo 'Registerd Date: ' . $date . '<br>';
								echo 'Reson for Payment: For regestering to Assosa Unversty.<br>';
								echo '</div></div>';
								} else {
								echo mysqli_error($conn) . 'Somting is wrong';
								}
								} else {
								echo 'Your Account Has not enough amount of many.';
								}
								} else {
								echo 'Your Account password is not Correct pleas tray Again.';
								}
								} else {
								echo 'Your Account Number is not Exist please try Again.';
								}
								} else {
								echo 'Your Interd Id is not Valid please try Again.';
								}
								}
								?>
								</div>
								<?php
								?>
						</div>
						</div>

<footer class="container-fluid footer">
<p>Copy Right Reserved by Girmay Addisu</p>
</footer>

</body>
</html>

