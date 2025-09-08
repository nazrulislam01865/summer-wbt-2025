
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xCompany - Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <?php
        session_start();
        $loggedInUser = $_SESSION['username'];
    ?>
    <div class="header">
        <div class="companyName"><span>X</span>company</div>
        <div class="nav">
            Logged in as <?php echo htmlspecialchars($loggedInUser); ?> | <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <h3>Account</h3>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="change_profile_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Welcome <?php echo htmlspecialchars($loggedInUser); ?></h2>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2017</p>
    </div>
</body>
</html>