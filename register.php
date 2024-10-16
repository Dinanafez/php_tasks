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
   if(isset($_POST["submit"])){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password_hash=password_hash($password,PASSWORD_DEFAULT);
    $errors=array();
    if(empty($name) or empty($email) or empty($password)){
    //    this condition for check if any filed is empty 
        array_push($errors,"All field is required");

    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,"email not valid");
    }
    if(strlen($password)<8){
        array_push($errors,"Password must be 10 chars");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div>$error</div>";
        }
    }
    else{
        require_once "db.php";
        try {
            // Prepare an INSERT query with placeholders for the values
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            
            // Prepare the statement
            $stmt = $conn->prepare($sql);
            
            // Bind the actual values to the placeholders
            $stmt->bindParam(':username', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
        
            // Execute the statement
            $stmt->execute();
        
            echo "User successfully registered!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
       
        // print_r($PDo_result);
        // // $pdo_exe=$PDo_result->execute(array(":username")->$name,":email"->$email , ":password"->$password);
        // if($PDo_result){
        //     echo "data in data base";

        // }
        // else{
        //     echo " data not insert";
        // }
    

    }

   }
    
    
    
    
    
    
    ?>
    <form action="register.php" method="post">
      <h2>Register</h2>
        <div class="input-field">
        <input type="text" required name="username">
        <label>Enter your Name</label>
      </div>
      <div class="input-field">
        <input type="text" required name="email">
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" required name="password">
        <label>Enter your password</label>
      </div>
      
      <button type="submit" name="submit">Register</button>
      <div class="register">
        <p>ALready have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>