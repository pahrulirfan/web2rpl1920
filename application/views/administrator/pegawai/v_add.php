<h3><?= $sub_judul ?></h3>
<hr>
<style>
    label {
        display: block;
    }
</style>

<?php //echo validation_errors(); ?>

<form action="<?= site_url('administrator/pegawai/simpan'); ?>" method="post">
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text"
               class="form-control <?= (form_error('nip')) ? 'is-invalid' : ''; ?>"
               name="nip" id="nip" value="<?= set_value('nip') ?>">
        <div class="invalid-feedback"><?= form_error('nip'); ?></div>
    </div>

    <div class="form-group">
        <label for="nama">NAMA</label>
        <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama"
               value="<?= set_value('nama') ?>">
        <div class="invalid-feedback"><?= form_error('nama'); ?></div>
    </div>
    <div class="form-group">
        <label for="nip">ALAMAT</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
        <small style="color: red"><?= form_error('alamat'); ?></small>
    </div>
    <div class="form-group">
        <label for="nip">JABATAN</label>
        <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= set_value('jabatan') ?>">
        <small style="color: red"><?= form_error('jabatan'); ?></small>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Kirim</button>
    </div>
</form>