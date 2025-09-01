

 <?php

$name = $email = $phone = $reason = $service = $offer = $position = "";
$errors = [];


function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $errors['name'] = "Only letters and spaces are allowed.";
        }
    }

    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format.";
        }
    }


    if (!empty($_POST["phone"])) {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            $errors['phone'] = "Phone must be 10-15 digits.";
        }
    }


    if (empty($_POST["reason"])) {
        $errors['reason'] = "Please select a contact reason.";
    } else {
        $reason = test_input($_POST["reason"]);
    }

    if (empty($_POST["service"])) {
        $errors['service'] = "Please select a service.";
    } else {
        $service = test_input($_POST["service"]);
    }


    if (empty($_POST["offer"])) {
        $errors['offer'] = "Please specify if you're offering a job.";
    } else {
        $offer = test_input($_POST["offer"]);
    }


    if (empty($_POST["position"])) {
        $errors['position'] = "Please select your position.";
    } else {
        $position = test_input($_POST["position"]);
    }

    if (empty($errors)) {
        $success = "Form submitted successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Contact Us</title>
</head>
<body class="container">
    <header class="header">
        <div class="headerName">
            <h2><a href="../index.html">Nazrul Islam</a></h2>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="./education.html">Education</a></li>
                <li><a href="./expericence.html">Experience</a></li>
                <li><a href="./project.html">Projects</a></li>
                <li><a href="#" id="active">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="form" id="contactForm">
        <div class="fullwidth">
            <div class="contact-form">
                <h2>Contact Us</h2>

                <?php if (!empty($success)) echo "<p style='color:green;'>$success</p>"; ?>

                <form action="" method="post">
                    <div class="formpart">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                        <br>
                        <span style="color:red;"><?php echo $errors['name'] ?? ''; ?></span>
                    </div>
                    
                    <div class="formpart">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                        <br>
                        <span style="color:red;"><?php echo $errors['email'] ?? ''; ?></span>
                    </div>
                    
                    <div class="formpart">
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
                        <br>
                        <span style="color:red;"><?php echo $errors['phone'] ?? ''; ?></span>
                    </div>
                    
                    <div class="formpart">
                        <label for="reason">Contact Reason:</label>
                        <select id="reason" name="reason">
                            <option value="">-- Select --</option>
                            <option value="inquiry" <?php if($reason=="inquiry") echo "selected"; ?>>General Inquiry</option>
                            <option value="support" <?php if($reason=="support") echo "selected"; ?>>Support</option>
                            <option value="feedback" <?php if($reason=="feedback") echo "selected"; ?>>Feedback</option>
                        </select>
                        <br>
                        <span style="color:red;"><?php echo $errors['reason'] ?? ''; ?></span>
                    </div>

                   <div class="formpart">
                        <label>Service Needed:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="service" value="web-design" <?php if($service=="web-design") echo "checked"; ?>> Web Design</label>
                            <label><input type="radio" name="service" value="seo" <?php if($service=="seo") echo "checked"; ?>> SEO</label>
                            <label><input type="radio" name="service" value="marketing" <?php if($service=="marketing") echo "checked"; ?>> Digital Marketing</label>
                        </div>
                        <br>
                        <span style="color:red;"><?php echo $errors['service'] ?? ''; ?></span>
                   </div>

                    <div class="formpart">
                        <label>Offering job? </label>
                        <div class="radio-group">
                            <label><input type="radio" name="offer" value="yes" <?php if($offer=="yes") echo "checked"; ?>> Yes</label>
                            <label><input type="radio" name="offer" value="no" <?php if($offer=="no") echo "checked"; ?>> No</label>
                            <label><input type="radio" name="offer" value="maybe" <?php if($offer=="maybe") echo "checked"; ?>> May be</label>
                        </div>
                        <br>
                        <span style="color:red;"><?php echo $errors['offer'] ?? ''; ?></span>
                    </div>

                    <div class="formpart">
                        <label for="position">Your Position</label>
                        <select id="position" name="position">
                            <option value="">-- Select --</option>
                            <option value="ceo" <?php if($position=="ceo") echo "selected"; ?>>CEO</option>
                            <option value="hr" <?php if($position=="hr") echo "selected"; ?>>HR</option>
                            <option value="manager" <?php if($position=="manager") echo "selected"; ?>>Manager</option>
                            <option value="other" <?php if($position=="other") echo "selected"; ?>>Other official</option>
                        </select>
                        <br>
                        <span style="color:red;"><?php echo $errors['position'] ?? ''; ?></span>
                    </div>

                    <button type="submit" class="submitbtn">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <h3 class="copyrighttext">All right reserved by <strong>Nazrul Islam</strong></h3>
    </footer>
</body>
</html> 
