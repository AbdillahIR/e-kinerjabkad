<div class="container-fluid">

    <?php
    if ($this->session->flashdata('success')) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>
    <div class="card mt-2">
        <div class="card-header bg-success">
            <strong><a class="text-white mt-2">Laporan Pertanggung Jawaban dan Dokumentasi</a></strong>
            <th> <a class="btn btn-dark" style="float:right;" href="<?= base_url('tambah-lpj') ?>">Upload Laporan</a></th>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">KETERANGAN</th>
                        <th scope="col">LPJ</th>
                        <th scope="col">DOKUMENTASI</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">
                            <a href="#" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>Edit</a>
                            <a href="#" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>