<?php
    require_once('database.php');
    $data = tampildata();
    $nomor = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>List Barang</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="list_barang.php">List Barang<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="peminjaman.php">Peminjam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">Pendataan User Dan Peminjam</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="logout.php">Logout</a>
    </form>
  </div>
</nav>

  <body>
    <div class ="container">
    <h1>List Barang</h1>
    <a href="insert.php">
      <button>Add Barang</button>
    </a>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">no  </th>
    <th scope="col">kode_brg</th>
      <th scope="col">nama_brg</th>
      <th scope="col">kategori</th>
      <th scope="col">merk</th>
      <th scope="col">jumlah</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $barang) :    ?> 
    <?php $nomor++; ?>   
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo "$barang[kode_brg]";?></td>
      <td><?php echo "$barang[nama_brg]";?></td>
      <td><?php echo "$barang[kategori]";?></td>
      <td><?php echo "$barang[merk]";?></td>
      <td><?php echo "$barang[jumlah]";?></td>
      <td><?php echo "<a href='edit.php?id=$barang[id]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$barang['id'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
      function hapusData(id){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'delete.php?id=' + id;
        }
      }
    </script>
    
    
  </body>
</html>