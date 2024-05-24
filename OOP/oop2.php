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
            public $nomber = 1;
            public $nama = "Anto";

            public function __constract($nomber, $nama){
                $this->nomber=$nomber;
                $this->nama=$nama;
            } 
            public function getCetak(){
                echo "<b.laptop" .$this->nomber; "<b>milik:" .$this->nama;
            }
        }

        $laptop= new Laptop();
        


    ?>
</body>
</html>