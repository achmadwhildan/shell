<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga Dengan Konsep OOP</title>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="liter">Masukan jumlah Liter Pembelian : </label>
            <input type="number" name="liter" id="liter" required>
        </div>
        <div style="display: flex;">
            <label for="jenis">Pilih Jenis Bahan Bakar</label>
            <select name="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell Power</option>
                <option value="SSuper">Shell V-Power Diesel</option>
                <option value="SSuper">Shell V-Power Nitro</option>
            </select>
        </div>
    </form>
</body>
</html>