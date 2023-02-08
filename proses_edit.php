<?php
include ("koneksi.php");
if(isset($_POST['simpan'])){
         
    $nama_peminjam=$_POST['nama_peminjam'];
    $alamat=$_POST['alamat'];
    $umur=$_POST['umur'];
    $keperluan=$_POST['keperluan'];
    $jaminan=$_POST['jaminan'];
    $nomor_rangka=$_POST['nomor_rangka'];
    $merek=$_POST['merek'];
    $jenis_motor=$_POST['jenis_motor'];
    $tahun_motor=$_POST['tahun_motor'];
    $tanggal_pinjam=$_POST['tanggal_pinjam'];
    $tanggal_kembali=$_POST['tanggal_kembali'];


          $sql="UPDATE tb_peminjam SET nama_peminjam='$nama_peminjam', alamat='$alamat', umur='$umur', keperluan='$keperluan',
           jaminan='$jaminan' WHERE id_peminjam='$id'";
          $query=mysqli_query($db,$sql);
          
          $sql="UPDATE tb_motor SET nomor_rangka='$nomor_angka', merek='$merek', jenis_motor='$jenis_motor', tahun_motor='$tahun_motor',
          tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali' WHERE id_motor='$id'";
          $query=mysqli_query($db,$sql);

          
          

          if($query){
                    header("Location:tampil.php?status=sukses");
          }else{
                    die ("gagal mengedit");
        }  }else{
                    die("akses dilarang");
          }

          ?>