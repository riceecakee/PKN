<?php

include 'config.php';

if(isset($_POST['submit'])) {
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $class = $_POST['txtClass'];
    $message = $_POST['txtMessage'];

    
    $sql = "INSERT INTO tbl_contact (name, email, class, message) VALUES ('$name', '$email', '$class', '$message')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

?>



<!DOCTYPE html>
<html lang="">
<head>
<title>Kasus Asrama Papua</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded1" style="background-image:url('./images/kasus6.jpg');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header2" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="#">Penjelasan Kasus</a></h1>
        <p>Pengepungan Asrama Mahasiswa Papua</p>
      </div>
      <div id="quickinfo" class="fl_right">
        <ul class="nospace inline">
          <li><strong>Proyek Kewarganegaraan</strong><br></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </header>
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear nav">
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="kasus.html">Penjelasan Kasus</a></li>
        <li><a href="hak.html">Hak dan Kewajiban</a></li>
        <li><a href="lingkungan.html">Fakta Lingkungan Terdekat</a></li>
        <li><a href="refleksi.html">Refleksi</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="referensi.html">Referensi</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content borderline"> 
      <!-- ################################################################################################ -->
      <img class="imgr borderedbox inspace-5" id="foto" src="./images/asrama.jpg" alt="">
      <p>Pada tanggal 16 Agustus 2019 lalu, mahasiswa Papua yang sedang berkumpul di Asrama Kamasan Surabaya, dikepung oleh beberapa aparat (TNI, Polri, Ormas Reaksioner) karena dianggap merusak tiang bendera Merah Putih dan membuangnya ke selokan, namun aparat tidak melakukan investigasi mendalam terlebih dahulu. Para aparat membiarkan ormas reaksioner ikut melakukan pengepungan. Bukannya mengamankan penyerangan, tetapi polisi malah menembakkan gas air mata, dan ikut menyerang (mendobrak pagar). Pengepungan ini disertai makian bernada rasis (‘monyet’) kepada mahasiswa Papua. </p>
      <p>"Kami pakai metode negosiasi ataupun pendekatan hukum untuk bicara baik-baik soal ini. Kami klarifikasi bersama, tapi mereka menolak itu. Mereka menunjuk kami. Mereka menuntut kami untuk keluar adu fisik," kata salah satu mahasiswa. </p>
      <img class="imgl borderedbox inspace-5" id="foto" src="./images/protes.jpg" alt="">
      <p>43 mahasiswa terjebak di dalam asrama tanpa makan dan minum semalaman  dan 5 mahasiswa asal Papua terluka. </p>
      <p>Sebagai TNI dan Polri yang menjaga keamanan negara, mereka seharusnya melakukan investigasi terlebih dahulu dan tidak asal menuduh yang disertai penyerangan dilapisi rasisme. Mereka yang seharusnya mengamankan situasi malah ikut menyerang. </p>
      <p>Pada akhirnya, 43 mahasiswa asal Papua diperiksa dan tidak ada yang merusak bendera Merah Putih di asrama.</p> <br>
      <p>Pada Selasa (3/9/2019), Syamsul Arifin ASN Pemkot Surabaya, salah satu oknum menulis surat pernyataan permohonan maaf yang ditujukan pada seluruh masyarakat Papua. "Seluruh saudara-saudaraku yang berada di Papua, saya mohon maaf sebesar-besarnya apabila perbuatan rasial yang diucapkan tidak menyenangkan," kata Syamsul Arifin. Tri Susanti juga turut meminta maaf atas makian rasis yang dilakukannya. "Kami atas nama masyarakat Surabaya dan dari rekan-rekan ormas menyampaikan permohonan maaf apabila ada masyarakat atau pihak lain yang sempat meneriakkan itu," ujar dia.</p>
      <p>Wakil Kepala Kepolisian Daerah Jawa Timur Brigjen Pol Toni Harmanto mengatakan, penahanan terhadap Tri Susanti (wakil ketua Ormas Forum Komunikasi Putra-Putri Purnawirawan dan Putra-Putri TNI/Polri (FKPPI) Surabaya) dan Syamsul resmi dilakukan sejak Selasa (3/9/2019).</p>
      <!-- ################################################################################################ -->
    </div>
    <div class="content2 borderline">
      <h2>Pelanggaran nilai instrumental</h2>
      <ul class="list">
        <li>Aksi diskriminasi rasial terhadap mahasiswa Papua melanggar <a target="_blank" href="https://www.dpr.go.id/jdih/uu1945">(UUD 1945 - Pasal 28I ayat 2)</a>: Setiap orang bebas dari perlakuan yang bersifat diskriminatif atas dasar apapun dan berhak mendapatkan perlindungan terhadap perlakuan yang bersifat diskriminatif itu. </li>
        <li>TNI dan Polri tidak melakukan kewajiban mereka dengan menginvestigasi terlebih dalam sebelum mengepung dan menyerang <a target="_blank" href="https://www.dpr.go.id/jdih/uu1945">(UUD 1945 - Pasal 27 ayat (1))</a>: Segala warga negara bersamaan kedudukannya di dalam hukum dan pemerintahan dan wajib menjunjung hukum dan pemerintahan itu dengan tidak ada kecualinya.</li>
        <li>TNI, Polri, dan ormas memaki mahasiswa Papua. Mereka seharusnya menghargai dan menghormati sesama. Ini melanggar <a target="_blank" href="https://www.dpr.go.id/jdih/uu1945">(UUD 1945 - Pasal 28 J ayat (1))</a>: Setiap orang wajib menghormati hak asasi manusia orang lain dalam tertib kehidupan bermasyarakat, berbangsa, dan bernegara.</li>
      </ul>
    </div>
    <div class="content2 borderline">
      <h2>Pelanggaran nilai dasar</h2>
      <ul class="list">
        <li><b>Melanggar nilai kemanusiaan sila kedua “Kemanusiaan yang adil dan beradab” </b>karena tidak menghormati hak asasi orang lain dan tidak mengakui persamaan derajat sesama manusia (diskriminasi ras).
        </li>
        <li><b>Melanggar nilai persatuan sila ketiga “Persatuan Indonesia” </b>karena tidak menjaga persatuan dan kesatuan Indonesia melalui aksi diskriminasi rasial yang menyebabkan disintegrasi dalam kehidupan bermasyarakat.</li>
        <li><b>Melanggar nilai keadilan sila kelima “Keadilan sosial bagi seluruh rakyat Indonesia”</b> karena para aparat tidak bersikap adil kepada mahasiswa Papua (diskriminas ras).</li>
      </ul>
    </div>
    <div class="content2 borderline">
      <h2>Konsekuensi</h2>
      <ul class="list">
        <li><b>Tri Susanti </b>(wakil ketua Ormas Forum Komunikasi Putra-Putri Purnawirawan dan Putra-Putri TNI/Polri (FKPPI) Surabaya): menyebarkan berita hoax tentang mahasiswa Papua membuang bendera dan sebagai koordinator lapangan ormas dalam pengepungan asrama Papua. Ia terdakwa melanggar <a target="_blank" href="https://www.dpr.go.id/dokjdih/document/uu/814.pdf">Pasal 14 Ayat (1) UU RI Nomor 1 Tahun 1946 tentang Peraturan Hukum Pidana </a> “Barang siapa, dengan menyiarkan berita atau pemberitahuan bohong, dengan sengaja menerbitkan keonaran dikalangan rakyat, dihukum dengan hukuman penjara setinggi tingginya sepuluh tahun” dan divonis 7 bulan penjara. </li>
        <li><b>Syamsul Arifin</b> (ASN Pemkot Surabaya): mengelontarkan kata-kata makian rasis, sehingga terdakwa melanggar</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
    <div class="content2"> 
      <div id="comments">
        <h2>Write A Comment | Tuliskan pendapatmu</h2>
        <form method="post" action="" >
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="txtName" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Email</label>
            <input type="email" name="txtEmail" id="email" value="" size="22">
          </div>
          <div class="one_third">
            <label for="url">Class</label>
            <input type="text" name="txtClass" id="class" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="txtMessage" id="comment" cols="25" rows="10" required></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="submit">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </main>
    </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2023 - All Rights Reserved</p>
    <p class="fl_right">Made by Annabelle, Clarissa & Jeslyn</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>