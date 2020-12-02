<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIOT Distance Education Management System</title>
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
            line-height: 1.6;
            color: #333;
        }
        
        /* Header Styles */
        .header-banner {
            position: relative;
            height: 300px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
        }
        
        .header-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('image/HEADER.jpg') center/cover;
            opacity: 0.3;
            z-index: 1;
        }
        
        .header-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }
        
        .header-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .header-content p {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.9;
        }
        
        /* Navigation Styles */
        .navbar-custom {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-nav {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        
        .nav-item {
            margin: 0 1rem;
        }
        
        .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 0.8rem 1.5rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .nav-link:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        /* Main Content Styles */
        .main-content {
            padding: 4rem 0;
            background: #f8f9fa;
        }
        
        .content-card {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }
        
        .content-card:hover {
            transform: translateY(-5px);
        }
        
        .content-title {
            color: #667eea;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }
        
        .content-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }
        
        .content-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
            text-align: justify;
        }
        
        /* Features Section */
        .features-section {
            padding: 4rem 0;
            background: white;
        }
        
        .feature-card {
            text-align: center;
            padding: 2rem;
            border-radius: 15px;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 1.5rem;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .feature-text {
            color: #666;
            line-height: 1.6;
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .cta-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn-cta {
            background: white;
            color: #667eea;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            font-size: 1.1rem;
        }
        
        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: #667eea;
            text-decoration: none;
        }
        
        /* Footer Styles */
        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }
        
        .footer p {
            margin: 0;
            font-size: 1rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content h1 {
                font-size: 2.5rem;
            }
            
            .header-content p {
                font-size: 1rem;
            }
            
            .nav-item {
                margin: 0.2rem 0;
            }
            
            .content-card {
                padding: 2rem;
            }
            
            .content-title {
                font-size: 2rem;
            }
        }
        
        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body>
    <!-- Header Banner -->
    <div class="header-banner">
        <div class="header-content animate-fade-in">
            <h1><i class="fas fa-graduation-cap"></i> KIOT Distance Education</h1>
            <p>Empowering Education Through Technology - Wollo University</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewnotice.php">
                            <i class="fas fa-bell"></i> VIEW NOTICE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">
                            <i class="fas fa-info-circle"></i> ABOUT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <i class="fas fa-envelope"></i> CONTACT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-sign-in-alt"></i> LOGIN
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="content-card animate-fade-in">
                <h1 class="content-title">BACKGROUND OF ORGANIZATION</h1>
                <p class="content-text">
                    Wollo University is one of the federal universities built among a group of 2nd generation Universities in Ethiopia. Being located in the South Wollo Zone of the Amhara State, the University is designed to be a center of learning and research in a wide range of fields to meet the growing demand of trained manpower of the country. The University is at the center of an area characterized by archaeological, anthropological and historical achievements and diverse ethnic and religious groups known for their harmonious coexistence.
                </p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="feature-title">Online Learning</h3>
                        <p class="feature-text">Access course materials, assignments, and lectures from anywhere, anytime with our comprehensive online platform.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="feature-title">Multi-User System</h3>
                        <p class="feature-text">Dedicated portals for students, instructors, administrators, and staff with role-based access control.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="feature-title">Progress Tracking</h3>
                        <p class="feature-text">Monitor academic progress, view results, and track performance with detailed analytics and reports.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="cta-section">
        <div class="container">
            <h2 class="cta-title">Ready to Start Your Journey?</h2>
            <p class="cta-text">Join thousands of students already learning with KIOT Distance Education</p>
            <a href="login.php" class="btn-cta">
                <i class="fas fa-rocket"></i> Get Started Now
            </a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p><i class="fas fa-copyright"></i> Copy Right Reserved by Group One - KIOT Distance Education System</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstraps.min.js"></script>
    <script>
        // Get current date and time
        var right_now = new Date();
        
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.feature-card, .content-card').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
