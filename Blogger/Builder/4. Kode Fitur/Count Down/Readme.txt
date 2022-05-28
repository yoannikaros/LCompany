Jika ingin setelah countdown berakhir halaman di redirect ke halaman lainnya, maka kode

        clearInterval(x); 
        document.getElementById("countdownb").innerHTML = "WAKTU DISCOUNT HABIS"; 
		
diganti

        window.location = "https://www.blogspotlandingpage.com";

dimana https://www.blogspotlandingpage.com adalah url tujuan