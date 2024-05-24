<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Persegi Panjang</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: sans-serif;
    margin: 0;
    min-height: 100vh;
    background-color: grey;
}
.popup{
    width: 460px;
    height: 250px;
    background: #fff;
    border-radius: 6px;
    position: absolute;
    border: 1px solid black;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
}
.popup h2{
    font-size: 20px;
    font-weight: 500;
    text-align: center;
}
.popup button{
    width: 100%;
    margin-top: 5px;
    padding: 10px 0;
    background: #0056b3;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 12px;
    border-radius: 5px;
    cursor: pointer;
}
.popup button:hover{
    background: rgba(128, 128, 128, 0.537);
    color: black;
}
.buton a{
    text-decoration: none;
    color: black;
}
.buton{
    width: 50%;
    height: 50px;
    display: flex;
    text-align: center;
    justify-content: center;
    display: flex;
    column-gap: 20px;
}
input[type="number"] {
    width: calc(50% - -100px);
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}
button:hover {
    background-color: #0056b3;
}
</style>
<body>
            <div class="tombol">
                <button type="submit" value="Kirim" class="btn" ><a href="index.php">Luas Segitiga</a></button>
                <button type="submit" value="Kirim" class="btn" ><a href="persegi.php">Luas Persegi Panjang</a></button>
            </div>
    <div class="popup">
    <h2>Hitung luas PP</h2><br>
        <div class="input-group1">
            <form method="post" style="width: 50%;">
                <label for="bilangan3">Panjang:</label><br>
                <input type="number" id="bilangan3" name="bilangan3"><br>
                <label for="bilangan4">Lebar:</label><br>
                <input type="number" id="bilangan4" name="bilangan4"><br><br>
                <button type="submit" value="Kirim">Hitung</button>
            </form>
        </div>
    </div>

    <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['bilangan3']) && isset($_POST['bilangan4'])) {
        $panjang = $_POST['bilangan3'];
        $lebar = $_POST['bilangan4'];
    if($panjang == "" || $lebar == ""){
        echo "<h1 style='text-align:center; color:red;'>Masukkan data disini!</h1>";
    } else {
        $luas = $panjang * $lebar;
        echo "<div class='result'>Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas</div>";
    }
}}

    ?>
</body>
</html>