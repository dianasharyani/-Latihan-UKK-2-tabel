<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
$id=$_GET['id'];
$sql=("SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_peminjam = tb_motor.id_motor  where tb_peminjam.id_peminjam='$id'");
$query = mysqli_query($db,$sql);
$data = mysqli_fetch_assoc($query);

?>
<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="tampil.php"><input type="button" value="kembali"></a>
    <form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id_peminjam" value="<?php echo $data['id_peminjam']?>" />
            <p>
                <label for="nama_peminjam">Nama Peminjam :</label>
                <input type="text" name="nama_peminjam"  value="<?php echo $data['nama_peminjam']?>" />
            </p>

            <p>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat"  value="<?php echo $data['alamat']?>" />
            </p>
            <p>
                <label for="umur">Umur :</label>
                <input type="number" name="umur"  value="<?php echo $data['umur']?>"/>
            </p>
            <p>
                <label for="keperluan">Keperluan : </label>
                <input type="text" name="keperluan" value="<?php echo $data['keperluan']?>" />
            </p>
            <p>
                <label for="jaminan">Jaminan : </label>
                <input type="text" name="jaminan" value="<?php echo $data['jaminan']?>" />
            </p>
            <p>
                <label for="nomor_rangka">Nomor Rangka  : </label>
                <input type="number" name="nomor_rangka" value="<?php echo $data['nomor_rangka']?>" />
            </p>
            <p>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" value="<?php echo $data['merek']?>" />
            </p>
            <p>
                <label for="jenis_motor">Jenis Motor : </label>
                <input type="text" name="jenis_motor" value="<?php echo $data['jenis_motor']?>" />
            </p>
            <p>
                <label for="tahun_motor">Tahun Motor : </label>
                <input type="year" name="tahun_motor" value="<?php echo $data['tahun_motor']?>" />
            </p>
            <p>
                <label for="tanggal_pinjam">Tanggal Pinjam : </label>
                <input type="date" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam']?>" />
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal Kembali : </label>
                <input type="date" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali']?>" />
            </p>
            
            <p>
                <input type="submit" value="kirim" name="edit" />
            </p>
        </fieldset>
</form>
</body>
</html>