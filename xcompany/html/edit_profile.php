<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$loggedInUser = $_SESSION['username'];
$name = $email = $gender = $dateOfBirth = "";
$nameErr = $emailErr = $genderErr = $dateOfBirthErr = "";

$profileData = [
    'name' => 'Bob',
    'email' => 'bob@aiub.edu',
    'gender' => 'Male',
    'date_of_birth' => '23/12/1999'
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
        if (!in_array($gender, ['Male', 'Female', 'Other'])) {
            $genderErr = "Invalid gender selection";
        }
    }


    if (empty($_POST["date_of_birth"])) {
        $dateOfBirthErr = "Date of Birth is required";
    } else {
        $dateOfBirth = test_input($_POST["date_of_birth"]);
        $datePattern = '/^(\d{2})\/(\d{2})\/(\d{4})$/';
        if (!preg_match($datePattern, $dateOfBirth)) {
            $dateOfBirthErr = "Date must be in dd/mm/yyyy format";
        } else {
            $parts = explode('/', $dateOfBirth);
            $day = (int)$parts[0];
            $month = (int)$parts[1];
            $year = (int)$parts[2];
            if (!checkdate($month, $day, $year) || $year < 1900 || $year > date('Y')) {
                $dateOfBirthErr = "Invalid date";
            }
        }
    }

    // If no errors, update profile data (for demonstration, we'll just display success)
    if (empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($dateOfBirthErr)) {
        $profileData['name'] = $name;
        $profileData['email'] = $email;
        $profileData['gender'] = $gender;
        $profileData['date_of_birth'] = $dateOfBirth;
        echo "<p style='color:green;'>Profile updated successfully!</p>";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/edit_profile.css">
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
            <h2>EDIT PROFILE</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="profile-form">
                <p><label>Name</label> : <input type="text" name="name" value="<?php echo htmlspecialchars($profileData['name']); ?>">
                    <span class="error"><?php echo $nameErr;?></span></p>
                <p><label>Email</label> : <input type="text" name="email" value="<?php echo htmlspecialchars($profileData['email']); ?>">
                    <span class="error"><?php echo $emailErr;?></span></p>
                <p><label>Gender</label> : 
                    <input type="radio" name="gender" value="Male" <?php if ($profileData['gender'] == 'Male') echo "checked"; ?>> Male
                    <input type="radio" name="gender" value="Female" <?php if ($profileData['gender'] == 'Female') echo "checked"; ?>> Female
                    <input type="radio" name="gender" value="Other" <?php if ($profileData['gender'] == 'Other') echo "checked"; ?>> Other
                    <span class="error"><?php echo $genderErr;?></span></p>
                <p><label>Date of Birth</label> : <input type="text" name="date_of_birth" value="<?php echo htmlspecialchars($profileData['date_of_birth']); ?>" placeholder="dd/mm/yyyy">
                    <span class="error"><?php echo $dateOfBirthErr;?></span></p>
                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>