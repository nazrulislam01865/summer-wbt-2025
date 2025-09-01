<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Form</title>
</head>
<body class="container">
    <header class="header">
        <p class="description">
            <p class="afstar"> <span>*</span> - Denotes Required Information</p>
        </p>
        <div class="path">
          <p>  <strong>> 1 Donation</strong> > 2 Confirmation >  Thank You! </p>
        </div>
    </header>

    <div class="HeadingText">Donor Information</div>

    <div class="formbody">
        <form action="#" method="GET" class="form">
            <div class="form-group">
                <label for="name">First Name <sup>*</sup></label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name <sup>*</sup></label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="address1">Address 1<sup>*</sup></label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="city">City<sup>*</sup></label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="state">State<sup>*</sup></label>
                <select class="state">
                    <option value="state1" reqired>Select a state</option>
                    <option value="state2">State 2</option>
                    <option value="state3">State 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="zipcode">Zip Code<sup>*</sup></label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="country">Country <sup>*</sup></label>
                <select class="state">
                    <option value="state1" reqired>Select a Country</option>
                    <option value="state2">State 2</option>
                    <option value="state3">State 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="email">Email<sup>*</sup></label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="Donationamount">Donation Amount<sup>*</sup></label>
                <input type="radio"  id="name"> None
                <input type="radio"  id="name"> $50
                <input type="radio"  id="name"> $75
                <input type="radio"  id="name"> $100
                <input type="radio"  id="name"> $250
                <input type="radio"  id="name"> Others <br>
            </div>

            <div class="form-group">
                <p>(Check a button or type in your amount)</p> <br>
                 <label for="otheramoun">Other Amount $</label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="RecuringDonation" class="RecurringDonation">Recuring Donation</label>
                <input type="checkbox"  id="name">
                <p>I am interested in giving on a regular basis.</p>
            </div>
            <div class="form-group">
                <p>(Check if yes)</p>
                <label for="Monthly">Monthly credit Card $</label>
                <input type="text"  id="name"> For
                <input type="text"  id="name"> Months
                
            </div>

            <div class="HeadingText">Honorarium and Memorial Donation Information</div>
            </div class="form-group">
                <label for="honor">I would like to make this donation</label>
                <input type="radio"  id="honor"> To Honor <br>
                <input type="radio"  id="honor" class="pp1"> In memory of.
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"  id="name">
            </div>
            <div class="form-group">
                <label for="name">Acknowledge Donation to</label>
                <input type="text"  id="name">
            </div>

            <div class="form-group">
                <label for="name">Address</label>
                <input type="text"  id="name">
            </div>

            <div class="form-group">
                <label for="name">City</label>
                <input type="text"  id="name">
            </div>

            <div class="form-group">
                <label for="country">State</label>
                <select class="state">
                    <option value="none" reqired>Select a Country</option>
                    <option value="state2">State 2</option>
                    <option value="state3">State 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Zip</label>
                <input type="text"  id="name">
            </div>

            <div class="HeadingText">Additional Information</div>
            <p>Please enter your name, company or organization as you would like to appear in our publications:</p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"  id="name">
            </div>

            <div class="form-group" id="checkboxes">
                <input type="checkbox"  id="checkbox">I would like my gift to remain anonymous. <br>
                <input type="checkbox"  id="checkbox">My employer offers a matching gift program.I will mail the matching gift form <br>
                <input type="checkbox"  id="checkbox">Please save the cost of acknowledging this gift by not mailing thank you later<br>
                
            </div>
            <div class="form-group">
                <label for="comments">Comments</label> <br>
                <span> <br>(Please type any questions or feedback here)</span>
                <input type="text"  id="name" class="comments">
            </div>
             <div class="form-group" id="checkboxes">
                <label for="contact">How may we contact you?</label>
                <input type="checkbox"  id="name">Email <br>
                <input type="checkbox"  id="name" class="pp">Postal Mail<br>
                <input type="checkbox"  id="name" class="pp">Telephone<br>
                <input type="checkbox"  id="name" class="pp">Fax<br>
                <p>I would like to receive newslatters and Information about special events by:</p>
                <input type="checkbox"  id="name" class="pp">Email <br>
                <input type="checkbox"  id="name" class="pp">Postal Mail<br>  
            </div>
            <div class="form-group">
                
                <input type="checkbox"  id="name">I would like Information about volunteering with the <br>

            </div>
            <div class="button">
                <input type="submit"value="Reset" class="submit-button">
                <input type="submit"value="Continue" class="submit-button">
            </div>
        </form>


    </div>

    
</body>
</html> -->




<?php
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$errors = [];
$success = false;
$form_data = $_POST ?: [];

$states = [
    'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas', 
    'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut', 'DE' => 'Delaware',
    'FL' => 'Florida', 'GA' => 'Georgia', 'HI' => 'Hawaii', 'ID' => 'Idaho',

];

$countries = ['US' => 'United States', 'CA' => 'Canada', 'UK' => 'United Kingdom'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $errors[] = "Invalid CSRF token";
    } else {
        $required_fields = [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'address1' => 'Address 1',
                'city' => 'City',
                'state' => 'State',
                'zipcode' => 'Zip Code',
                'country' => 'Country',
                'email' => 'Email',
                'donation_amount' => 'Donation Amount'
        ];

        foreach ($required_fields as $field => $label) {
            if (empty($_POST[$field])) {
                $errors[] = "$label is required";
            }
        }

        if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }

        if (!empty($_POST['zipcode']) && !preg_match('/^\d{5}(-\d{4})?$/', $_POST['zipcode'])) {
            $errors[] = "Invalid zip code format";
        }

        if (!empty($_POST['phone']) && !preg_match('/^\+?\d{10,15}$/', $_POST['phone'])) {
            $errors[] = "Invalid phone number format";
        }

        if (!empty($_POST['donation_amount']) && $_POST['donation_amount'] === 'other') {
            if (empty($_POST['other_amount']) || !is_numeric($_POST['other_amount']) || $_POST['other_amount'] <= 0) {
                $errors[] = "Please enter a valid donation amount";
            }
        }

        if (!empty($_POST['recurring_donation']) && (!empty($_POST['monthly_amount']) || !empty($_POST['months']))) {
            if (!is_numeric($_POST['monthly_amount']) || $_POST['monthly_amount'] <= 0) {
                $errors[] = "Invalid monthly amount";
            }
            if (!is_numeric($_POST['months']) || $_POST['months'] <= 0) {
                $errors[] = "Invalid number of months";
            }
        }

        if (!empty($_POST['state']) && !array_key_exists($_POST['state'], $states)) {
            $errors[] = "Invalid state selected";
        }

        if (!empty($_POST['country']) && !array_key_exists($_POST['country'], $countries)) {
            $errors[] = "Invalid country selected";
        }

        if (empty($errors)) {
            $success = true;
            header("Location: thank_you.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Donation Form</title>
    <style>
        .error { color: red; font-size: 0.9em; }
        .success { color: green; font-size: 0.9em; }
    </style>
</head>
<body class="container">
    <header class="header">
        <p class="description">
            <span class="afstar">* - Denotes Required Information</span>
        </p>
        <div class="path">
            <p><strong>> 1 Donation</strong> > 2 Confirmation > Thank You!</p>
        </div>
    </header>

    <div class="HeadingText">Donor Information</div>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="success">Form submitted successfully!</div>
    <?php endif; ?>

    <div class="formbody">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

            <div class="form-group">
                <label for="first_name">First Name <sup>*</sup></label>
                <input type="text" id="first_name" name="first_name" value="<?php echo isset($form_data['first_name']) ? htmlspecialchars($form_data['first_name']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name <sup>*</sup></label>
                <input type="text" id="last_name" name="last_name" value="<?php echo isset($form_data['last_name']) ? htmlspecialchars($form_data['last_name']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" value="<?php echo isset($form_data['company']) ? htmlspecialchars($form_data['company']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="address1">Address 1 <sup>*</sup></label>
                <input type="text" id="address1" name="address1" value="<?php echo isset($form_data['address1']) ? htmlspecialchars($form_data['address1']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text" id="address2" name="address2" value="<?php echo isset($form_data['address2']) ? htmlspecialchars($form_data['address2']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="city">City <sup>*</sup></label>
                <input type="text" id="city" name="city" value="<?php echo isset($form_data['city']) ? htmlspecialchars($form_data['city']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="state">State <sup>*</sup></label>
                <select id="state" name="state">
                    <option value="">Select a state</option>
                    <?php foreach ($states as $code => $name): ?>
                        <option value="<?php echo $code; ?>" <?php echo isset($form_data['state']) && $form_data['state'] === $code ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="zipcode">Zip Code <sup>*</sup></label>
                <input type="text" id="zipcode" name="zipcode" value="<?php echo isset($form_data['zipcode']) ? htmlspecialchars($form_data['zipcode']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="country">Country <sup>*</sup></label>
                <select id="country" name="country">
                    <option value="">Select a country</option>
                    <?php foreach ($countries as $code => $name): ?>
                        <option value="<?php echo $code; ?>" <?php echo isset($form_data['country']) && $form_data['country'] === $code ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="<?php echo isset($form_data['phone']) ? htmlspecialchars($form_data['phone']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" id="fax" name="fax" value="<?php echo isset($form_data['fax']) ? htmlspecialchars($form_data['fax']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email <sup>*</sup></label>
                <input type="email" id="email" name="email" value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Donation Amount <sup>*</sup></label>
                <input type="radio" id="none" name="donation_amount" value="none" <?php echo isset($form_data['donation_amount']) && $form_data['donation_amount'] === 'none' ? 'checked' : ''; ?>> None
                <input type="radio" id="50" name="donation_amount" value="50" <?php echo isset($form_data['donation_amount']) && $form_data['donation_amount'] === '50' ? 'checked' : ''; ?>> $50
                <input type="radio" id="75" name="donation_amount" value="75" <?php echo isset($form_data['donation_amount']) && $form_data['donation_amount'] === '75' ? 'checked' : ''; ?>> $75
                <input type="radio" id="100" name="donation_amount" value="100" <?php echo isset($form_data['donation_amount']) && $form_data['donation_amount'] === '100' ? 'checked' : ''; ?>> $100
                <input type="radio" id="250" name="donation_amount" value="250" <?php echo isset($form_data['donation_amount']) && $form_data['donation_amount'] === '250' ? 'checked' : ''; ?>> $250
                <input type="radio" id="other" name="donation_amount" value="other" <?php echo isset($form_data['donation_amount']) && $form_data['donation_amount'] === 'other' ? 'checked' : ''; ?>> Other
            </div>

            <div class="form-group">
                <p>(Check a button or type in your amount)</p>
                <label for="other_amount">Other Amount $</label>
                <input type="text" id="other_amount" name="other_amount" value="<?php echo isset($form_data['other_amount']) ? htmlspecialchars($form_data['other_amount']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="recurring_donation">Recurring Donation</label>
                <input type="checkbox" id="recurring_donation" name="recurring_donation" <?php echo isset($form_data['recurring_donation']) ? 'checked' : ''; ?>>
                <p>I am interested in giving on a regular basis.</p>
            </div>

            <div class="form-group">
                <p>(Check if yes)</p>
                <label for="monthly_amount">Monthly Credit Card $</label>
                <input type="text" id="monthly_amount" name="monthly_amount" value="<?php echo isset($form_data['monthly_amount']) ? htmlspecialchars($form_data['monthly_amount']) : ''; ?>">
                For
                <input type="text" id="months" name="months" value="<?php echo isset($form_data['months']) ? htmlspecialchars($form_data['months']) : ''; ?>"> Months
            </div>

            <div class="HeadingText">Honorarium and Memorial Donation Information</div>

            <div class="form-group">
                <label>I would like to make this donation</label>
                <input type="radio" id="to_honor" name="donation_type" value="honor" <?php echo isset($form_data['donation_type']) && $form_data['donation_type'] === 'honor' ? 'checked' : ''; ?>> To Honor
                <input type="radio" id="in_memory" name="donation_type" value="memory" <?php echo isset($form_data['donation_type']) && $form_data['donation_type'] === 'memory' ? 'checked' : ''; ?>> In Memory of
            </div>

            <div class="form-group">
                <label for="honor_name">Name</label>
                <input type="text" id="honor_name" name="honor_name" value="<?php echo isset($form_data['honor_name']) ? htmlspecialchars($form_data['honor_name']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="acknowledge_to">Acknowledge Donation to</label>
                <input type="text" id="acknowledge_to" name="acknowledge_to" value="<?php echo isset($form_data['acknowledge_to']) ? htmlspecialchars($form_data['acknowledge_to']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="acknowledge_address">Address</label>
                <input type="text" id="acknowledge_address" name="acknowledge_address" value="<?php echo isset($form_data['acknowledge_address']) ? htmlspecialchars($form_data['acknowledge_address']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="acknowledge_city">City</label>
                <input type="text" id="acknowledge_city" name="acknowledge_city" value="<?php echo isset($form_data['acknowledge_city']) ? htmlspecialchars($form_data['acknowledge_city']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="acknowledge_state">State</label>
                <select id="acknowledge_state" name="acknowledge_state">
                    <option value="">Select a state</option>
                    <?php foreach ($states as $code => $name): ?>
                        <option value="<?php echo $code; ?>" <?php echo isset($form_data['acknowledge_state']) && $form_data['acknowledge_state'] === $code ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="acknowledge_zip">Zip</label>
                <input type="text" id="acknowledge_zip" name="acknowledge_zip" value="<?php echo isset($form_data['acknowledge_zip']) ? htmlspecialchars($form_data['acknowledge_zip']) : ''; ?>">
            </div>

            <div class="HeadingText">Additional Information</div>
            <p>Please enter your name, company or organization as you would like to appear in our publications:</p>

            <div class="form-group">
                <label for="publication_name">Name</label>
                <input type="text" id="publication_name" name="publication_name" value="<?php echo isset($form_data['publication_name']) ? htmlspecialchars($form_data['publication_name']) : ''; ?>">
            </div>

            <div class="form-group" id="checkboxes">
                <input type="checkbox" id="anonymous" name="anonymous" <?php echo isset($form_data['anonymous']) ? 'checked' : ''; ?>> I would like my gift to remain anonymous.<br>
                <input type="checkbox" id="matching_gift" name="matching_gift" <?php echo isset($form_data['matching_gift']) ? 'checked' : ''; ?>> My employer offers a matching gift program. I will mail the matching gift form.<br>
                <input type="checkbox" id="no_thank_you" name="no_thank_you" <?php echo isset($form_data['no_thank_you']) ? 'checked' : ''; ?>> Please save the cost ofacknowledging this gift by not mailing thank you letter.<br>
            </div>

            <div class="form-group">
                <label for="comments">Comments</label><br>
                <span>(Please type any questions or feedback here)</span>
                <textarea id="comments" name="comments" class="comments"><?php echo isset($form_data['comments']) ? htmlspecialchars($form_data['comments']) : ''; ?></textarea>
            </div>

            <div class="form-group" id="checkboxes">
                <label>How may we contact you?</label>
                <input type="checkbox" id="contact_email" name="contact[]" value="email" <?php echo isset($form_data['contact']) && in_array('email', $form_data['contact']) ? 'checked' : ''; ?>> Email<br>
                <input type="checkbox" id="contact_mail" name="contact[]" value="mail" <?php echo isset($form_data['contact']) && in_array('mail', $form_data['contact']) ? 'checked' : ''; ?>> Postal Mail<br>
                <input type="checkbox" id="contact_phone" name="contact[]" value="phone" <?php echo isset($form_data['contact']) && in_array('phone', $form_data['contact']) ? 'checked' : ''; ?>> Telephone<br>
                <input type="checkbox" id="contact_fax" name="contact[]" value="fax" <?php echo isset($form_data['contact']) && in_array('fax', $form_data['contact']) ? 'checked' : ''; ?>> Fax<br>
                <p>I would like to receive newsletters and information about special events by:</p>
                <input type="checkbox" id="newsletter_email" name="newsletter[]" value="email" <?php echo isset($form_data['newsletter']) && in_array('email', $form_data['newsletter']) ? 'checked' : ''; ?>> Email<br>
                <input type="checkbox" id="newsletter_mail" name="newsletter[]" value="mail" <?php echo isset($form_data['newsletter']) && in_array('mail', $form_data['newsletter']) ? 'checked' : ''; ?>> Postal Mail<br>
            </div>

            <div class="form-group">
                <input type="checkbox" id="volunteer" name="volunteer" <?php echo isset($form_data['volunteer']) ? 'checked' : ''; ?>> I would like information about volunteering with the organization.<br>
            </div>

            <div class="button">
                <input type="reset" value="Reset" class="submit-button">
                <input type="submit" value="Continue" class="submit-button">
            </div>
        </form>
    </div>
</body>
</html>