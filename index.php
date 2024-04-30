<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR Selection - Online Voting System</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body style="background-color: #fff5e6;">
    <header>
        <nav>
            <a href="#" class="logo"><img class = "logo-img" src="College_logo.png" alt="College Logo"></a>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">CANDIDATES</a></li>
                <li><a href="our_team.php">OUR TEAM</a></li>
                <li><a href="index.php" class="login-btn">LOGIN/REGISTER</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2 style="text-align: center; font-size: 32px;">Welcome to CR Selection</h2>
            <hr>
        </section>
        <section>
            <h2 style="text-align: center; font-size: 24px;">Login</h2>
            <form action="api/login.php" method="post" style="text-align: center;">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn" name="role" value="voters">Login</button> <br/><br/>
<span>New Voter : &nbsp<a href="voter_registration.php" class="register-link">Register here to Vote</a> </span><br/>
<span>New Candidate : &nbsp<a href="candidate_registration.php" class="register-link">Register Here</a></span>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> CR Selection - Online Voting System</p>
    </footer>
</body>
</html>
