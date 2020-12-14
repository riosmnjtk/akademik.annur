<?php
$tahun_ajaran1 = date('Y');
$tahun_ajaran2 = $tahun_ajaran1 + 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Pendaftaran Siswa Baru</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="img/annur.png"/>
		<link rel="stylesheet" href="css/menu.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/bgimg.css"/>
		<link rel="stylesheet" href="css/font.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <!-- DATA TABLE -->
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        
	</head>
<body>

	<div class="background"></div>
	<div class="backdrop"></div>
	<div class="login-form-container">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="img/annur.png"/>
				</div>
				<h3>Formulir Pendaftaran</h3>
			</div>
			<form method="post" action="proses_ppdb.php" class="login-form"  enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Tahun Ajaran :</label>
                    <input name="tahun_ajaran" type="text" value ="<?php echo $tahun_ajaran1?>/<?php echo $tahun_ajaran2 ?>" class="form-control" style="text-transform: capitalize;" disabled>
                </div>

                <div class="form-group" id="tingkatan">
                    <label>Tingkatan Sekolah</label>
                    <select name="tingkatan" class="form-control">
                        <option value="0">--Pilih--</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                    </select>
                </div>

                <div class="form-group" id="kelas_sd">
                    <label>Kelas SD</label>
                    <select name="kelas_sd" class="form-control">
                        <option value="0">--Pilih--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>

                <div class="form-group" id="kelas_smp">
                    <label>Kelas SMP</label>
                    <select name="kelas_smp" class="form-control">
                        <option value="0">--Pilih--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

				<div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" maxlength="50" required="" style="text-transform: capitalize;">
                </div>
                
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <label><input type="radio" name="jenis_kelamin" value="L"> Laki-Laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukkan Tempat Lahir" maxlength="20" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                    <label>Nama Ayah</label>
                    <input name="nama_ayah" type="text" class="form-control" placeholder="Masukkan Nama Ayah" maxlength="50" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                    <label>Tempat Lahir Ayah</label>
                    <input name="tempat_lahir_ayah" type="text" class="form-control" placeholder="Masukkan Tempat Lahir Ayah" maxlength="50" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir Ayah</label>
                    <input name="tgl_lahir_ayah" type="date" class="form-control" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input name="nama_ibu" type="text" class="form-control" placeholder="Masukkan Nama Ibu" maxlength="50" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                    <label>Tempat Lahir Ibu</label>
                    <input name="tempat_lahir_ibu" type="text" class="form-control" placeholder="Masukkan Tempat Lahir Ibu" maxlength="50" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Tanggal Lahir Ibu</label>
                <input name="tgl_lahir_ibu" type="date" class="form-control" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Pekerjaan Ayah</label>
                <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Masukkan Pekerjaan Ayah" maxlength="20" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Pekerjaan Ibu</label>
                <input name="pekerjaan_ibu" type="text" class="form-control" placeholder="Masukkan Pekerjaan Ibu" maxlength="20" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Pekerjaan Wali</label>
                <input name="pekerjaan_wali" type="text" class="form-control" placeholder="Masukkan Pekerjaan Wali" maxlength="20" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Pendidikan Ayah</label>
                <input name="pendidikan_ayah" type="text" class="form-control" placeholder="Masukkan Pendidikan Ayah" maxlength="15" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Pendidikan Ibu</label>
                <input name="pendidikan_ibu" type="text" class="form-control" placeholder="Masukkan Pendidikan Ibu" maxlength="15" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Daerah Ayah</label>
                <input name="daerah_ayah" type="text" class="form-control" maxlength="30" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Daerah Ibu</label>
                <input name="daerah_ibu" type="text" class="form-control" maxlength="30" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" type="text" class="form-control" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>RT</label>
                <input name="rt" type="text" class="form-control" maxlength="3" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>RW</label>
                <input name="rw" type="text" class="form-control" maxlength="3" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Kelurahan</label>
                <input name="kelurahan" type="text" class="form-control" maxlength="30" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Kecamatan</label>
                <input name="kecamatan" type="text" class="form-control" maxlength="30" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Kabupaten / Kota</label>
                <input name="kabupaten" type="text" class="form-control" maxlength="30" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>No Telepon</label>
                <input name="no_telpon" type="number" class="form-control" maxlength="15" required="" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Pas Foto</label>
                <input name="pas_foto" type="file" class="form-control" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Akte Kelahiran</label>
                <input name="akte_kelahiran" type="file" class="form-control" style="text-transform: capitalize;">
                </div>

                <div class="form-group">
                <label>Akte Keluarga</label>
                <input name="akte_keluarga" type="file" class="form-control" style="text-transform: capitalize;">
                </div>

				<button class="button btn-register" name="submit">Submit</button>
			</form>
		</div>
	</div>
<script type="text/javascript">
 $(function () {
        $("#tingkatan").change(function () {
            if ($(this).val() == "SD") 
            {
                $("#kelas_sd").show();
            } 
            else 
            {
                $("#kelas_smp").hide();
            }
            
        });
    });
</script>


</body>
</html>
