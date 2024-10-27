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
            <strong><a class="text-white mt-2">Dokumentasi</a></strong>
            <th> <a class="btn btn-dark" style="float:right;" href="<?= base_url('tambah-dokumentasi') ?>">Upload Dokumentasi</a></th>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Link Dokumentasi</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Update</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">Kosong</td>
                        <td scope="col">Kosong</td>
                        <td scope="col">Kosong</td>
                        <td scope="col">Kosong</td>
                        <td scope="col">Kosong</td>
                        <td scope="col">
                            <a href="#" class="btn btn-info">
                                <i class="fa-solid fa-circle-info"></i></a>
                            <a href="#" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>