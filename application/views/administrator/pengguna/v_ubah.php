<hr>
<style>
    label {
        display: block;
    }
</style>
<form action="<?= site_url('administrator/pengguna/proses_edit'); ?>" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="hidden" name="kode" value="<?= $isi_form->kode; ?>">
        <input type="text" class="form-control" name="email" id="email" value="<?= $isi_form->email ?>">
    </div>

    <div class="form-group">
        <label for="password">Passwrod</label>
        <input type="text" class="form-control" name="password" id="password" value="<?= $isi_form->password ?>">
    </div>


    <div class="form-group">
        <button class="btn btn-success" type="submit">Kirim</button>
    </div>
</form>