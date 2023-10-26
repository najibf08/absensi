<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/your/custom.css">
</head>
<style>
h2 {
    margin-top: 10%;
    margin-left: 29%;
}

.exp {
    margin-left: 29%;
}

table {
    margin-top: 1%;
    margin-left: 29%;
}

@media (max-width: 768px) {
    h2 {
        margin-top: 80px;
        margin-left: 10%;
    }

    .exp {
        margin-left: 10%;
    }

    .table {
        margin-top: 10px;
        margin-left: 10%;
    }
}
</style>

<body>
    <?php $this->load->view('component/sidebar_admin'); ?>
    <div class="comtainer-fluid">
        <div class="col-md-9">
            <h2>Daftar Karyawan</h2>
            <a class="exp btn btn-primary mb-1" href="<?= base_url(
                'admin/export_daftar_karyawan'
            ) ?>"><i class="fa-solid fa-file-export"></i></a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($absensi as $row): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><button type="button" class="btn btn-danger" onclick="hapus(<?php echo $row->id; ?>)"><i
                                    class="fa-solid fa-trash"></i></button></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- Tambahkan tag-script Anda di sini, seperti JavaScript yang dibutuhkan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/your/custom.js"></script>
    <script>
    function hapus(id) {
        Swal.fire({
            title: 'Yakin Di Hapus?',
            text: "Anda tidak dapat mengembalikannya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo base_url(
                    'admin/hapusKaryawan/'
                ); ?>" + id;
            }
        });
    }
    </script>

</body>

</html>