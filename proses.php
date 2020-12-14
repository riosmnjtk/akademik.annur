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

// session_start();
if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $kode = substr($username, 0, 4);

  if ($kode == "PPDB"){

            $query = mysqli_query($connect, "SELECT * FROM ppdb where id_daftar='$username' AND password='$password'");
              
              //var_dump($query);
              
              $row=mysqli_fetch_array($query);
          
              if ($row){
                  session_start();
                   $_SESSION['id_daftar'] = $row['id_daftar'] ;
                   echo "<script>
                        setTimeout(function() {
                        swal({
                            title: 'Berhasil',
                            text: 'Anda Berhasil Login',
                            type: 'success',
                            timer: 3000,
                            showConfirmButton: true
                        }, function() {
                            window.location = 'ppdb/';
                        });
                        });
                        </script>";
               }else{
                  ?>
                      <script type="text/javascript">
                          alert("Username atau Password Salah");
                          document.location="index.php";
                      </script>
                  <?php
               }
               ?>
               <?php
      }else{
        $query = mysqli_query($connect, "SELECT * FROM admin where username='$username' AND password='$password'");
        $row=mysqli_fetch_array($query);
        if ($row){
          session_start();
          $_SESSION['username'] = $row['username'] ;
          echo "<script>
                        setTimeout(function() {
                        swal({
                            title: 'Berhasil',
                            text: 'Anda Berhasil Login',
                            type: 'success',
                            timer: 3000,
                            showConfirmButton: true
                        }, function() {
                            window.location = 'admin/';
                        });
                        });
                        </script>";
        }else{
        
          echo "<script>
                        setTimeout(function() {
                        swal({
                            title: 'Gagal',
                            text: 'Username Atau Password Anda Salah',
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
    }
?>