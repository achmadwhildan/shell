<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--nomor 1-->
    <?php
        $bilangan1 = 55;
        $bilangan2 = 50;

        if ($bilangan1 > $bilangan2){
            echo "bilangan terbesar adalah" . $bilangan1;
        } elseif ($bilangan2 > $bilangan1){
            echo "bilangan terbesar adalah" . $bilangan1;
        } else {
            echo "kedua bilangan sama besar";
        }
    ?> <br>

<!--nomor 2-->
    <?php
        $bilangan_1 = 17;
        $bilangan_2 = 25;
        $bilangan_3 = 37;

        if ($bilangan_1 > $bilangan_2 && $bilangan_1 > $bilangan_3){
            echo "bilangan terbesar adalah" . $bilangan_1;
        } elseif ($bilangan_2 > $bilangan_3 && $bilangan_2 > $bilangan_1){
            echo "bilangan terbesar adalah" . $bilangan_2;
        } elseif ($bilangan_3 > $bilangan_2 && $bilangan_3 > $bilangan_1){
            echo "bilangan terbesar adalah" . $bilangan_3;
        } else{
            echo "ketiga bilangan sama besar";
        }
    ?>
    <br>

<!--nomor 3-->
<?php
    $bil1 = 24;
    $bil2 = 16;
    $bil3 = 20;
    $bil4 = 19;

    if ($bil1 > $bil2 && $bil1 > $bil3 && $bil1 > $bil4){
        echo "bilangan terbesar adalah:" . $bil1;
    } elseif($bil2 > $bil1 && $bil2 > $bil3 && $bil2 > $bil4){
        echo "bilangan terbesar adalah:" . $bil2;
    } elseif($bil3 > $bil1 && $bil3 > $bil2 && $bil3 > $bil4){
        echo "bilangan terbesar adalah:" . $bil3;
    } elseif($bil4 > $bil1 && $bil4 > $bil2 && $bil4 > $bil3){
        echo "bilangan terbesar adalah:" . $bil4;
    } else{
        echo "sama besar";
    }

?>

</body>
</html>