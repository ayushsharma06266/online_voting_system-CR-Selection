<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Registration - CR Selection</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body style="background-color: #fff5e6;">
    <header>
        <nav>
            <a href="#" class="logo"><img class="logo-img" src="College_logo.png" alt="College Logo"></a>
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
            <h2 style="text-align: center; font-size: 32px;">Voter Registration</h2>
            <form action="api/register_voter.php" method="post" style="text-align: center;">
                <div class="input-group">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="input-group">
                    <label for="course">Course:</label>
                    <select class="drop-down" id="course_name" name="course">
                        <option value="">Select Course</option>
                        <option value="BCA-A">BCA-A</option>
                        <option value="BCA-B">BCA-B</option>
                        <option value="BCA-C">BCA-C</option>
                        <option value="BCA-D">BCA-D</option>
                        <option value="BCA-E">BCA-E</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="session">Session:</label>
                    <select class="drop-down" name="session">
                        <option value="">Select Session</option>
                        <option value="2022-25">2022-25</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" class="login-btn" name="role" value="voter">Register</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> CR Selection - Online Voting System</p>
    </footer>
</body>
</html>
