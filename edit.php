<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #333;
    color: #fff;
    }
  textarea {
    width:600px;
    height:150px;
    padding:10px;
    font-family:Arial;
    font-size:10px;
  }
  input[type=text]{
    width:100%;
    padding:6px 0px;
    margin: 10px 0;
  } 
  .button {
    width: auto;
    padding: 5px 20px;
       background: #121212;
    color: #fff;
  }
  .pertama{
  color: #fff;
  }

  </style>
</head>
<body>
  <div class="table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
  <p class="text-muted">
  <tr bgcolor="#212529">
  <td class="pertama">No</td>
  <td class="pertama">NSS</td>
  <td class="pertama">NPSN</td> 
  <td class="pertama">Nama</td>
  <td class="pertama">Status</td>
  <td class="pertama">Alamat</td>
  <td class="pertama">Kecamatan</td>
  <td class="pertama">Latitude</td>
  <td class="pertama">Longitude</td>
  <td class="pertama" width="150px">Option</td>
  </tr>
</p>
  </thead>

<tbody>

<?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($conn,"select * from pekalongan");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nss']; ?></td>
        <td><?php echo $d['npsn']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['status']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['kec']; ?></td>
        <td><?php echo $d['lat']; ?></td>
        <td><?php echo $d['lng']; ?></td>

        <td width="130">
          <div class="dropdown">
          <a href="editdata.php?id=<?php echo $d['id']; ?>"><input class="btn btn-primary btn-sm text js-scroll-trigger" type="submit" name="submit" value="Edit"></a>  
          <a href="hapusdata.php?id=<?php echo $d['id']; ?>"><input class="btn btn-danger btn-sm text js-scroll-trigger" type="submit" name="submit" value="Hapus"></a>
        </td>
      </tr>
      </font>
      <?php 
    }
    ?>
  </table>
  </div>
    <table>
    <td><?php echo "<a href='tambahdata.php?'>"?><input class="btn btn-success btn-l text js-scroll-trigger" type="submit" name="submit" value="Tambah"></a></td>
    </table>

    <br><br><br>
    <table>
  <td><h class="text-muted">Sumber Data : https://aljundiesalama.wordpress.com/lembaga-pendidikan/sma-ma-smk-kota-pekalongan/</h></td></table>
</body>
</html>