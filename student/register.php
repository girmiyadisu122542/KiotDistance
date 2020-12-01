<!--<html>
    <head>
        <link rel="stylesheet"type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>

        <div id="header1">

            <img src="../image/4.jpg" alt="" height="200px" width="100%">
        </div>
         <fieldset><legend> Student Registration Form </legend>
<form class="form-horizontal" role="form"action=""method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">First Name:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="firstname" placeholder="Enter firstname">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Last Name:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="lastname" placeholder="Enetr your lastname">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"for="sel1">Sex:</label>
            <div class="col-sm-4">
                <select class="form-control" name="sex">
                    <option value="">Select one</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Email:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="email" placeholder="Enter your email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Id number:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Idnumber" placeholder="Enter your Id number">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"for="sel1">Nationality:</label>
            <div class="col-sm-4">
                <select class="form-control" name="Nationality">
                    <option value="">Select one</option>
                    <option value="Ethiopian">Ethiopian</option>
                    <option value="Indian">Indea</option>
                    <option value="Europia">Europen</option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"for="sel1">Department:</label>
            <div class="col-sm-4">
                <select class="form-control" name="Department">
                    <option value="">Select one</option>
                    <option value="computer since">Computer Scince</option>
                    <option value="information scince">Information Scince</option>
                    <option value="information Tecnology">Information Tecnology</option>
                </select>
            </div>
        </div> 
         <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Year:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Year" placeholder="Enter your Year">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Semister:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Semister" placeholder="Enter your Semister">
            </div>
        </div>
    <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">phone_number:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone_number">
            </div>
        </div>
        <p align="center">
            <button type="submit" class="btn btn-success"name="Register">Register</button>
            <button type="reset" class="btn btn-success"name=>cancel</button></p>
</form>
             <?php
        include("../database.php");
        if (isset($_POST['Register'])) {
         $First= $_POST['firstname'];
         $last=$_POST['lastname'];
         $Sex = $_POST['sex'];
         $email = $_POST['email'];
         $Idnumber= $_POST['Idnumber'];
         $Nationality= $_POST['Nationality'];
         $Department= $_POST['Department'];
         $Year = $_POST['Year'];
         $Semister = $_POST['Semister'];
         $phonenumber =$_POST['phone_number'];
         $query = mysql_query("INSERT INTO Student_Registration VALUES('$Idnumber','$First','$last','$Sex','$email','$phonenumber','$Department','$Nationality','$Year','$Semister')");
         if($query){
             echo 'Successfuly Student_Registration'; 
         } else {
             echo mysql_error(); 
         }
        }
        ?>
</body>
    </html>-->
