<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nike</title>
    <style>
        /* Base Reset & Fonts */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        /* Header */
        header {
            background-color: #111;
            padding: 20px 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo h1 {
            color: white;
            font-size: 1.8em;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            font-size: 1em;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ff9000;
        }

        /* Login Section */
        .login-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f4f4f4 0%, #e8e8e8 100%);
            padding: 60px 0;
        }

        .login-container {
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

        .just-do-it {
            color: #ff9000;
            font-size: 0.9em;
            margin-bottom: 20px;
            font-style: italic;
        }

        .login-title {
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

        .checkbox-group {
            display: flex;
            align-items: center;
            font-size: 0.9em;
            color: #666;
            margin-bottom: 20px;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .login-btn {
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

        .login-btn:hover {
            background-color: #ff6600;
        }

        .signup-link {
            margin-top: 20px;
            color: #666;
            font-size: 0.95em;
        }

        .signup-link a {
            color: #ff9000;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            color: #ff6600;
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background-color: #111;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <!-- Header -->
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
                    <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Login Form Section -->
    <section class="login-section">
        <div class="login-container">
            <div class="nike-logo">Nike</div>
            <div class="just-do-it">Just Do It</div>
            <h2 class="login-title">Welcome Back</h2>

            <form action="LoginLogic.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" name="submit" class="login-btn">Sign In</button>

                <div class="signup-link">
                    Don't have an account? <a href="signup.php">Sign up here</a>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Nike, Inc. All rights reserved.</p>
    </footer>

</body>
</html>
