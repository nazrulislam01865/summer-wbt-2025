<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$loggedInUser = $_SESSION['username'];
$profileData = [
    'name' => 'Bob',
    'email' => 'bob@aiub.edu',
    'gender' => 'Male',
    'date_of_birth' => '19/09/1998'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f0f0f0;
            border-bottom: 2px solid #000;
        }
        .company-logo {
            font-size: 24px;
            font-weight: bold;
        }
        .company-logo span {
            color: #28a745;
        }
        .nav-right {
            font-size: 16px;
        }
        .container {
            display: flex;
            margin: 20px;
        }
        .account-nav {
            width: 200px;
            padding: 10px;
            border: 1px solid #000;
            margin-right: 20px;
        }
        .account-nav ul {
            list-style-type: none;
            padding: 0;
        }
        .account-nav ul li {
            padding: 5px 0;
        }
        .account-nav ul li a {
            color: #6a5acd;
            text-decoration: none;
        }
        .account-nav ul li a:hover {
            text-decoration: underline;
        }
        .profile-section {
            flex-grow: 1;
            padding: 20px;
            border: 1px solid #000;
        }
        .profile-section h2 {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .profile-content {
            display: flex;
            align-items: center;
        }
        .profile-details {
            flex-grow: 1;
        }
        .profile-details p {
            margin: 5px 0;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .change-btn {
            color: #6a5acd;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        .edit-btn {
            color: #6a5acd;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            border-top: 2px solid #000;
            margin-top: 20px;
        }
        .logout-form {
            display: inline;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-logo"><span>X</span>Company</div>
        <div class="nav-right">
            Logged in as <?php echo htmlspecialchars($loggedInUser); ?> |
            <form action="logout.php" method="post" class="logout-form">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="account-nav">
            <h3>Account</h3>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="change_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="profile-section">
            <h2>PROFILE</h2>
            <div class="profile-content">
                <div class="profile-details">
                    <p><strong>Name</strong> : <?php echo htmlspecialchars($profileData['name']); ?></p>
                    <p><strong>Email</strong> : <?php echo htmlspecialchars($profileData['email']); ?></p>
                    <p><strong>Gender</strong> : <?php echo htmlspecialchars($profileData['gender']); ?></p>
                    <p><strong>Date of Birth</strong> : <?php echo htmlspecialchars($profileData['date_of_birth']); ?></p>
                    <a href="edit_profile.php" class="edit-btn">Edit Profile</a>
                </div>
                <div class="profile-image">
                    <img src="#" alt="Profile Picture" width="150" height="150">
                    <a href="#" class="change-btn">Change</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>