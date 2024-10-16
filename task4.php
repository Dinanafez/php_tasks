
<?php
// Form submission backend
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    // Email validation
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Mobile validation (14 digits)
    if (!preg_match("/^[0-9]{14}$/", $_POST['mobile'])) {
        $errors[] = "Mobile number must be 14 digits.";
    }

    // Full name validation (4 parts)
    if (empty($_POST['fname']) || empty($_POST['mname']) || empty($_POST['lname']) || empty($_POST['family'])) {
        $errors[] = "Full name fields are required.";
    }

    // Password validation
    $password = $_POST['password'];
    if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) ||
        !preg_match("/[0-9]/", $password) || !preg_match("/[\W]/", $password) || preg_match("/\s/", $password)) {
        $errors[] = "Password must be at least 8 characters, including uppercase, lowercase, numbers, and special characters, with no spaces.";
    }

    // Password confirmation
    if ($password !== $_POST['confirm_password']) {
        $errors[] = "Password confirmation does not match.";
    }

    // Date of birth validation (must be above 16 years old)
    $dob = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
    $age = (date('Y') - $_POST['year']);
    if ($age < 16) {
        $errors[] = "You must be at least 16 years old to register.";
    }

    // If no errors, store the user data
    if (empty($errors)) {
        session_start();
        $_SESSION['user'] = [
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'fname' => $_POST['fname'],
            'mname' => $_POST['mname'],
            'lname' => $_POST['lname'],
            'family' => $_POST['family'],
            'password' => $password, // In real-life scenarios, hash the password!
            'dob' => $dob,
        ];
        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Sign Up</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Mobile (14 digits)</label>
                <input type="text" name="mobile" class="form-control" required pattern="\d{14}">
            </div>

            <!-- Full name (4 parts) -->
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="mname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Family Name</label>
                <input type="text" name="family" class="form-control" required>
            </div>

            <!-- Password and confirmation -->
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>

            <!-- Date of Birth -->
            <div class="form-row">
                <div class="col">
                    <label>Day</label>
                    <input type="number" name="day" class="form-control" min="1" max="31" required>
                </div>
                <div class="col">
                    <label>Month</label>
                    <input type="number" name="month" class="form-control" min="1" max="12" required>
                </div>
                <div class="col">
                    <label>Year</label>
                    <input type="number" name="year" class="form-control" min="1900" max="<?php echo date('Y'); ?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Sign Up</button>
        </form>
    </div>
</body>
</html>










