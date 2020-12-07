<?php
session_start();
if(isset($_SESSION["finance"])){
   $uname= $_SESSION["UserName"] ;
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
    <title>Finance Officer Dashboard - KIOT</title>
    
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
                    <h1><i class="fas fa-calculator"></i> Finance Officer Dashboard</h1>
                </div>
                <div class="col-md-4">
                    <div class="user-info">
                        <i class="fas fa-user"></i> Welcome,<?php echo isset($_SESSION["UserName"])?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="nav-container">
        <div class="container">
            <div class="nav-buttons">
                <a href="finance.php" class="nav-btn">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="viewpayment.php" class="nav-btn">
                    <i class="fas fa-eye"></i> View Payments
                </a>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-money-bill-wave"></i> Payments <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="viewpayment.php">
                            <i class="fas fa-list"></i> View All Payments
                        </a>
                        <a href="pendingpayments.php">
                            <i class="fas fa-clock"></i> Pending Payments
                        </a>
                        <a href="completedpayments.php">
                            <i class="fas fa-check-circle"></i> Completed Payments
                        </a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <a href="#" class="nav-btn">
                        <i class="fas fa-chart-bar"></i> Reports <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="financialreport.php">
                            <i class="fas fa-file-alt"></i> Financial Reports
                        </a>
                        <a href="paymenthistory.php">
                            <i class="fas fa-history"></i> Payment History
                        </a>
                    </div>
                </div>
                
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
                        <h2 class="welcome-title">Welcome to Finance Portal</h2>
                        <p class="welcome-text">
                            Manage student payments, financial records, and generate reports.
                        </p>
                    </div>

                    <!-- Stats Grid -->
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">1,234</div>
                            <div class="stat-label">Total Payments</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">56</div>
                            <div class="stat-label">Pending Payments</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">$45,678</div>
                            <div class="stat-label">Total Amount</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Collection Rate</div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="quick-actions">
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="action-title">View Payments</h3>
                                                        <p class="action-desc">View all student payment records</p>
                            <a href="viewpayment.php" class="action-btn">View Payments</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3 class="action-title">Pending Payments</h3>
                            <p class="action-desc">Check pending payment requests</p>
                            <a href="pendingpayments.php" class="action-btn">View Pending</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="action-title">Financial Reports</h3>
                            <p class="action-desc">Generate financial reports and analytics</p>
                            <a href="financialreport.php" class="action-btn">Generate Reports</a>
                        </div>
                        
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-history"></i>
                            </div>
                            <h3 class="action-title">Payment History</h3>
                            <p class="action-desc">View complete payment transaction history</p>
                            <a href="paymenthistory.php" class="action-btn">View History</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <h3 class="sidebar-title">Quick Links</h3>
                        <ul class="quick-links">
                            <li>
                                <a href="http://www.wu.edu.et" target="_blank">
                                    <i class="fas fa-university"></i> WU Website
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
                                    <small class="text-muted">2 hours ago</small>
                                    <p class="mb-1 small">Payment received from Student ID: 12345</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #28a745 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">5 hours ago</small>
                                    <p class="mb-1 small">Monthly report generated successfully</p>
                                </div>
                            </div>
                            <div class="activity-item mb-3 p-2 border-start border-3" style="border-color: #ffc107 !important;">
                                <div class="activity-content">
                                    <small class="text-muted">1 day ago</small>
                                    <p class="mb-1 small">Payment reminder sent to 15 students</p>
                                </div>
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
        });
    </script>
</body>
</html>

