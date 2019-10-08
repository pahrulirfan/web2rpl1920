<!doctype html>
<html lang="en">
<head>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="container">

    <h2 class="alert alert-success">
        <?php
        echo $nama . '<br>' . $umur;
        ?>
    </h2>
    <hr>
    <a href="<?= site_url('d3/rpl/ipk'); ?>" class="btn btn-success">IPK</a>

</div>

</body>
</html>