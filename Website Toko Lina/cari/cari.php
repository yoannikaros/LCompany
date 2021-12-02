<?php 
include 'db_connect.php';
?>
 <!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 500PX;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 900px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<h3>Form Pencarian</h3>
<link rel="stylesheet" type="text/css" href="style.css">

<form action="cari.php" method="get">
 
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table class="table1" border="1">

 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($kon,"select * from barang where nama like '%".$cari."%'");    
 }else{
  $data = mysqli_query($kon,"select * from barang");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 
        <tr>
        
            <td><?php echo $d['nama'];?></td>
           
        </tr>
        <tr>
       
            <td>Rp. <?php echo $d['harga'];?></td>
            
        </tr>
 <?php } ?>
</table>