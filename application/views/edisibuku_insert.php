<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul ?></title>
</head>

<body>

    <h1><?php echo $judul ?></h1>


    <form method="post" action="<?php echo site_url('edisibuku/insert_submit/'); ?>">
        <table>
            <tr>
                <td>Buku</td>
                <td>
                    <select name="id_buku">
                        <?php foreach ($data_buku as $buku) : ?>
                            <option value="<?php echo $buku['id']; ?>">
                                <?php echo $buku['judul']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Edisi</td>
                <td><input type="text" name="nama_edisi" value="" required=""></td>
            </tr>
            <tr>
                <td>Jumlah Cetak</td>
                <td><input type="text" name="jumlah_cetak" value="" required=""></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>

</html>