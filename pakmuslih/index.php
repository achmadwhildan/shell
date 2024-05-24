<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href = "tugas1.css">
</head>
<body>
    <div class="container">
    <div class="kotak">
        <h2>Login</h2>
        <form method = "post">
            <label for="bilangan1">username:</label>
            <input type="text" id="bilangan1" name="bilangan1"require><br><br>
            <label for="bilangan2">password:</label>
            <input type="number" id="bilangan2" name="bilangan2"require><br><br>
            <input type="submit" value="login"><br><br>
        </form>
    </div>
    </div>

    <?php 
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $bil1 = $_POST["bilangan1"];
            $bil2 = $_POST["bilangan2"];

            if($bil1 === "admin" and $bil2 === "12309486"){
                header("location:home1.php");
            } else {
                echo "nama atau password anda salah";
            }
        }

    ?>
</body>
</html> 