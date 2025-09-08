
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xCompany - Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <?php
        session_start();
        if (isset($_SESSION['username'])) {
            header("Location: dashboard.php");
            exit();
        }


        $predefinedUser = "nazrul";
        $predefinedPassword = "123456";

        $username = $password = '';
        $usernameErr = $passwordErr = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

            if (empty($usernameErr) && empty($passwordErr)) {
                if ($username === $predefinedUser && $password === $predefinedPassword) {
                    $_SESSION['username'] = $username;
                    header("Location: dashboard.php");
                    exit();
                } else {
                    $usernameErr = "Invalid username or password";
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


    <header class="headerTitle">
        <div class="companyName"><span>X</span>company</div>
        <nav class="navBar">
            <a href="../index.php">Home</a> | 
            <a href="./html/login.php">Login</a> | 
            <a href="registration.php">Registration</a>
        </nav>
    </header>
    <div class="content">
        <h2>LOGIN</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>">
                <span class="error"><?php echo $usernameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
                <a href="./forgetPassword.php" class="forgot-password">Forgot Password?</a>
            </div>
        </form>

    </div>
    <div class="footer">
        <p>Copyright © 2017</p>
    </div>


</body>
</html>