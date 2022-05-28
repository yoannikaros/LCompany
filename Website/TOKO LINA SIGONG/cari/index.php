<?php 
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>TOKO LINA SIGONG</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 87%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 12%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 


	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
            <form class="example" style="margin:auto;width:100%" action="index.php" method="get">
 
 <button type="submit" value="Cari"><i class="fa fa-search"></i></button>
 <input placeholder="Mau Cari Apa ?"  type="text" name="cari">

</form> 
<br />
DIPERBAHARUI 29 NOVEMBER 2021 
<Br>
    Alamat -> <a href="https://g.page/tokolina?share">Klik Via Google Maps</a> <-

<br />
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."<br /></b>";
}
?>  <br />
					<div class="table">




						<div class="row header">

							<div class="cell">
								Nama Barang
							</div>
							<div class="cell">
								Satuan
							</div>
								<div class="cell">
								Harga Grosir
							</div>
						</div>

                        

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

<div class="row">
       <div class="cell" data-title="Nama Barang">
           <?php echo $d['nama'];?>
</div >
       <div class="cell" data-title="Satuan">
           <?php echo $d['satuan'];?>
</div >
<div class="cell" data-title="Harga Grosir">
           Rp. <?php echo $d['grosir'];?>
           </div >


           </div>

<?php } ?>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "6281310594805", // WhatsApp number
            call_to_action: "Mau Pesan Apa ?", // Call to action
            position: "right", // Position may be 'right' or 'left'
            pre_filled_message: "Assalamualaikum,", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>
</html>