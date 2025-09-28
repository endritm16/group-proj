<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nike</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Added Nike-themed login page styling */
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .nike-logo {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: #111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .login-title {
            color: #111;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: #ff9000;
            box-shadow: 0 0 0 3px rgba(255, 144, 0, 0.1);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            text-align: left;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .checkbox-group label {
            margin-bottom: 0;
            color: #666;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;
            background: #111;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .btn-login:hover {
            background: #333;
            transform: translateY(-2px);
        }

        .signup-link {
            color: #666;
            font-size: 14px;
        }

        .signup-link a {
            color: #ff9000;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .tagline {
            color: #ff9000;
            font-size: 14px;
            font-weight: 600;
            margin-top: 20px;
            font-style: italic;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 30px 20px;
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Replaced basic Bootstrap template with Nike-themed header -->
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <i class="fab fa-nike" style="font-size: 2rem; color: white;"></i>
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php" class="active">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Redesigned login form with Nike branding and styling -->
    <div class="login-container">
        <div class="login-card">
            <div class="nike-logo">
                <i class="fab fa-nike"></i>
            </div>
            <h1 class="login-title">Welcome Back</h1>
            <p class="login-subtitle">Sign in to your Nike account</p>

            <form action="LoginLogic.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="remember" value="remember-me">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" name="submit" class="btn-login">
                    Sign In
                </button>

                <p class="signup-link">
                    Don't have an account? <a href="signup.php">Sign up here</a>
                </p>

                <p class="tagline">Just Do It.</p>
            </form>
        </div>
    </div>

    <!-- Added Nike-themed footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Nike</h3>
                <p>Just Do It.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h4>Products</h4>
                <ul>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Sale</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Size Guide</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="about.php">About Nike</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Investors</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Nike, Inc. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
