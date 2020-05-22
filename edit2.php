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
  <tr bgcolor="#212529">
  <td class="pertama">No</td>
  <td class="pertama">Kecamatan</td>
  <td class="pertama">Kabupaten</td>  
  <td class="pertama">Provinsi</td>
  <td class="pertama">SMA/MA</td>
  <td class="pertama">SMK</td>
  <td class="pertama">Jumlah</td>
  <td class="pertama" width="150px" >Option</td>
  </tr>
  </thead>

<?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($conn,"select * from siswa");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kec']; ?></td>
        <td><?php echo $d['kab']; ?></td>
        <td><?php echo $d['prov']; ?></td>
        <td><?php echo $d['sma_ma']; ?></td>
        <td><?php echo $d['smk']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>

        <td width="130">
          <div class="dropdown">
          <a href="editdata2.php?id=<?php echo $d['id']; ?>"><input class="btn btn-primary btn-sm text js-scroll-trigger" type="submit" name="submit" value="Edit"></a>   
          <a href="hapusdata2.php?id=<?php echo $d['id']; ?>"><input class="btn btn-danger btn-sm text js-scroll-trigger" type="submit" name="submit" value="Hapus"></a>
        </td>
      </tr>
      </font>
      <?php 
    }
    ?>
    </table>
  </div>
    <table>
    <td><?php echo "<a href='tambahdata2.php?'>"?><input class="btn btn-success btn-l text js-scroll-trigger" type="submit" name="submit" value="Tambah"></a></td>
    </table><br><br><br>
    <table>
  <td><h class="text-muted">Sumber Data : https://referensi.data.kemdikbud.go.id/pd_index.php?kode=036400&level=2</h></td></table>
</body>
</html>