<?php
session_start();
if (isset($_SESSION["student"]) && ($_SESSION['studentid'])) {
    $student_id = $_SESSION['studentid'];
    $username = $_SESSION["student"];
} else {
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard - KIOT</title>
    
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
            background: #f8f9fa;
            color: #333;
        }
        
        /* Header */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin: 0;
        }
        
        .user-info {
            text-align: right;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Navigation */
        .nav-container {
            background: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .nav-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
        }
        
        .nav-btn {
            background: #667eea;
            color: white;
            border: none;
            padding: 0.6rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        
        .nav-btn:hover {
            background: #5a67d8;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .nav-btn.logout {
            background: #dc3545;
        }
        
        .nav-btn.logout:hover {
            background: #c82333;
        }
        
        /* Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 1;
            top: 100%;
            left: 0;
            margin-top: 5px;
            border: 1px solid #e9ecef;
            padding: 0.5rem 0;
        }
        
        .dropdown-content a {
            color: #333;
            padding: 0.6rem 1rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            border-radius: 0;
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .dropdown-content a:hover {
            background-color: #f8f9fa;
            color: #667eea;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        /* Main Content */
        .main-content {
            padding: 2rem 0;
            min-height: 60vh;
        }
        
        .welcome-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .welcome-title {
            color: #667eea;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .welcome-text {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        
        .department-info {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem;
            border-radius: 10px;
            margin-top: 1rem;
            text-align: center;
            font-weight: 500;
        }
        
        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .action-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-top: 4px solid #667eea;
        }
        
        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .action-icon {
            font-size: 2.5rem;
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        .action-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }
        
        .action-desc {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .action-btn {
            background: #667eea;
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .action-btn:hover {
            background: #5a67d8;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        
        /* Sidebar */
        .sidebar {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: fit-content;
        }
        
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .quick-links {
            list-style: none;
            padding: 0;
        }
        
        .quick-links li {
            margin-bottom: 0.8rem;
        }
        
        .quick-links a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #667eea;
            text-decoration: none;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        
        .quick-links a:hover {
            background: #f0f2ff;
            color: #5a67d8;
            text-decoration: none;
        }
        
        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .nav-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .dropdown {
                width: 100%;
                max-width: 300px;
            }
            
            .dropdown-content {
                position: static;
                display: none;
                box-shadow: none;
                background: #f8f9fa;
                margin-top: 0.5rem;
                border-radius: 8px;
                width: 100%;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .welcome-title {
                font-size: 1.5rem;
            }
            
            .quick-actions {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="fas fa-user-graduate"></i> Student Dashboard</h1>
                </div>
                <div class="col-md-4">
                    <div class="user-info">
                        <i class="fas fa-user"></i> Welcome, <?php echo $_SESSION["UserName"]; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="nav-container">
        <div class="container">
            <div class="nav-buttons">
                <a href="student.php" class="nav-btn">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="Givefeedback.php" class="nav-btn">
                    <i class="fas fa-comment"></i> Give Feedback
                </a>
                <a href="withdrawalrequestnew.php" class="nav-btn">
                    <i class="fas fa-sign-out-alt"></i> Withdrawal Request
                </a>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-download"></i> Download <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="downloadassignmentquestion.php">
                            <i class="fas fa-file-alt"></i> Assignment Questions
                        </a>
                        <a href="downloadcoursemat.php">
                            <i class="fas fa-book"></i> Course Materials
                        </a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-eye"></i> View <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="viewregistrationsleep.php">
                            <i class="fas fa-calendar"></i> Registration Sleep
                        </a>
                        <a href="viewcourseresult.php">
                            <i class="fas fa-chart-bar"></i> Course Results
                        </a>
                    </div>
                </div>
                
                <a href="Uploadassignmentanswer.php" class="nav-btn">
                    <i class="fas fa-upload"></i> Upload Assignment
                </a>
                <a href="updateaccount.php" class="nav-btn">
                    <i class="fas fa-key"></i> Change Password
                </a>
                <a href="../logout.php" class="nav-btn logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Welcome Card -->
                    <div class="welcome-card">
                        <h2 class="welcome-title">Welcome to Student Portal</h2>
                        <p class="welcome-text">
                            Access your courses, assignments, and academic resources.
                        </p>
                        <div class="department-info">
                            <i class="fas fa-building"></i> Department: <?php echo $_SESSION['department']; ?>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="quick-actions">
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-download"></i>
                            </div>
                            <h3 class="action-title">Download Materials</h3>
                            <p class="action-desc">Access course materials and assignments</p>
                            <a href="downloadcoursemat.php" class="action-btn">Download</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-upload"></i>
                            </div>
                            <h3 class="action-title">Submit Assignment</h3>
                            <p class="action-desc">Upload your completed assignments</p>
                            <a href="Uploadassignmentanswer.php" class="action-btn">Upload</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="action-title">View Results</h3>
                            <p class="action-desc">Check your course results</p>
                            <a href="viewcourseresult.php" class="action-btn">View Results</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <h3 class="action-title">Give Feedback</h3>
                            <p class="action-desc">Provide feedback on courses</p>
                            <a href="Givefeedback.php" class="action-btn">Give Feedback</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <h3 class="sidebar-title">Quick Links</h3>
                        <ul class="quick-links">
                            <li>
                                <a href="http://www.asu.edu.et" target="_blank">
                                    <i class="fas fa-university"></i> KIOT Website
                                </a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="http://www.gmail.com" target="_blank">
                                    <i class="fas fa-envelope"></i> Gmail
                                </a>
                            </li>
                            <li>
                                <a href="http://www.google.com" target="_blank">
                                    <i class="fab fa-google"></i> Google
                                </a>
                            </li>
                            <li>
                                <a href="http://www.youtube.com" target="_blank">
                                    <i class="fab fa-youtube"></i> YouTube
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p><i class="fas fa-copyright"></i> Copy Right Reserved by Group Five</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <script>
        // Add click handlers for action cards
        document.addEventListener('DOMContentLoaded', function() {
            const actionCards = document.querySelectorAll('.action-card');
            actionCards.forEach(card => {
                card.addEventListener('click', function() {
                    const btn = this.querySelector('.action-btn');
                    if (btn) {
                        window.location.href = btn.href;
                    }
                });
            });
        });
    </script>
</body>
</html>

