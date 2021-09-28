<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul ?></title>
</head>

<body>

    <h1><?php echo $judul ?></h1>

    <!--$data_edisibuku_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
    <form method="post" action="<?php echo site_url('edisibuku/update_submit/' . $data_edisibuku_single['id']); ?>">
        <table>
            <tr>
                <td>Buku</td>
                <!--$data_edisibuku_single['nama'] : menampilkan data edisibuku yang dipilih dari database -->
                <td>
                    <select name="id_buku">
                        <?php foreach ($data_buku as $buku) : ?>
                            <?php if ($buku['id'] == $data_edisibuku_single['id_buku']) : ?>
                                <option value="<?php echo $buku['id']; ?>" selected><?php echo $buku['judul']; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $buku['id']; ?>"><?php echo $buku['judul']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Edisi Buku</td>
                <!--$data_edisibuku_single['nama'] : menampilkan data edisibuku yang dipilih dari database -->
                <td><input type="text" name="nama_edisi" value="<?php echo $data_edisibuku_single['nama_edisi']; ?>" required=""></td>
            </tr>
            <tr>
                <td>Jumlah Cetak</td>
                <td><input type="text" name="jumlah_cetak" value="<?php echo $data_edisibuku_single['jumlah_cetak']; ?>" required=""></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>

</html>