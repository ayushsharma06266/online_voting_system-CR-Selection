<?php
session_start();
include 'api/connection.php';

// Check if user data is set in session
if(isset($_SESSION['user_data'])) {
    $user_data = $_SESSION['user_data'];
} 

// Fetch candidate data from the database
$candidate_query = mysqli_query($conn, "SELECT * FROM candidates");
$candidate_data = mysqli_fetch_all($candidate_query, MYSQLI_ASSOC);

if ($user_data['status'] == 0) {
    $status = '<b style="color: red">Not Voted</b>'; 
} else {
    $status ='<b style="color: green">Voted</b>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CR Selection</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <nav>
            <a href="#" class="logo"><img class="logo-img" src="College_logo.png" alt="College Logo"></a>
            <ul>
            <li><a href="index.php">HOME</a></li>
                <li><a href="#">CANDIDATES</a></li>
                <li><a href="our_team.php">OUR TEAM</a></li>
                <li><a href="logout.php" class="login-btn">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="user-info">
            <section>
                <h3>User Information</h3>
                <p>Name: <?php echo $user_data['full_name']; ?></p>
                <p>Course: <?php echo $user_data['course']; ?></p>
                <p>Session: <?php echo $user_data['session']; ?></p>
                <p>Username: <?php echo $user_data['username']; ?></p>
                <p>Status: <?php echo $status; ?></p>
            </section>
        </div>
        <main class="candidate-list">
            <section>
                <h2>List of Candidates</h2>
                <?php 
                if(!empty($candidate_data)){
                    foreach($candidate_data as $candidate){
                        ?>
                        <div class="candidate">
                            <div class="candidate-details">
                                <div class="candidate-image">
                                    <img src="http://localhost/PROJECT/uploads/<?php echo $candidate['image']; ?>" alt="Candidate">
                                </div>
                                <div class="candidate-info">
                                    <h3><?php echo $candidate['full_name']; ?></h3>
                                    <p>Course: <?php echo $candidate['course']; ?></p>
                                    <p>Session: <?php echo $candidate['session']; ?></p>
                                    <p>Votes: <?php echo $candidate['votes']; ?></p>
                                </div>
                                <form action="http://localhost/PROJECT/api/vote.php" method="post">
                                    <input type="hidden" name="votes_count" value="<?php echo $candidate['votes'] ?>">
                                    <input type="hidden" name="votes_count_id" value="<?php echo $candidate['id'] ?>">
                                    <?php 
                                    if ($user_data['status'] == 0) {
                                        ?>
                                        <input type="submit" name="vote" value="Vote" class="vote-btn">
                                        <?php
                                    }
                                    else {
                                    ?>
                                    <button disabled type="button" name="vote" value="Voted" id="button" >Voted</button>
                                    <?php
                                }
                                ?>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "No candidate data found.";
                }
                ?>
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> CR Selection - Online Voting System</p>
    </footer>
</body>
</html>
