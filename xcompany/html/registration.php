
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
    <title>xCompany - Registration</title>
    <style>

    </style>
</head>
<body>

    <?php
        $name = $email = $username = $password = $confirmPassword = $gender = $dob = '';
        $nameErr = $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $dobErr = '';
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


            if (empty($_POST["username"])) {
                $usernameErr = "Username is required";
            } else {
                $username = test_input($_POST["username"]);
                if (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
                    $usernameErr = "Username can only contain letters, numbers, and underscores";
                }
            }

            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
                if (strlen($password) < 6) {
                    $passwordErr = "Password must be at least 6 characters long";
                }
            }


            if (empty($_POST["confirm_password"])) {
                $confirmPasswordErr = "Please confirm password";
            } else {
                $confirmPassword = test_input($_POST["confirm_password"]);
                if ($password != $confirmPassword) {
                    $confirmPasswordErr = "Passwords do not match";
                }
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["dob"])) {
                $dobErr = "Date of Birth is required";
            } else {
                $dob = test_input($_POST["dob"]);
                $dobParts = explode('/', $dob);
                if (count($dobParts) != 3 || !checkdate($dobParts[1], $dobParts[0], $dobParts[2])) {
                    $dobErr = "Invalid date format (dd/mm/yyyy)";
                }
            }

            if (empty($nameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($dobErr)) {
                echo "<p style='color:green;'>Registration successful!</p>";
                $name = $email = $username = $password = $confirmPassword = $gender = $dob = '';
            }
        }


        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    
    <header class="headerTitle">
        <div class="companyName"><span>X</span>company</div>
        <nav class="navBar">
            <a href="../index.php">Home</a> | 
            <a href="login.php">Login</a> | 
            <a href="./html/registration.php">Registration</a>
        </nav>
    </header>
    <div class="content">
        <h2>REGISTRATION</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>">
                <span class="error"><?php echo $usernameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirmPassword; ?>">
                <span class="error"><?php echo $confirmPasswordErr; ?></span>
            </div>
            <div class="form-group ">
                <label>Gender</label>
                <input class="radio" type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male
                <input class="radio" type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female
                <input class="radio" type="radio" name="gender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>> Other
                <span class="error"><?php echo $genderErr; ?></span>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="text" id="dob" name="dob" value="<?php echo $dob; ?>" placeholder="dd/mm/yyyy">
                <span class="error"><?php echo $dobErr; ?></span>
            </div>
            <div class="form-group-btn">
                <button class="submitbtn" type="submit" name="submit">Submit</button>
                <button class="submitbtn" type="reset">Reset</button>
            </div>
        </form>

    </div>
    <div class="footer">
        <p>Copyright © 2017</p>
    </div>


</body>
</html>