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
<div class="content-left">
    <div id="logo">
    <a href="index.php"><img src="img/facebook-6786210_1280.webp" alt="Facebook Logo"></a>
    <h1>Connect with friends and the<br>
        world around you on Facebook.</h1>
    </div>    
</div>  
<!---Login Form--->
<div class="content-right">
<section id="login" class="form-container">
        <form action="login.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email or Phone number" required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Log In"><br>
            <a href="forgot-password.php">Forgot Password?</a>
            <button class="create"><a href="signup.php">Create New Account</a></button>
        </form>
    </section>
</div>
    </div>
    
    <footer>
    ©<span id="myYear"><?php echo date('Y'); ?></span> Aachal Shrestha | All Rights Reserved
    </footer>
</body>
</html>