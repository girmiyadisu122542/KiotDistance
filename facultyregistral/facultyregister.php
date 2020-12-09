<?php
session_start();
// if (isset($_SESSION["facultyregistrar"])) {
//     $uname = $_SESSION["UserName"];
// } else {
//     header("Location: ../login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty Registrar Dashboard - KIOT</title>
    
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
                    <h1><i class="fas fa-university"></i> Faculty Registrar Dashboard</h1>
                </div>
                <div class="col-md-4">
                    <div class="user-info">
                        <i class="fas fa-user"></i> Welcome, Mohammed Jemal
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="nav-container">
        <div class="container">
            <div class="nav-buttons">
                <a href="facultyregister.php" class="nav-btn">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="updateaccount.php" class="nav-btn">
                    <i class="fas fa-key"></i> Change Password
                </a>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-eye"></i> View <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="viewregisterstudent.php">
                            <i class="fas fa-user-graduate"></i> Registered Students
                        </a>
                        <a href="viewfacultyreports.php">
                            <i class="fas fa-chart-bar"></i> Faculty Reports
                        </a>
                        <a href="viewdepartments.php">
                            <i class="fas fa-building"></i> Departments
                        </a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-search"></i> Search <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="searchstudentinfo.php">
                            <i class="fas fa-user-search"></i> Student Information
                        </a>
                        <a href="searchfaculty.php">
                            <i class="fas fa-search"></i> Faculty Records
                        </a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-cogs"></i> Manage <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="managedepartments.php">
                            <i class="fas fa-building"></i> Departments
                        </a>
                        <a href="managefaculty.php">
                            <i class="fas fa-users"></i> Faculty Members
                        </a>
                        <a href="manageregistrations.php">
                            <i class="fas fa-clipboard-list"></i> Registrations
                        </a>
                    </div>
                </div>
                
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
                        <h2 class="welcome-title">Welcome to Faculty Registrar Portal</h2>
                        <p class="welcome-text">
                            Manage faculty registrations, departments, and academic administration at the faculty level.
                        </p>
                    </div>

                    <!-- Stats Grid -->
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">1,856</div>
                            <div class="stat-label">Faculty Students</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">12</div>
                            <div class="stat-label">Departments</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">89</div>
                                                        <div class="stat-label">Faculty Members</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">156</div>
                            <div class="stat-label">Active Courses</div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="quick-actions">
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h3 class="action-title">View Registered Students</h3>
                            <p class="action-desc">View and manage all registered students in the faculty</p>
                            <a href="viewregisterstudent.php" class="action-btn">View Students</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-search"></i>
                            </div>
                            <h3 class="action-title">Search Student Info</h3>
                            <p class="action-desc">Search for specific student information and records</p>
                            <a href="searchstudentinfo.php" class="action-btn">Search Students</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="action-title">Manage Departments</h3>
                            <p class="action-desc">Oversee and manage faculty departments</p>
                            <a href="managedepartments.php" class="action-btn">Manage Depts</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="action-title">Faculty Management</h3>
                            <p class="action-desc">Manage faculty members and their assignments</p>
                            <a href="managefaculty.php" class="action-btn">Manage Faculty</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <h3 class="action-title">Registration Management</h3>
                            <p class="action-desc">Handle student registrations and approvals</p>
                            <a href="manageregistrations.php" class="action-btn">Manage Registrations</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h3 class="action-title">Faculty Reports</h3>
                            <p class="action-desc">Generate and view faculty-wide reports</p>
                            <a href="viewfacultyreports.php" class="action-btn">View Reports</a>
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
                                    <small class="text-muted">30 minutes ago</small>
                                    <p class="mb-1 small">New student registered in Computer Science</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #28a745 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">2 hours ago</small>
                                    <p class="mb-1 small">Faculty report generated successfully</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #ffc107 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">4 hours ago</small>
                                    <p class="mb-1 small">Department meeting scheduled</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #dc3545 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">1 day ago</small>
                                    <p class="mb-1 small">Registration deadline reminder sent</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Department Overview -->
                    <div class="sidebar mt-4">
                        <h3 class="sidebar-title">Department Overview</h3>
                        <div class="department-list">
                            <div class="department-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Computer Science</span>
                                <span class="badge bg-primary">245</span>
                            </div>
                            <div class="department-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Information Technology</span>
                                <span class="badge bg-info">189</span>
                            </div>
                            <div class="department-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Software Engineering</span>
                                <span class="badge bg-success">156</span>
                            </div>
                            <div class="department-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Data Science</span>
                                <span class="badge bg-warning">98</span>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Approvals -->
                    <div class="sidebar mt-4">
                        <h3 class="sidebar-title">Pending Approvals</h3>
                        <div class="approval-list">
                            <div class="approval-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">New Registrations</span>
                                <span class="badge bg-danger">12</span>
                            </div>
                            <div class="approval-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Course Changes</span>
                                <span class="badge bg-warning">8</span>
                            </div>
                            <div class="approval-item d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span class="small">Transfer Requests</span>
                                <span class="badge bg-info">5</span>
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

            // Add click handlers for department items
            const departmentItems = document.querySelectorAll('.department-item');
            departmentItems.forEach(item => {
                item.addEventListener('click', function() {
                    const deptName = this.querySelector('span').textContent;
                    // Redirect to department-specific page
                    window.location.href = `viewdepartment.php?dept=${encodeURIComponent(deptName)}`;
                });
                
                item.style.cursor = 'pointer';
                item.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = '#e9ecef';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = '#f8f9fa';
                });
            });

            // Add click handlers for approval items
            const approvalItems = document.querySelectorAll('.approval-item');
            approvalItems.forEach(item => {
                item.addEventListener('click', function() {
                    const approvalType = this.querySelector('span').textContent;
                    if (approvalType.includes('Registration')) {
                        window.location.href = 'manageregistrations.php';
                    } else if (approvalType.includes('Course')) {
                        window.location.href = 'managecoursechanges.php';
                    } else if (approvalType.includes('Transfer')) {
                        window.location.href = 'managetransfers.php';
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

