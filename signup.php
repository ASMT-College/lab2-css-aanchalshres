<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="nav-left">
                <li><a href="#home">Home</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <ul class="nav-right">
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="index.php">Login</a></li>
            </ul>
        </nav>
    </header>
   
    <div class="content">
    <section id="signup" class="form-container">
        <h2>Create a New Account</h2>
        <form action="signup_process.php" method="post">
            <input type="text" placeholder="Full Name" required>
            <input type="date" placeholder="Date of Birth" required>
            <select required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="submit" value="Sign Up"><br>
            
            <a href="index.php" style="text-align: center;">Already have an account?</a>
        </form>
    </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Facebook</p>
    </footer>
</body>
</html>
