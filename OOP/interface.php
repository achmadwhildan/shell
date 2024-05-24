<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        abstract class Hewan{
            abstract public function suara();
            abstract public function makanan();
        } 
        class Harimau extends Hewan {
            public function suara(){
                return "Roar";
            }

            public function makanan(){
                return "Daging";
            }
        }

        $harimau = new Harimau;
        echo $harimau->suara();
        echo "<br>";
        echo $harimau->makanan(); 
    ?>
</body>
</html>