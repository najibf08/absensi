<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
.card {
    background-color: #f9f9f9;
    margin-top: 100px;
}

.table {
    width: 90%;
    margin-left: 190px;
}

.row {
    margin-left: 250px;
}

.icon {
    margin-top: 20px;
    float: right;
}

@media (max-width: 768px) {
    .card {
        background-color: #f9f9f9;
        margin-top: 70px;
    }

    .row {
        margin-left: 0;
        /* Menghapus margin kiri */
    }

    .icon {
        float: none;
        /* Menghapus floating icon */
        margin-top: 10px;
        /* Menggeser icon ke atas */
    }
}
</style>

<body>
    <?php $this->load->view('components/sidebar_karyawan'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-check fa-4x icon float-end"></i>
                        <h6 class="card-title">Jumlah Masuk</h6>
                        <h1>30</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-envelope fa-4x icon float-end"></i>
                        <h6 class="card-title">Jumlah Izin</h6>
                        <h1>10</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fa-solid fa-calculator fa-4x icon float-end"></i>
                        <h6 class="card-title">Total</h6>
                        <h1>5</h1>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Pulang</th>
                    <th scope="col text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
