<?php
session_start();
   
if(isset($_SESSION["registrar"])){
   $uname= $_SESSION["registrar"];
}
else{
  header("Location: ../login.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Dashboard - KIOT</title>
    
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
            cursor: pointer;
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
        
        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            border-left: 4px solid #667eea;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: #666;
            font-size: 0.9rem;
            font-weight: 500;
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
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .welcome-title {
                font-size: 1.5rem;
            }
            
            .quick-actions {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
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
                    <h1><i class="fas fa-user-graduate"></i> Registrar Dashboard</h1>
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
                <a href="registral.php" class="nav-btn">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="assigndepartmenhead.php" class="nav-btn">
                    <i class="fas fa-user-tie"></i> Assign Department Head
                </a>
                <a href="updatestudentinfo.php" class="nav-btn">
                    <i class="fas fa-user-edit"></i> Update Student Info
                </a>
                <a href="withdrawapprove.php" class="nav-btn">
                    <i class="fas fa-check-circle"></i> Withdraw Approve
                </a>
                <a href="courseregister.php" class="nav-btn">
                    <i class="fas fa-book"></i> Course Register
                </a>
                <a href="regestercsv.php" class="nav-btn">
                    <i class="fas fa-upload"></i> Upload Student List
                </a>
                <a href="searchstudentinfo.php" class="nav-btn">
                    <i class="fas fa-search"></i> Search
                </a>
                <a href="changepassword.php" class="nav-btn">
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
                        <h2 class="welcome-title">Welcome to Registrar Portal</h2>
                        <p class="welcome-text">
                            Manage student registrations, course assignments, and academic records.
                        </p>
                    </div>

                    <!-- Stats Grid -->
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">2,456</div>
                            <div class="stat-label">Total Students</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">89</div>
                            <div class="stat-label">Pending Registrations</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">156</div>
                            <div class="stat-label">Active Courses</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">23</div>
                            <div class="stat-label">Withdraw Requests</div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="quick-actions">
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <h3 class="action-title">Update Student Info</h3>
                            <p class="action-desc">Update and manage student information</p>
                            <a href="updatestudentinfo.php" class="action-btn">Update Info</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="action-title">Assign Department Head</h3>
                            <p class="action-desc">Assign department heads to departments</p>
                            <a href="assigndepartmenhead.php" class="action-btn">Assign Head</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 class="action-title">Withdraw Approval</h3>
                            <p class="action-desc">Review and approve withdrawal requests</p>
                            <a href="withdrawapprove.php" class="action-btn">Review Requests</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <h3 class="action-title">Course Registration</h3>
                            <p class="action-desc">Manage course registrations and assignments</p>
                            <a href="courseregister.php" class="action-btn">Manage Courses</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-upload"></i>
                            </div>
                            <h3 class="action-title">Upload Student List</h3>
                            <p class="action-desc">Upload student data via CSV file</p>
                            <a href="regestercsv.php" class="action-btn">Upload CSV</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-search"></i>
                            </div>
                                                        <h3 class="action-title">Search Students</h3>
                            <p class="action-desc">Search and find student information</p>
                            <a href="searchstudentinfo.php" class="action-btn">Search Now</a>
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

                    <!-- Recent Activity -->
                    <div class="sidebar mt-4">
                        <h3 class="sidebar-title">Recent Activity</h3>
                        <div class="activity-list">
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #667eea !important;">
                                <div class="activity-content">
                                    <small class="text-muted">1 hour ago</small>
                                    <p class="mb-1 small">New student registration approved</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #28a745 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">3 hours ago</small>
                                    <p class="mb-1 small">Department head assigned to CS Department</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #ffc107 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">5 hours ago</small>
                                    <p class="mb-1 small">Course registration period opened</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #dc3545 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">1 day ago</small>
                                    <p class="mb-1 small">Withdrawal request processed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Tasks -->
                    <div class="sidebar mt-4">
                        <h3 class="sidebar-title">Pending Tasks</h3>
                        <div class="task-list">
                            <div class="task-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Withdrawal Requests</span>
                                <span class="badge bg-danger">23</span>
                            </div>
                            <div class="task-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Pending Registrations</span>
                                <span class="badge bg-warning">89</span>
                            </div>
                            <div class="task-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Course Assignments</span>
                                <span class="badge bg-info">12</span>
                            </div>
                            <div class="task-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Student Updates</span>
                                <span class="badge bg-success">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p><i class="fas fa-copyright"></i> Copy Right Reserved by Girmay Addisu</p>
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

            // Add hover effects to stat cards
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                    this.style.boxShadow = '0 8px 20px rgba(0,0,0,0.15)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 3px 10px rgba(0,0,0,0.1)';
                });
            });

            // Add click handlers for pending tasks
            const taskItems = document.querySelectorAll('.task-item');
            taskItems.forEach(item => {
                item.addEventListener('click', function() {
                    const taskText = this.querySelector('span').textContent;
                    if (taskText.includes('Withdrawal')) {
                        window.location.href = 'withdrawapprove.php';
                    } else if (taskText.includes('Registrations')) {
                        window.location.href = 'updatestudentinfo.php';
                    } else if (taskText.includes('Course')) {
                        window.location.href = 'courseregister.php';
                    } else if (taskText.includes('Student')) {
                        window.location.href = 'searchstudentinfo.php';
                    }
                });
                
                item.style.cursor = 'pointer';
                item.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = '#e9ecef';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = '#f8f9fa';
                });
            });
        });
    </script>
</body>
</html>

