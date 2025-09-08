
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xCompany - Forgot Password</title>
    <link rel="stylesheet" href="../css/forgetPassword.css">
</head>
<body>

    <?php

        $email = '';
        $emailErr = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }


            if (empty($emailErr)) {

                echo "<p style='color:green;'>Password reset link has been sent to your email!</p>";
                $email = '';
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
            <a href="./login.php">Login</a> | 
            <a href="./registration.php">Registration</a>
        </nav>
    </header>
    <div class="content">
        <h2>FORGOT PASSWORD</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="email">Enter Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>

    </div>
    <div class="footer">
        <p>Copyright © 2017</p>
    </div>
</body>
</html>