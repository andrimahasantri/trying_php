<?php
  include 'koneksi.php';

  $query = "SELECT * FROM tb_siswa;";
  $sql = mysqli_query($conn, $query);
  $no = 0;

//  while($result = mysqli_fetch_assoc($sql)){
//   echo $result['nama_siswa']."<br>";
//  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- boostrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- font awsome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Crud</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            Crud
          </a>
        </div>
    </nav>
      <!-- judul -->
    <div class="container-fluid">
        <h1 class="mt-4">Data Siswa</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data yang telah disimpan di database</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">Create | Read | update | Delete</cite>
        </figcaption>
      </figure>

      <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>
        Tambah Data
      </a>

        <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">No.</th>
                    <th>Nisn</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto Siswa</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php
                while($result = mysqli_fetch_assoc($sql)){
              ?>
                <tr>
                    <td style="text-align: center;"><?php echo ++$no;?>.</td>
                    <td><?php echo $result['nisn'];?></td>
                    <td><?php echo $result['nama_siswa'];?></td>
                    <td><?php echo $result['jenis_kelamin'];?></td>
                    <td><img src="img/<?php echo $result['foto_siswa'];?>" style="width: 100px;" height="120px" alt=""></td>
                    <td><?php echo $result['alamat'];?></td>
                    <td>
                        <a href="proses.php?hapus=<?php echo $result['id_siswa'];?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengapus data tersebut?')">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="kelola.php?ubah=<?php echo $result['id_siswa'];?>" type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
                <?php
                  }
                ?>

                <!-- <tr>
                    <td style="text-align: center;">2.</td>
                    <td>122233</td>
                    <td>Fikria Saleha</td>
                    <td>Perempuan</td>
                    <td><img src="img/batu.jpeg" style="width: 100px;" height="120px" alt=""></td>
                    <td>riau</td>
                    <td>
                        <a href="proses.php?hapus=2" type="button" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr> -->
            </tbody>
        </table>
        </div>
    </div>
    
</body>
</html>