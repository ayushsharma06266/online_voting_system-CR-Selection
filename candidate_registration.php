<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Registration - CR Selection</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body style="background-color: #fff5e6;">
    <header>
        <nav>
            <a href="#" class="logo"><img src="College_logo.png" class= "logo-img" alt="College Logo"></a>
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
            <h2 style="text-align: center; font-size: 32px;">Candidate Registration</h2>
            <form action="api/register_candidate.php" method="post" style="text-align: center;" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="input-group">
                    <label for="course">Course:</label>
                   <select class = "drop-down"  id="course_name" name="course">
			<option>      </option> 
			<option>BCA-A</option> 
  			<option>BCA-B</option>   
			<option>BCA-C</option>   
			<option>BCA-D</option>   
			<option>BCA-E</option>   

		     </select>

                </div>
                <div class="input-group">
                    <label for="session">Session:</label>
		    <select class = "drop-down" name="session">
			<option>    </option> 
			<option>2022-25</option>
                 </select>

                </div>

                <div class="input-group">
                    <label for="image">Image:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp; <input type="file" id="image"  name="image" required accept="image/*">
                </div>
                <button type="submit" class="login-btn" name="role" value="candidate">Registration</button> ,<br/><br/>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> CR Selection - Online Voting System</p>
    </footer>
</body>
</html>