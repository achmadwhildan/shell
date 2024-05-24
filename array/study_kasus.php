<?php 

// $arr = arr();
// $arr = ["anggur", "apel", "jeruk"];

// var_dump("$arr");

// echo $arr[1]= 'duren';
/*
$angka = [20, 'mawar',3,14,15];
array_push($angka,7); 20,mawar,3,4,15,7
array_pop($angka); 20,mawar,3,14
array_shift($angka); mawar,3,14,15
array_unshift($angka,100);  100,20,mawar,3,4

splice 3 params => remove elements
splice 4 perams => insert element pada array

array_splice($angka, 1, 2);  20,14,15
array_splice(angka,2,0,"anggur");
20, mawar, anggur, 3,14,15
var_dump($angka);
echo implode(',',$angka);
echo '<br>';
$num = [20, 5, 16, 6, 7];
echo 'ini linai maksimum dari array :'.max($num);
echo '<br>';
echo 'ini nilai minimum dari array :'.min($num)
*/

    
    $nilai = [80, 78, 72, 84, 92, 88];
    $mean = array_sum($nilai)/ count($nilai);
    $bulat = round($mean);
    $remed = [80, 78, 72, 84, 92, 88];
    array_splice($remed,2,1, 75);
    

    echo 'Nilai saya: ' . "<b>". implode (" ", $nilai) . "</b>";
    echo "<br>";
    echo 'Dari kesaluruhan nilai yang paling tinggi ialah: ' . "<b>" . max($nilai) . "</b>";
    echo "<br>";
    echo 'Sedangkan nilai yang paling kecil ialah: ' . "<b>" . min($nilai) . "</b>";
    echo "<br>";
    sort($nilai);
    echo 'Apabila di urutkan yang terkecil menjadi: ' . "<b>" . implode(" ", $nilai) . "</b>";
    echo "<br>";
    arsort($nilai);
    echo 'Apabila di urutkan yang terbesar menjadi: ' . "<b>" . implode(" ", $nilai) . "</b>";
    echo "<br>";
    echo 'Apa bila di bulatkan, rata-rata dari keselurauhan nilai saya menjadi: ' . "<b>" . round($bulat) . "</b>";
    echo "<br>";
    echo 'setelah melakukan perbaikan untuk nilai ' . "<b>" . $nilai[0] . "</b>" . ' saya mendapatkan nilai ' . "<b>" . $remed[2] . "</b>" . ' jadi nilai saya sekarang: '. "<b>" . implode(" ", $remed) . "</b>";
    echo "<br>";
    arsort($remed);
    echo 'Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi: ' . "<b>" . implode(" ", $remed) . "</b>";
    ?>