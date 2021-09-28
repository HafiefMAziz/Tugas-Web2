<a href="<?php echo site_url('edisibuku/insert'); ?>">Tambah</a>
<br /><br />

<table border="1">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Nama Edisi</th>
            <th>Jumlah Cetak</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_edisibuku as $edisibuku) : ?>
            <tr>
                <td><?php echo $edisibuku['id']; ?></td>
                <td><?php echo $edisibuku['judul_buku']; ?></td>
                <td><?php echo $edisibuku['nama_edisi']; ?></td>
                <td><?php echo number_format($edisibuku['jumlah_cetak']); ?></td>
                <td>
                    <a href="<?php echo site_url('edisibuku/update/' . $edisibuku['id']); ?>">
                        Ubah
                    </a>

                    <a href="<?php echo site_url('edisibuku/delete/' . $edisibuku['id']); ?>" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>