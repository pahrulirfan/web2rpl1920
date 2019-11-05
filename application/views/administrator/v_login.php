<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet"
          href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header bg-success">
                    Login
                </div>
                <div class="card-body">
                    <form
                        action="<?=site_url('administrator/login/proses_login')?>"
                        method="post">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-outline-success" value="Login">
                        <a href="#" class="btn btn-outline-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>