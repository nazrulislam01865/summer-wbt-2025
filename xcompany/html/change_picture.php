

<!DOCTYPE html>
<html>
<head>
    <title>Change Profile Picture</title>
    <link rel="stylesheet" type="text/css" href="../css/edit_profile.css">
</head>
<body>


    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }


        $loggedInUser = $_SESSION['username'];

        $fileErr = "";


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profile_picture'])) {
            $targetDir = "uploads/"; 
            $targetFile = $targetDir . basename($_FILES["profile_picture"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk = 1;


            $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
            if ($check === false) {
                $fileErr = "File is not an image.";
                $uploadOk = 0;
            }

            if ($_FILES["profile_picture"]["size"] > 5000000) {
                $fileErr = "Sorry, your file is too large (max 5MB).";
                $uploadOk = 0;
            }


            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($imageFileType, $allowedTypes)) {
                $fileErr = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                $fileErr .= " Your file was not uploaded.";
            } else {

                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
                    echo "<p style='color:green;'>The file " . htmlspecialchars(basename($_FILES["profile_picture"]["name"])) . " has been uploaded.</p>";
                } else {
                    $fileErr = "Sorry, there was an error uploading your file.";
                }
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
            <h2>PROFILE PICTURE</h2>
            <div class="profile-content">
                <!-- Placeholder for image - add your image here later -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" class="profile-form">
                    <input type="file" name="profile_picture" id="profile_picture">
                    <span class="error"><?php echo $fileErr;?></span><br>
                    <input type="submit" value="Submit" class="submit-btn">
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>