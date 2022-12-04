<?php
  require "admin.php";

  //Koneksi Database
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "uas_web";

  $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

  //tombol simpan
  if(isset($_POST['bsimpan'])) {

    //test data edit / simpan baru
    if($_GET['hal'] == "edit") {
      //data akan di edit
      $edit = mysqli_query($koneksi, "UPDATE pesanan set 
        no_meja = '$_POST[tmeja]',
        nama = '$_POST[tnama]',
        pesanan = '$_POST[tpesanan]',
        layanan = '$_POST[tlayanan]'
      WHERE ID_cost = '$_GET[id]'
      ");

      if($edit) { 
        echo "<script>
              alert('Edit data berhasil !');
              document.location='admin.php';
            </script>";
      } else {
        echo "<script>
              alert('Edit data GAGAL !');
              document.location='admin.php';
            </script>";
      }
    } else {
      // data simpan baru
      $simpan = mysqli_query($koneksi, "INSERT INTO uas_web (no_meja, nama, pesanan, layanan)
                                      VALUES ('$_POST[tmeja]', 
                                              '$_POST[tnama]', 
                                              '$_POST[tpesanan]',
                                              '$_POST[tlayanan]') ");
      if($simpan) {
        echo "<script>
              alert('Simpan data berhasil !');
              document.location='admin.php';
            </script>";
      } else {
        echo "<script>
              alert('Simpan data GAGAL !');
              document.location='admin.php';
            </script>";
      }
    }   
  }

  //test tombol edit
  if(isset($_GET['hal'])) {
    //test edit data
    if($_GET['hal'] == "edit") {
      //show data edit
    $tampil = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE ID_cost = '$_GET[id]' ");
    $data = mysqli_fetch_array($tampil);
      if($data){
        $vmeja = $data['no_meja'];
        $vnama = $data['nama'];
        $vpesanan = $data['pesanan'];
        $vlayanan = $data['layanan'];
      }
    } else if ($_GET['hal'] == 'hapus') {
    $hapus = mysqli_query($koneksi, "DELETE FROM pesanan WHERE ID_cost = '$_GET[id]' ");
      if($hapus) {
        echo "<script>
              alert('Hapus data sukses !');
              document.location='admin.php';
            </script>";
      }
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <title>Admin</title>
  </head>

  <body style="width: 100%;  
    background-image: linear-gradient(rgba(0,0,0,0.4),
    rgba(0,0,0,0.4)),url('pict/bg_blur.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: repeat-x;">

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
    <div class="container">
      <h1 class="text-center mt-4" style="color:white">- Admin Page -</h1>
      
      <!-- CARD 1 -->
      <div class="card mt-3">
        <div class="card-header bg-secondary text-white">
          Form Input Data
        </div>
        <div class="card-body">
          <form method="post"  action="">
            <div class="form-group">
              <label>Nomor Meja</label>
              <input type="int" name="tmeja" value="<?=@$vmeja?>" class="form-control" placeholder="Masukkan nomor meja Anda" required>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
              <label>Pesanan</label>
              <textarea class="form-control" name="tpesanan" cols="30" rows="5" placeholder="Masukkan pesanan anda disini"><?=@$vpesanan?></textarea>
            <div class="form-group mb-3">
              <label for="">Jenis Layanan</label>
              <select class="form-control" nama="tlayanan">
                <option value="<?=@$vlayanan?>"><?=@$vlayanan?></option>
                <option value="Dine In">Dine In</option>
                <option value="Take Away">Take Away</option>
              </select>
            </div>

            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="breset">Reset</button>

          </form>
        </div>
      </div>
      <!-- CARD 1 -->

      <!-- CARD 2 -->
      <div class="card mt-3">
        <div class="card-header bg-success text-white">
          Daftar Pesanan
        </div>
        <div class="card-body">

          <table class="table table-bordered table-striped">
            <tr>
              <th>NO</th>
              <th>Nomor Meja</th>
              <th>Nama</th>
              <th>Pesanan</th>
              <th>Jenis Layanan</th>
              <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
              $tampil = mysqli_query($koneksi, "SELECT * FROM pesanan order by ID_cost ASC");
              while($data = mysqli_fetch_array($tampil)) :

            ?>
            <tr>
              <td><?=$no++;?></td>
              <td><?=$data['no_meja']?></td>
              <td><?=$data['nama']?></td>
              <td><?=$data['pesanan']?></td>
              <td><?=$data['layanan']?></td>
              <td>
                <a href="admin.php?hal=edit&id=<?=$data['ID_cost']?>" class="btn btn-warning">Edit</a>
                <a href="admin.php?hal=hapus&id=<?=$data['ID_cost']?>" 
                onclick="return confirm('Apakah ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
              </td> 
            </tr>
          <?php endwhile; ?>
          </table>

        </div>
      </div>
      <!-- CARD 2 -->  

    </div>
    
  </body>
</html>