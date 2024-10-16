<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location :index.php");
}
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <?php
  if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=localhost;dbname=your_database_name", "username", "password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);

        // Bind the email parameter to the prepared statement
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Execute the prepared statement
        $stmt->execute();

        // Fetch the user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Assuming you want to check the password, you'd add your password verification here
            // For example, if passwords are hashed in the database:
            // if (password_verify($pass, $user['password'])) {
            if (true) { // Replace with your actual password checking logic
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: index.php");
                die();
            } else {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>User not found</div>";
        }

    } catch (PDOException $e) {
        // Handle any errors
        echo "Error: " . $e->getMessage();
    }
}
?>

  
    <form action="login.php" method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" required name="email">
        <label>Enter your email</label>
      </div>
      
      <div class="input-field">
        <input type="password" required name="password">
        <label>Enter your password</label>
      </div>
      <button type="submit" name="login">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>