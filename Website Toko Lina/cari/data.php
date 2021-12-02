<?php
include 'koneksi.php';
$query = mysqli_query ($conn,"SELECT * FROM barang");
?>

<html>
    <head>
        <title>Data Warung</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <h2>Data Barang</h2>
        <table class="table1" border="1">

<?php
while($hasil = mysqli_fetch_array($query)){
?>
        <tr>
            <td><?php echo $hasil['nama'];?></td>
           
        </tr>
        <tr>
            <td>Rp.<?php echo $hasil['harga'];?></td>
            
        </tr>
 
            <?php } ?>
        </table>
    </body>
</html>