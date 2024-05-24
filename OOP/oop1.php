<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Laptop{

            private $pemilik ="whildan";
            private $merek = "Lenovo";

            public function __construct(){
                echo "ini berasal dari constructor Laptop";
                echo "<br>===================================<br>";
            }

            public function hidupkan_laptop(){
                return "hidupkan laptop $this->merek punya $this->pemilik";
            }

            public function  __destruct(){
                echo "ini berasal dari destractor laptop";
            }
        }

        $laptop_whildan = new Laptop();

        echo "<br />";
        echo $laptop_whildan->hidupkan_laptop();
        echo "<br />";
    ?>
</body>
</html>