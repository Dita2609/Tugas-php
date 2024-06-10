<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: tahoma, arial}
        table {border-collapse: collapse; width: 100%; margin-bottom: 20px;}
        th, td {font-size: 13px; border: 1px solid #0000FE; padding: 3px 5px; color: #303030}
        th {background: #CCCCFF; font-size: 12px; border-color: #0000FF}
        h1, h3 {text-align: center}
    </style>
</head>
<body>
    <h1>Sistem Penjualan Percetakan Cerdas</h1>
    <h3>Tabel Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal_Lahir</th>
                <th>Nomor_Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php'; 
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);
            while($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id_pelanggan']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['tanggal_lahir']; ?></td>
                <td><?php echo $row['nomor_telepon']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nomor_Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pegawai';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id_pegawai']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jabatan']; ?></td>
                <td><?php echo $row['nomor_telepon']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pesanan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Pesanan</th>
                <th>Id_Pelanggan</th>
                <th>Id_Pegawai</th>
                <th>Tanggal_Pesanan</th>
                <th>Total_Biaya</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pesanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id_pesanan']; ?></td>
                <td><?php echo $row['id_pelanggan']; ?></td>
                <td><?php echo $row['id_pegawai']; ?></td>
                <td><?php echo $row['tanggal_pesanan']; ?></td>
                <td><?php echo $row['total_biaya']; ?></td>
                <td><?php echo $row['status']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Layanan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Layanan</th>
                <th>Nama_Layanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Layanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id_layanan']; ?></td>
                <td><?php echo $row['nama_layanan']; ?></td>
                <td><?php echo $row['harga']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Detail Pesanan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_pesanan</th>
                <th>Id_layanan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Detail_Pesanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id_pesanan']; ?></td>
                <td><?php echo $row['id_layanan']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel keanggotaan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_keanggotaan</th>
                <th>Id_Pelanggan</th>
                <th>Nama_Keanggotaan</th>
                <th>Tanggal_Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM keanggotaan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id_keanggotaan']; ?></td>
                <td><?php echo $row['id_pelanggan']; ?></td>
                <td><?php echo $row['nama_keanggotaan']; ?></td>
                <td><?php echo $row['tanggal_bergabung']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

  