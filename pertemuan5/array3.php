<?php
$mahasiswa = [
    ["bungaftrialstr", "046040007", "Teknik informatika", "bungalestari3245@gmail.com"],
    ["antika ines", "043040007", "Teknik industri", "antikains5@gmail.com"],
    ["dosica faussy", "023040007", "Teknik industri", "dsica8@gmail.com"],
    ["dina aulia", "056040007", "Teknik informatika", "dinaauliar@gmail.com"],


];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs)  :?>
<ul>
   <li>Nama : <?php echo $mhs[0]; ?></li>
   <li>NISN : <?php echo $mhs[1]; ?></li>
   <li>Jurusan : <?php echo $mhs[2]; ?></li>
   <li>Email : <?php echo $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>



</body>
</html>