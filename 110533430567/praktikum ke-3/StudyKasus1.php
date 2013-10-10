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
<select name="anime">
<option value="Naruto Shippuden"
<?php
if ($_POST['anime'] == 'Naruto Shippuden'){
echo 'selected="selected"';
}
?>/>Naruto Shippuden
<option value="One Piece"
<?php
if ($_POST['anime'] == 'One Piece'){
echo 'selected="selected"';
}
?>/>One Piece
<option value="Hunter X Hunter"
<?php
if ($_POST['anime'] == 'Hunter X Hunter'){
echo 'selected="selected"';
}
?>/>Hunter X Hunter
<option value="Shingeki"
<?php
if ($_POST['anime'] == 'Shingeki'){
echo 'selected="selected"';
}
?>/>Shingeki
<option value="Sword Art Online"
<?php
if ($_POST['anime'] == 'Sword Art Online'){
echo 'selected="selected"';
}
?>/>Sword Art Online
<option value="HighSchool DxD"
<?php
if ($_POST['anime'] == 'HighSchool DxD'){
echo 'selected="selected"';
}
?>/>HighSchool DxD
</select>
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