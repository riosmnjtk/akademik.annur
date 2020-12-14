<html>
  <head>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  </head>
  <body>
  </body>
 </html>

<?php
include "koneksi.php";
$tahun_ajaran1 = date('Y');
$tahun_ajaran2 = $tahun_ajaran1 + 1;
$x = (int) substr($tahun_ajaran1, 2, 2);
$y = (int) substr($tahun_ajaran2, 2, 2);

$query = mysqli_query($connect, "SELECT max(id_daftar) as kodeTerbesar FROM ppdb");
$data = mysqli_fetch_array($query);
$id_pendaftaran = $data['kodeTerbesar'];
$urutan = (int) substr($id_pendaftaran,  2, 4);
$urutan++;
$huruf = "PS";
$no_daftar = $huruf . sprintf("%04s", $urutan) . $x . $y;
$pw = "PW" . sprintf("%04s", $urutan);

//Proses Tambah
if(isset($_POST['submit'])){
    
    $ekstensi_diperbolehkan	= array('png','jpg');
    $pas_foto = $_FILES['pas_foto']['name'];
    $x = explode('.', $pas_foto);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['pas_foto']['size'];
    $file_tmp = $_FILES['pas_foto']['tmp_name'];
    
    $akte_kelahiran = $_FILES['akte_kelahiran']['name'];
    $y = explode('.', $akte_kelahiran);
    $ekstensi = strtolower(end($y));
    $ukuran	= $_FILES['akte_kelahiran']['size'];
    $file_tmp1 = $_FILES['akte_kelahiran']['tmp_name'];

    $akte_keluarga = $_FILES['akte_keluarga']['name'];
    $z = explode('.', $akte_keluarga);
    $ekstensi = strtolower(end($z));
    $ukuran	= $_FILES['akte_keluarga']['size'];
    $file_tmp2 = $_FILES['akte_keluarga']['tmp_name'];

  $tingkatan            = $_POST['tingkatan'];
  $kelas_sd             = $_POST['kelas_sd'];
  $kelas_smp            = $_POST['kelas_smp'];
  $nama_lengkap         = $_POST['nama_lengkap'];
  $jenis_kelamin        = $_POST['jenis_kelamin'];
  $tempat_lahir         = $_POST['tempat_lahir'];
  $tgl_lahir            = $_POST['tgl_lahir'];
  $nama_ayah            = $_POST['nama_ayah'];
  $tempat_lahir_ayah    = $_POST['tempat_lahir_ayah'];
  $tgl_lahir_ayah       = $_POST['tgl_lahir_ayah'];
  $nama_ibu             = $_POST['nama_ibu'];
  $tempat_lahir_ibu     = $_POST['tempat_lahir_ibu'];
  $tgl_lahir_ibu        = $_POST['tgl_lahir_ibu'];
  $pekerjaan_ayah       = $_POST['pekerjaan_ayah'];
  $pekerjaan_ibu        = $_POST['pekerjaan_ibu'];
  $pekerjaan_wali       = $_POST['pekerjaan_wali'];
  $pendidikan_ayah      = $_POST['pendidikan_ayah'];
  $pendidikan_ibu       = $_POST['pendidikan_ibu'];
  $daerah_ayah          = $_POST['daerah_ayah'];
  $daerah_ibu           = $_POST['daerah_ibu'];
  $alamat               = $_POST['alamat'];
  $rt                   = $_POST['rt'];
  $rw                   = $_POST['rw'];
  $kelurahan            = $_POST['kelurahan'];
  $kecamatan            = $_POST['kecamatan'];
  $kabupaten            = $_POST['kabupaten'];
  $no_telpon            = $_POST['no_telpon'];
	
  move_uploaded_file($file_tmp, 'file/'.$pas_foto);
  move_uploaded_file($file_tmp1, 'file/'.$akte_kelahiran);
  move_uploaded_file($file_tmp2, 'file/'.$akte_keluarga);

  //INSERT QUERY START
  $query = "INSERT INTO ppdb values('$no_daftar','$pw','', '$tahun_ajaran1 / $tahun_ajaran2', 
  '$tingkatan', '$kelas_sd', '$kelas_smp', '$nama_lengkap', '$jenis_kelamin', '$tempat_lahir', 
  '$tgl_lahir', '$nama_ayah', '$tempat_lahir_ayah', '$tgl_lahir_ayah', '$nama_ibu', '$tempat_lahir_ibu', 
  '$tgl_lahir_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$pekerjaan_wali', '$pendidikan_ayah', 
  '$pendidikan_ibu', '$daerah_ayah', '$daerah_ibu', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', 
  '$kabupaten', '$no_telpon', '$pas_foto', '$akte_kelahiran', '$akte_keluarga')";
  $sql   = mysqli_query($connect,$query);

  if ($sql == 1) {
    echo "<script>
    setTimeout(function() {
    swal({
        title: 'Berhasil',
        text: 'Data Anda Telah Tersimpan',
        type: 'success',
        timer: 300000,
        showConfirmButton: true
    }, function() {
        window.location = 'index.php';
    });
    });
    </script>";
    } else {
        echo "<script>
        setTimeout(function() {
        swal({
            title: 'Gagal',
            text: 'Data Anda Gagal Tersimpan',
            type: 'error',
            timer: 3000,
            showConfirmButton: true
        }, function() {
            window.location = 'index.php';
        });
        });
        </script>";
    }
}
?>