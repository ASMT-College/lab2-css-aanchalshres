<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <form>
            <label for="fullname">Full Name</label> 
            <input type="text" placeholder="Full Name" required>
            <label for="dob">Date of Birth</label>
            <input type="date" placeholder="Date of Birth" required>
            <select required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="email">Email</label>
            <input type="email" placeholder="Email" required>
            <label for="password">Password</label>
            <input type="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </section>
    </section>
    <footer>Copyright@ Aachal Shrestha <span id="myYear"> <?php echo date('Y');?></span>  
    <script>
            document.getElementById('myYear').innerText = new Date().getFullYear();
        </script>
        </footer>
</body>
</html>
