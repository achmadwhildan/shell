<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $mahasiswa = 90;

        if($mahasiswa >= 90 && $mahasiswa < 100){
            echo "A: lulus";
        } elseif ($mahasiswa >= 80 && $mahasiswa < 89){
            echo "B: lulus";
        } elseif ($mahasiswa >= 70 && $mahasiswa < 79){
            echo "C: lulus";
        } elseif ($mahasiswa >= 60 && $mahasiswa < 69){
            echo "D: tidak lulus";
        } else{
            echo "E: tidak lulus";
        }

    ?><br>

    <?php
//pemilu 2024//
        $umur = 1;

        if($umur >= 25){
            echo "dewasa";
        } elseif ($umur >= 12){
            echo "remaja";
        } elseif ($umur >= 5){
            echo "anak-anak";
        } else{
            echo "balita";
        }

    echo "<br>";

//3
        $grade = 85;

        if ($grade > 90 ){
            echo "maka grade A";
        } elseif ($grade > 80){
            echo "maka grade B";
        } elseif ($grade > 70){
            echo "maka grade C";
        } elseif ($grade <= 70){
            echo "maka garde C";
        }

    echo "<br>";

//4
        $DPK = 70;
        $MTK = 87;
        $AGAMA = 80;
        $mean = ($DPK + $MTK + $AGAMA)/ 3;

        if ($mean >= 90){
            echo "sangat bagus";
        } elseif ($mean >= 85){
            echo "bagus";
        } elseif ($mean >= 80){
            echo "sangat baik";
        } elseif ($mean >= 70){
            echo "baik";
        } elseif ($mean < 70){
            echo "kurang";
        }

    echo "<br>";

//5
        $x = 20;
        $y = 30;

        if ($x == $y){
            echo "nilai sama";
        } elseif ($x > $y){
            echo "lebih besar x";
        } elseif ($x < $y){
            echo "lebih besar y";
        }

    ?>

    


</body>
</html>