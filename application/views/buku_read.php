<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul; ?></title>
</head>

<body>

    <!--link tambah data-->
    <a href="<?php echo site_url('buku/insert'); ?>">Tambah</a>
    <br /><br />

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!--looping data buku-->
            <?php foreach ($data_buku as $buku) : ?>

                <!--cetak data per baris-->
                <tr>
                    <td><?php echo $buku['id']; ?></td>
                    <td><?php echo $buku['judul']; ?></td>
                    <td><?php echo $buku['stok']; ?></td>
                    <td>
                        <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('buku/update/' . $buku['id']); ?>">
                            Ubah
                        </a>
                        |
                        <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('buku/delete/' . $buku['id']); ?>" onClick="return confirm('Apakah anda yakin?')">
                            Hapus
                        </a>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>