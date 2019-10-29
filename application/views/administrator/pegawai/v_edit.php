<hr>
<style>
    label {
        display: block;
    }
</style>
<?php echo validation_errors(); ?>

<form action="<?= site_url('administrator/pegawai/proses_edit'); ?>" method="post">
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="hidden" name="id" value="<?= $isi_form->id; ?>">
        <input type="text" class="form-control" name="nip" id="nip" value="<?= $isi_form->nip ?>">
    </div>

    <div class="form-group">
        <label for="nip">NAMA</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $isi_form->nama ?>">
    </div>

    <div class="form-group">
        <label for="nip">ALAMAT</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $isi_form->alamat ?>">
    </div>

    <div class="form-group">
        <label for="nip">JABATAN</label>
        <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $isi_form->jabatan ?>">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Kirim</button>
    </div>
</form>