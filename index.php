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
        <h1>Facebook</h1>
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
    <section id="login" class="form-container">
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Login</button>
    </section>
    <footer>Copyright@ Aachal Shrestha <span id="myYear"> <?php echo date('Y');?></span>  
    <script>
            document.getElementById('myYear').innerText = new Date().getFullYear();
        </script>
        </footer>

</body>
</html>