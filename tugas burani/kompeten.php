<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.style1{
    color: #155724;
}
.style2{
    color: #721c24;
}
    </style>
</head>
<body>
    <form method="post" action="">
    <label for="nama">Nama anda : </label>
    <input type="text" id ="nama" name="nama" ><br><br>
    <label for="bilangan">nilai : </label>
    <input type="number" id="bilangan" name="bilangan"><br><br>
    <input type="submit" value="masukan nilai"><br><br>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $bil=$_POST["bilangan"];
            $nam=$_POST["nama"];
        if(empty($bil)){
            echo "<h4 class='style2'> masukan semua data </h4>";
        }elseif($bil <=100 and $bil >=75){
            echo "<h4 class='style1'> Selamat $nam nilai anda kompeten </h4>";
        }elseif($bil <75 and $bil >=0){
            echo "<h4 class='style2'> Maaf $nam nilai anda tidak kompeten </h4>";
        }
    }
    ?>
</body>
</html>