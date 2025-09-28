<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Nike</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Added Nike-themed signup form styling */
        .signup-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f4f4f4 0%, #e8e8e8 100%);
            padding: 60px 0;
        }
        
        .signup-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }
        
        .nike-logo {
            font-size: 2.5em;
            font-weight: bold;
            color: #111;
            margin-bottom: 10px;
        }
        
        .signup-title {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
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
            font-size: 1em;
        }
        
        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #ff9000;
        }
        
        .signup-btn {
            width: 100%;
            background-color: #ff9000;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        
        .signup-btn:hover {
            background-color: #ff6600;
        }
        
        .login-link {
            margin-top: 20px;
            color: #666;
        }
        
        .login-link a {
            color: #ff9000;
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            color: #ff6600;
            text-decoration: underline;
        }
        
        .just-do-it {
            color: #ff9000;
            font-size: 0.9em;
            margin-bottom: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="logo">
                <h1>Nike</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    <section class="signup-section">
        <div class="signup-container">
            <div class="nike-logo">Nike</div>
            <div class="just-do-it">Just Do It</div>
            <h2 class="signup-title">Create Your Account</h2>
            
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                
                <button type="submit" name="submit" class="signup-btn">Create Account</button>
                
                <div class="login-link">
                    Already have an account? <a href="login.php">Sign in here</a>
                </div>
            </form>
        </div>
    </section>

     
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Company</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Subscribe to our newsletter for the latest updates and offers.</p>
                <form action="contact.php">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>

            <div class="footer-column">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon"><img src="https://i.pinimg.com/736x/84/68/5b/84685ba9637a951591040426a46da70f.jpg" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com/end.mehmeti/?next=%2F" class="social-icon"><img src="https://i.pinimg.com/originals/e5/d3/76/e5d376b99ef839fe38135eb1ffc68189.jpg" alt="Instagram"></a>
                    <a href="#" class="social-icon"><img src="linkedin-icon.png" alt="LinkedIn"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; Endrit Mehmeti. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
