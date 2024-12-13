<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) ) : ?>
        <h1>Halo, Selamat Datang<?= $_POST["nama"]; ?></h1>
    <?php endif;?>

    <form action="latihan4.php" method="get">
        Masukkan nama :
        <input type="text" nama="nama">
        <br>
        <button type="submit" nama="submit">kirim!</button>
    </form>
 
</body>
</html>