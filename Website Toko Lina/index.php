
<?php 
include 'db_connect.php';
?>
<html>
  <head>
      <title>TOKO LINA SIGONG</title>
        <meta name="description" content="Belanja online aman dan nyaman di Toko Lina Sigong - Lemahabang Kabupaten Cirebon">
  <meta name="keywords" content="Grosir ,Jajan ,Toko Lina, Sembako ">
  <meta name="author" content="Lina">
  <meta http-equiv="refresh" content="3;url=https://tokolina.my.id/cari/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>
  <body>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QRXZTH23Z2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QRXZTH23Z2');
</script>
      <style>
		body{
			background-image:url(https://images5.alphacoders.com/573/thumb-1920-573228.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:white;
		}
	</style>
    <div class="s006">
      <form action="cari/index.php" method="get">
        <fieldset>
           <legend>Cari Barang disini </legend>
                 <div class="inner-form">
            <div class="input-field">
              <a href="http://tokolina.my.id/cari/"><button class="btn-search" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button></a>
              <input type="text"  placeholder="" name="cari value="Ladies"">
            </div>
          </div>
          <div class="suggestion-wrap">
            <span>Cek Harga Grosir</span>
            <span>Bahan Masak</span>
          </div>
        </fieldset>
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
   
          
              
      
   <?php } ?>
  </table>
  
</div>

</body>

</html>
