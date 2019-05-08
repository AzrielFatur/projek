<?php
    include 'config.php';
    $data=mysqli_fetch_assoc(mysqli_query($connection, "SELECT * from data_pt"));

    // FORM DATA
    if(isset($_POST['submit']))
    {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $telp = $_POST['telp'];
      $pesan = $_POST['pesan'];

      $aksi = mysqli_query($connection, "INSERT INTO data_form VALUES('','$nama','$email','$telp','$pesan')");

      if($aksi)
      {
        $ket = "Terimakasih telah meninggalkan pesan";
      }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,700,800|Poppins:200,300,400,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="shortcut icon" href="image/fav_icon.png">
  <title>About</title>
</head>
<body>
<div class="header">
    <a href="#"><img src="image/logo.png" alt="PT Anugrah Insan Madani"></a>
    <nav class="clearfix">
      <a href="#" id="pull">&nbsp;</a>
      <div class="geser">
    <ul class="clearfix">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </div>
    </nav>
  </div>

  <!-- PAGE TWO -->
  <div class="about">
    <div class="container-two">
        <div class="row page-two">
            <div class="col-s-12 two-left aboutus">
            <h1>About Us</h1>
            <p>PT. Anugrah Insan Madani merupakan sebuah perusahaan yang bergerak di bidang jasa layanan kelistrikan serta dilakukan oleh tenaga yang profesional dan ahli di bidangnya agar menjadikan perusahaan ini bisa di jadikan pilihan bagi siapa saja yang membutuhkan dan bisa di percaya oleh semua lapisan masyarakat.</p>
            </div>
        </div>

        <div class="row page-two page-about">
          <div class="col-s-4">
            <img src="image/visi.png" width="100%" alt="">
          </div>
          <div class="col-s-8">
            <h3>Visi</h3>
            <p><?=$data['visi']; ?></p>
          </div>
        </div>
        <div>
        <div class="row page-two page-about">
          <div class="col-s-4">
            <img src="image/misi.png" width="100%" alt="">
          </div>
                <div class="col-s-8">
                  <h3>Misi</h3>
                  <p><?=$data['misi']; ?></p>
                </div>
        </div>
        <div>
  </div>
  </div>

  <div class="container footer">
    <div class="page-two">
      <footer>Copyright PT Anugrah Insan Madani</footer>
    </div>
  </div>

  <script>
    $(function() {
			var pull 		= $('#pull'); // Variabel tombol navigasi (akan muncul hanya pada perangkat mobile)
				menu 		= $('nav ul'); // Variabel menu

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 600 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</body>
</html>