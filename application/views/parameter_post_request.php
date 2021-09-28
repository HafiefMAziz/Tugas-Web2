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

    <h3><?php echo $judul; ?></h3>

    <form method="post" action="<?php echo site_url('parameter/post_response/'); ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" value=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" id="gender1" name="gender" value="Pria">
                    <label for="gender1">Pria</label><br>
                    <input type="radio" id="gender2" name="gender" value="Wanita">
                    <label for="gender2">Wanita</label><br>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Tampilkan"></td>
            </tr>
        </table>
    </form>

</body>

</html>