<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link rel="stylesheet" type="text/css" href="<?php ('assets/css/responsive.css'); ?>">
</head>

<body>
    <?php $this->load->view('components/sidebar_karyawan'); ?>
    <div class="main m-4">
        <div class="container w-75">
            <div class="card">
                <div class="card-header">
                    <h5>Absensi</h5>
                </div>
                <div class="card-body">
                    <?php foreach($absensi as $absen): ?>
                    <form class="row" action="<?php ('karyawan/aksi_update_absen'); ?>"
                        enctype="multipart/form-data" method="post">
                        <input type="hidden" name="id" value="<?php echo $absen->id ?>">
                        <div class="mb-3 col-12">
                            <label for="Kegiatan" class="form-label">Kegiatan</label>
                            <textarea class="form-control" aria-label="With textarea" name="kegiatan"
                                value="<?php echo $absen->kegiatan ?>"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-danger" href="javascript:history.go(-1)">Kembali</a>
                            <button type="submit" class="btn btn-success" name="submit">Edit</button>
                        </div>
                    </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>