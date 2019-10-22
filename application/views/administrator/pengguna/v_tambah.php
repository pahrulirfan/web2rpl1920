<h3><?= $sub_judul ?></h3>
<hr>
<style>
    label {
        display: block;
    }
</style>
<form action="<?= site_url('administrator/pengguna/simpan'); ?>" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" id="password">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Kirim</button>
    </div>
</form>