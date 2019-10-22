<h3><?= $sub_judul ?></h3>
<hr>
<style>
    label {
        display: block;
    }
</style>
<form action="<?= site_url('administrator/pegawai/simpan'); ?>" method="post">
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" name="nip" id="nip">
    </div>

    <div class="form-group">
        <label for="nip">NAMA</label>
        <input type="text" class="form-control" name="nama" id="nama">
    </div>
    <div class="form-group">
        <label for="nip">ALAMAT</label>
        <input type="text" class="form-control" name="alamat" id="alamat">
    </div>
    <div class="form-group">
        <label for="nip">JABATAN</label>
        <input type="text" class="form-control" name="jabatan" id="jabatan">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Kirim</button>
    </div>
</form>