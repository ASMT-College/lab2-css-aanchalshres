<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <ul class="nav-left">
                <li><a href="#home">Home</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <ul class="nav-right">
                <li><a href="#signup">Sign Up</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Content Section -->
    <div class="content" id="home">
        <h1 class="blue-title">Facebook</h1>
        <p>Explore our website to learn more about us.</p>
    </div>

   

   <!-- Sign Up Section -->
   <section id="signup" class="form-container">
        <h2>Create a New Account</h2>
        <form action="signup_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </section>
    

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Facebook</p>
    </footer>
</body>
</html>
