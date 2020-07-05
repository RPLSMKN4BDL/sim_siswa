<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Simadas . SMKN 4 BL</title>

    <link rel="icon" type="images/png" href="image/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Simadas
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Profil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="mx-4 my-5">
      <div class="jumbotron jumbotron-fluid" style="background-color : #43ac6a">
        <div class="container">
          <h3 class="display-5 text-light">Biodata Siswa</h3>
          <p class="pt-2 text-light" style="font-size : 12px;">
            * Note<br>
            1. NISN (lihat diijazah SMP), data diri (lihat di kartu keluarga & akte lahir).<br>
            2. Jika data sesuai klik benar, jika tidak sesuai klik salah.<br>
            3. Jika terdapat data salah hubungi via chat bpk. Medi (wa. 088268305995).
          </p>
        </div>
      </div>
    <table class="text-left table text-muted" cellpadding="3" style="font-size : 11px;">
        <tr>
          <td colspan="5" class="text-light" style="background-color : #43ac6a">
            <h5>Rincian Data Siswa</h5>
          </td>
        </tr>
        <tr>
          <th class="text-info">NISN</th>
          <th class="text-info"> : </th>
          <td>1098219312</td>
          <td>
            <input type="radio" name="status_nisn" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_nisn" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">NIK</th>
          <th class="text-info"> : </th>
          <td>1871111111111123</td>
          <td>
            <input type="radio" name="status_nik" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_nik" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">NAMA</th>
          <th class="text-info"> : </th>
          <td>Syekh Muhammad Kholifatur Rohman</td>
          <td>
            <input type="radio" name="status_nama" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_nama" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">TEMPAT LAHIR</th>
          <th class="text-info"> : </th>
          <td>Bunga Mayang</td>
          <td>
            <input type="radio" name="status_tempat" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_tempat" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">TANGGAL LAHIR</th>
          <th class="text-info"> : </th>
          <td>10 September 1989</td>
          <td>
            <input type="radio" name="status_tanggal" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_tanggal" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">AYAH KANDUNG</th>
          <th class="text-info"> : </th>
          <td>Ropil Suandi</td>
          <td>
            <input type="radio" name="status_ayah" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_ayah" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">IBU KANDUNG</th>
          <th class="text-info"> : </th>
          <td>Mahdalena</td>
          <td>
            <input type="radio" name="status_ibu" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_ibu" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">JENIS KELAMIN</th>
          <th class="text-info"> : </th>
          <td>Laki-laki</td>
          <td>
            <input type="radio" name="status_jenkel" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_jenkel" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <th class="text-info">KELAS</th>
          <th class="text-info"> : </th>
          <td>12 RPL 1</td>
          <td>
            <input type="radio" name="status_kelas" value="benar"> <span class="text-success">Benar</span></input>
          </td>
          <td>
            <input type="radio" name="status_kelas" value="salah"> <span class="text-danger">Salah</span></input>
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <button type="button" name="update" class="btn btn-dark form-control">Simpan data</button>
          </td>
        </tr>
      </table>
    </div>

    <div>
      <p class="text-center text-muted">Copyright &copy; RPL <?php echo date('Y'); ?></p>
    </div>
  </body>
</html>
