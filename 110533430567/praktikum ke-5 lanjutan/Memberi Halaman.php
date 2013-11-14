<html>
<head>
        <title>Latihan 3:Pemberian Halaman</title>
</head>
<body>
<?php
require_once("koneksi.php");
// Setup
$sql="select * from mahasiswa";
$self=$_SERVER['PHP_SELF'];
$page=isset($_GET['page'])?$_GET['page']:0;

// Jumlah Link
$link_num=5;
// record num
$record_num=1;

// Item pertama yang ditampilkan
$offset=$page?($page-1)*$record_num:0;

$total_row=mysql_num_rows(mysql_query($sql));
$query=$sql." LIMIT ". $offset.",".$record_num;

$result=mysql_query($query);
$max_page=ceil($total_row/$record_num);

if ($page>$max_page || $page<=0) {
        $page=1;
}


// generate paging
$paging="";
if ($max_page>1) {

        if ($page>1) {
                $paging.="<a href='".$self."?page=".($page-1)."'>prev</a> ";
        }
        else{
                $paging.="prev ";
        }

                for ($counter=1; $counter <=$max_page ; $counter+=$link_num) {
                        if ($page>=$counter) {
                                $start=$counter;
                        }
                }

        if ($max_page>$link_num) {
                $end=$start+$link_num;
                if ($end>$max_page) {
                        $end=$max_page+1;
                }
        
        }
        else{
                $end=$max_page;
        }

                for ($counter=$start; $counter < $end; $counter++) {
                        if ($counter==$page) {
                                $paging.=$counter;
                        }
                        else{
                                $paging.=" <a href='".$self."?page=".$counter."'>".$counter."</a> ";
                        }
                }

        if ($page<$max_page) {
                $paging.=" <a href='".$self."?page=".($page+1)."'>Next</a>";
        }
        else{
                $paging.=" Next";
        }

}
?>

<table border="1">
<thead>
        <tr>
                <td>No.</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Alamat</td>
        </tr>
</thead>
<tbody>
        <?php
        $i=1;
        while ($data=mysql_fetch_row($result)) {
                ?>
                <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data[0]; ?></td>
                        <td><?php echo $data[1]; ?></td>
                        <td><?php echo $data[2]; ?></td>
                </tr>

                <?php
                $i++;
        }

         ?>
         <tr>
                 <td colspan="4"><?php echo $paging; ?></td>
         </tr>
</tbody>
</table>
</body>
</html>