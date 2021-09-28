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

    <form method="post" action="<?php echo site_url('buku/insert_submit/'); ?>">
        <table border="1">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="" required="" class="form-control"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="" required="" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>

</html>