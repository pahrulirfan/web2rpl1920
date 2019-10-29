<h3><?= $sub_judul ?></h3>
<hr>

<?php
if ($this->session->flashdata('msg')) {
    echo "<div class='alert-info alert' role='alert'>" . $this->session->flashdata('msg') . "</div>";
}
?>

<a class="btn btn-success" href="<?= site_url('administrator/pegawai/add'); ?>">Tambah Data</a>

<br>
<br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>#</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($data_pegawai as $isi) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $isi->nip; ?></td>
            <td><?= $isi->nama; ?></td>
            <td><?= $isi->alamat; ?></td>
            <td><?= $isi->jabatan; ?></td>
            <td>
                <a class="badge badge-info" href="<?= site_url('administrator/pegawai/edit/' . $isi->id); ?>">Edit</a>
                <a class="badge badge-danger" onclick="return confirm('Anda Yakin ?')" href="<?= site_url('administrator/pegawai/delete/' . $isi->id); ?>">Delete</a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
