<?php 
include 'config.php';
$data=mysqli_fetch_assoc(mysqli_query($connection, "SELECT * from data_pt"));

$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$pesan = $_POST['pesan'];

$simpan = mysqli_query($connection, "INSERT INTO data_form VALUES('','$nama','$email','$telp','$pesan')");


    if ($simpan) {
        echo "<script>
                alert ('Terima kasih telah mengirimkan pesan!'); document.location.href='index.php';
                </script>";
    }

?>