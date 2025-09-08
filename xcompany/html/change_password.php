

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="../css/change_password.css">
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }


        $loggedInUser = $_SESSION['username'];


        $currentPassword = $newPassword = $confirmPassword = "";
        $currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $currentPassword = test_input($_POST["current_password"]);
            if (empty($currentPassword)) {
                $currentPasswordErr = "Current password is required";
            } elseif ($currentPassword !== "admin123") { 
                $currentPasswordErr = "Incorrect current password";
            }


            $newPassword = test_input($_POST["new_password"]);
            if (empty($newPassword)) {
                $newPasswordErr = "New password is required";
            } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $newPassword)) {
                $newPasswordErr = "Password must be at least 8 characters with letters and numbers";
            }

            $confirmPassword = test_input($_POST["confirm_password"]);
            if (empty($confirmPassword)) {
                $confirmPasswordErr = "Please confirm your new password";
            } elseif ($newPassword !== $confirmPassword) {
                $confirmPasswordErr = "Passwords do not match";
            }

            if (empty($currentPasswordErr) && empty($newPasswordErr) && empty($confirmPasswordErr)) {

                echo "<p style='color:green;'>Password changed successfully!</p>";
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
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
            <h2>CHANGE PASSWORD</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="profile-form">
                <p><label>Current Password</label> : <input type="password" name="current_password" value="">
                    <span class="error"><?php echo $currentPasswordErr;?></span></p>
                <p><label>New Password</label> : <input type="password" name="new_password" value="">
                    <span class="error"><?php echo $newPasswordErr;?></span></p>
                <p><label>Confirm Password</label> : <input type="password" name="confirm_password" value="">
                    <span class="error"><?php echo $confirmPasswordErr;?></span></p>
                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>