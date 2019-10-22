<h3><?= $sub_judul ?></h3>
<hr>

<a class="btn btn-success" href="<?= site_url('administrator/pengguna/add'); ?>">Tambah Data</a>

<br>
<br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Email</th>
        <th>Password</th>
        <th>#</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($data_pengguna as $isi) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $isi->email; ?></td>
            <td><?= $isi->password; ?></td>
            <td>
                <a href="<?= site_url('administrator/pengguna/edit/' . $isi->kode); ?>">Edit</a>
                |
                <a href="<?= site_url('administrator/pengguna/delete/' . $isi->kode); ?>">Delete</a>
            </td>

        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>