<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - POS System</title>
</head>
<body>
    <h1>Selamat Datang Di Dalam Sistem POS</h1>
    <p>Ini laman Home.</p>
    <nav>
        <a href="{{ route('products.foodBeverage') }}">Makanan & Minuman</a> |
        <a href="{{ route('products.beautyHealth') }}">Kecantikan & Kesehatan</a> |
        <a href="{{ route('products.homeCare') }}">Perawatan Rumah</a> |
        <a href="{{ route('products.babyKid') }}">Bayi & Anak-Anak</a> |
        <a href="{{ route('sales.index') }}">Penjualan</a> |
        <a href="{{ route('user.profile', ['id' => 1, 'name' => 'Danni']) }}">Profil Pengguna</a>
    </nav>
</body>
</html>
