<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KALKULATOR</title>
</head>
<body>
<?php
$angka1=$_POST['angka1'];
$angka2=$_POST['angka2'];
$hasil=$_POST['hasil'];
$opr=$_POST['operator'];
        
        if($opr=='+'){
                $hasil=($angka1+$angka2);
        }
        else if($opr=='-'){
                $hasil=($angka1-$angka2);
        }
        else if($opr=='x'){
                $hasil=($angka1*$angka2);
        }
        else if($opr==':'){
                $hasil=($angka1/$angka2);
        }
?>
<form name="kalkulator" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
<p>Kalkulator</p>
<input name="angka1" type="number" id="angka1" value="<?php echo $angka1;?>">
<select name='operator' id='operator'>
        <option value = "+"
<?=($_POST['operator']=='+')? 'selected="selected"':''?>
        >+</option>
<option value = "-"
<?=($_POST['operator']=='-')? 'selected="selected"':''?>
>-</option>
<option value = "x"
<?=($_POST['operator']=='x')? 'selected="selected"':''?>
>x</option>
<option value = ":"
<?=($_POST['operator']==':')? 'selected="selected"':''?>
>:</option>
</select>
<input name="angka2" type="number" id="angka2" value="<?php echo $angka2;?>">
<input name= "submit" type="submit" value="=">
<input name="hasil" type="number" value="<?php echo $hasil;?>">
</form>

</body>
</html>