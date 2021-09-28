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

    <p><?= $post['nama'], " adalah ", $post['gender'], " ", $post['kategori_umur'], " berusia ", $post['umur'], " tahun"; ?></p>

</body>

</html>