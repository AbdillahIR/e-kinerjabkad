<!-- Begin Page Content -->
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
            <strong><a class="text-white mt-2">Daftar Jabatan</a></strong>
            <th> <a class="btn btn-dark" style="float:right;" href="<?= base_url('tambah-jabatan') ?>">
                    <i class="fa-solid fa-plus"></i> Tambah Jabatan</a></th>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">KODE JABATAN</th>
                        <th scope="col">NAMA JABATAN</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($jabatan as $jbt) {
                    ?>
                        <tr>
                            <td scope="col">#</td>
                            <td scope="col"><?= $jbt['kode'] ?></td>
                            <td scope="col"><?= $jbt['nama_jabatan'] ?></td>
                            <td scope="col">
                                <a href="<?= base_url('detail-jabatan/' . $jbt['id']) ?>" class="btn btn-info">
                                    <i class="fa-solid fa-circle-info"></i> Detail</a>
                                <a href="<?= base_url('edit-jabatan/' . $jbt['id']) ?>" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="<?= base_url('hapus-jabatan/' . $jbt['id']) ?>" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>