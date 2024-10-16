<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:#ff30;
            color:pink;
            width: 100%;
            height: 100vh;

        }
        form{
            height: 300px;
            width:500px;
            display: flex;
            flex-direction:column;
            margin:auto;
            background:#f23f;
            align-items:center;
            justify-content:center;
        }
        table{
            display: none;

        }
    </style>
</head>
<body>
    <?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
         if(!isset($_SESSION["users"]))
         {
         $_SESSION['users']=[];
        }
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $newUser=[
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
        ];
        $_SESSION["users"][]=$newUser;}
    
    ?>
    <form  method="post">
        <lable>Name :<input type="text" name="name"></label><br>
        <lable>Email :<input type="email" name="email"></label><br>
        <lable>passWo:<input type="password" name="password"></label><br>
        <button type="submit" id="btn">Submit</button>
    </form>
    <table border=1 id="table">
    <tr>
        <td><?php print_r ($_SESSION["users"][0]["name"]);?></td>
        <td><?php print_r ($_SESSION["users"][0]["email"]);?></td>
        <td><?php print_r ($_SESSION["users"][0]["password"]);?></td>
    </tr>
    </table>
    <script>
 let btn= document.getElementById("btn");
 let table= document.getElementById("table");
 btn.addEventListener('click', () => {
            if (table.style.display === 'none') {
                table.style.display = 'table'; // Show the table
                btn.textContent = 'Hide Table'; // Change button text
            } else {
                table.style.display = 'none'; // Hide the table
                btn.textContent = 'Show Table'; // Change button text
            }
 });




        </script>
</body>
</html>