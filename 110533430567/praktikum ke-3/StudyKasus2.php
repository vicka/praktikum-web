<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
<title>Data Seleksi Prefilling</title>
</head>
 
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Anime Kesukaan
<input type="checkbox" name="anime[]" value="Naruto Shippuden"
<?php
if ($_POST['anime'] == 'Naruto Shippuden'){
echo 'checked="checked"';
}
?>/>Naruto Shippuden
<input type="checkbox" name="anime[]" value="One Piece"
<?php
if ($_POST['anime'] == 'One Piece'){
echo 'checked="checked"';
}
?>/>One Piece
<input type="checkbox" name="anime[]" value="Hunter X Hunter"
<?php
if ($_POST['anime'] == 'Hunter X Hunter'){
echo 'checked="checked"';
}
?>/>Hunter X Hunter
<input type="checkbox" name="anime[]" value="Shingeki"
<?php
if ($_POST['anime'] == 'Shingeki'){
echo 'chekced="chekced"';
}
?>/>Shingeki
<input type="checkbox" name="anime[]" value="Sword Art Online"
<?php
if ($_POST['anime'] == 'Sword Art Online'){
echo 'chekced="chekced"';
}
?>/>Sword Art Online
<input type="checkbox" name="anime[]" value="HighSchool DxD"
<?php
if ($_POST['anime'] == 'HighSchool DxD'){
echo 'chekced="chekced"';
}
?>/>HighSchool DxD
<br />
<input type="submit" name="Pilih" value="Pilih" />
</form>
<?php
if (isset($_POST['Pilih'])) {
$film = $_POST['anime'];
echo "Anime Kesukaan Anda adalah:
<font color = blue><b>$film</b></font>";
}
?>
</body>
</html>