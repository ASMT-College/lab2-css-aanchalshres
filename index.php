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
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>
    </header>

<div class="content">
<div class="content-left">
<a href="index.php"><img src="img/facebook-6786210_1280.webp" alt="Facebook Logo"></a>
<h1>Connect with friends and the world around you on Facebook.</h1>
</div>  
<!---Login Form--->
<div class="content-right"></div>
<section id="login" class="form-container">
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Login</button>
        </form>
    </section>
    </div>
    </div>
    <footer>
    ©<span id="myYear"><?php echo date('Y'); ?></span> Aachal Shrestha | All Rights Reserved
    </footer>
</body>
</html>