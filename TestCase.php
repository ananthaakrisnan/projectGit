<?php include ("header.php");?> 
<!-- dd -->
<?php
    include "conn.php";
    //masukkan maklumat database
    if (isset($_POST['btn_submit'])){
      $id_pegawai= $_POST['id_pegawai'];
      $username= $_POST['username'];
      $password = md5($_POST['password']);
      $nama = $_POST['nama'];
      $emel= $_POST['emel'];
      $notel = $_POST['notel'];
      $alamat = $_POST['alamat'];
      $jabatan = $_POST['jabatan'];
      $peranan = $_POST['peranan'];
      // $tahapakses = $_POST['tahapakses'];
      
      $sql = "INSERT INTO tbl_daftar (id_pegawai, username, password, nama, emel, notel, alamat, jabatan, peranan) VALUES ('{$id_pegawai}','{$username}','{$password}','{$nama}','{$emel}','{$notel}','{$alamat}','{$jabatan}','{$peranan}')";
      
      $result = mysqli_query($conn, $sql);
      //displaying proper message fot the user to see wheteher the query excuted perfectly or not
      
      if (!$result){
        echo "Something went wrong ". mysqli_error($conn);
      }
      else { echo "<script type'text/javascript'>alert('Daftar pensyarah telah berjaya!')</script>";
        echo "<script type'text/javascript'> document.location = 'maklumat_pengajar.php'; </script>";
      }
}
?>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
        <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="">
                <img src="img/logoilpselandar.png" height="50" alt="Sistem Pelepasan Tugas" loading="lazy" style="margin-top: 5px;"/>
            </a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Sistem Pelepasan Tugas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="pilih_daftar.php">Pentadbir</a>
            </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Log Keluar</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    </nav>
    
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="$_POST d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-0 col-xl-5">
                    <img src="img/daftar1.png" class="img-fluid" alt="Sample image"></div>
                    <div class="col-md-8 col-lg-0 col-xl-4 offset-xl-1">
                      <div class="container-sm">
                        <h2>Daftar Pensyarah</h2>
  
  <!--form-->
  <form class="form-horizontal" role="form" action="" method="post">

    <!--input id pegawai-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="id_pegawai">ID Pegawai:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id_pegawai" placeholder="Masukkan ID Pegawai" name="id_pegawai" required>
      </div>
    </div>

    <!--input username-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="username">Nama Pengguna:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Masukkan nama pengguna" name="username" required>
      </div>
    </div>

    <!--input katalaluan-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="password">Kata Laluan: </label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="Masukkan kata laluan" name="password" required>
      </div>
    </div>

    <!--input name-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="name">Nama:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" autofocus="" required>
      </div>
    </div>
    
    <!--input emel-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="emel" placeholder="Masukkan email" name="emel" autofocus=""required>
      </div>
    </div>
    <!--input no telefon-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="no_tel">No Telefon:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="notel" placeholder="Masukkan nombor telefon" name="notel" required>
      </div>
    </div>

    <!--input alamat-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="alamat">Alamat:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" required>
      </div>
    </div>

    <!--select jabatan-->
    <div class="form-group">
    <div class="form-outline mb-2">
        <label class="control-label col-sm-3" for="jabatan">Bengkel:</label>
        <div class="col-sm-10">
            <select class="form-select form-select-md-3" id="jabatan" name="jabatan">
                <option selected>Pilih Bengkel</option>
                <option name="jabatan" value="Teknologi Komputer Perisian">Teknologi Komputer Perisian</option>

                <option name="jabatan" value="Teknologi Komputer Sistem">Teknologi Komputer Sistem</option>

                <option name="jabatan" value="Teknologi Komputer Rangkaian">Teknologi Komputer Rangkaian</option>

                <option name="jabatan" value="Teknologi Minyak & Gas">Teknologi Minyak & Gas</option>

                <option name="jabatan" value="Teknologi Rekabentuk Produk Industri ">Teknologi Rekabentuk Produk Industri</option>
            </select>
        </div>
    </div>
    
    <!--select peranan-->
    <div class="form-group">
    <div class="form-outline mb-2">
        <label class="control-label col-sm-0" for="jabatan">Peranan:</label>
        <div class="col-sm-10">
            <select class="form-select form-select-md-3" id="peranan" name="peranan">
                <option selected>Pilih Peranan</option>
                <option value="Ketua Bahagian">Ketua Bahagian</option>
                <option value="Pensyarah">Pensyarah</option>
            </select>
        </div>
    </div>

    
    <!--button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" id="button">
        <input type="submit" class="btn btn-primary" name="btn_submit" value="Daftar"/>
               <input type="reset" class="btn btn-primary" name="btn_reset" value="Set Semula"/>
      </div>
      </div>
      <br><br>
</body>
</html> 