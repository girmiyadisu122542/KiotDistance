<?php
session_start();
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KIOT Distance Education</title>
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }
        
        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 2rem;
        }
        
        .login-header h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .login-header p {
            opacity: 0.9;
            font-size: 0.9rem;
        }
        
        .login-form {
            padding: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #333;
            font-size: 0.9rem;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .form-select {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
            cursor: pointer;
        }
        
        .form-select:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
        
        .btn-reset {
            width: 100%;
            background: #6c757d;
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-reset:hover {
            background: #5a6268;
        }
        
        .forgot-password {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .forgot-password a {
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
        }
        
        .alert {
            padding: 0.8rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .alert-info {
            background: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
        }
        
        .home-link {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .home-link:hover {
            background: rgba(255,255,255,0.3);
            color: white;
            text-decoration: none;
        }
        
        @media (max-width: 480px) {
            .login-container {
                margin: 10px;
            }
            
            .login-header {
                padding: 1.5rem;
            }
            
            .login-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Home Link -->
    <a href="index.php" class="home-link">
        <i class="fas fa-home"></i> Back to Home
    </a>

    <div class="login-container">
        <!-- Login Header -->
        <div class="login-header">
            <h2><i class="fas fa-graduation-cap"></i> KIOT Login</h2>
            <p>Distance Education Management System</p>
        </div>

        <!-- Login Form -->
        <div class="login-form">
            <?php
            // Display error messages
            if (isset($_POST['login'])) {
                $uname = $_POST["username"];
                $password = $_POST["password"];
                $privilage = $_POST["usertype"];
                $result = mysqli_query($conn, "Select * from account where UserName='$uname' and Password='$password'");
                
                if (mysqli_num_rows($result) >= 1) {
                    $row = mysqli_fetch_array($result);
                    $_SESSION["UserName"] = $row["UserName"];
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
                            echo '<div class="alert alert-danger">Incorrect UserName and Password</div>';
                        }
                    } else {
                        echo '<div class="alert alert-info">Your Account is Deactivated. Please Contact The Admin.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">Password or Username incorrect</div>';
                }
            }
            ?>

            <form method="post" action="">
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-user"></i> Username
                    </label>
                    <input type="text" 
                           name="username" 
                           class="form-control" 
                           pattern="[a-zA-Z]+" 
                           title="Please insert only letters" 
                           required 
                           placeholder="Enter your username">
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-lock"></i> Password
                    </label>
                    <input type="password" 
                           name="password" 
                           class="form-control" 
                           pattern="[a-zA-Z0-9]+" 
                           title="Insert numbers and letters" 
                           required 
                           placeholder="Enter your password">
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-user-tag"></i> User Type
                    </label>
                    <select name="usertype" class="form-select" required>
                        <option value="">Select User Type</option>
                        <option value="administrator">Administrator</option>
                        <option value="finance">Finance Officer</option>
                        <option value="registrar">Registrar</option>
                        <option value="instructor">Instructor</option>
                        <option value="departmenthead">Department Head</option>
                        <option value="facultyregistrar">Faculty Registrar</option>
                        <option value="student">Student</option>
                    </select>
                </div>

                <button type="submit" name="login" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>

                <button type="reset" class="btn-reset">
                    <i class="fas fa-undo"></i> Reset
                </button>
            </form>

            <div class="forgot-password">
                <a href="forgetPassword.php">
                    <i class="fas fa-key"></i> Forgot Password?
                </a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
