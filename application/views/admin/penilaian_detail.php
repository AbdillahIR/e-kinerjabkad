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
            <strong><a class="text-white mt-2">Detail Penilaian</a>
                <a class="btn btn-dark float-right" href="<?= base_url('admin/penilaian/print/' . $pegawai['id']) ?>">Cetak</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <img src="<?= base_url("assets/uploads/" . $pegawai['img']) ?>">
                        <div class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5><?= $pegawai['nama'] ?></h5>
                                <p class="card-text"><?= $pegawai['nip'] ?> | <?= $pegawai['nama_jabatan'] ?></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <?php
                    foreach ($nilai as $_nilai) {
                    ?>
                        <div class="card mb-3">
                            <div class="card-header">
                                <?= $_nilai['nama_kriteria'] ?>
                            </div>
                            <div class="card-body">
                                <h1>Nilai : <?= $_nilai['nilai'] ?></h1>
                                <p>Ket :
                                    <?php
                                    foreach ($_nilai['keterangan'] as $nilai_ket) {
                                        if ($_nilai['nilai'] >= $nilai_ket['min'] && $_nilai['nilai'] <= $nilai_ket['max']) {
                                            echo $nilai_ket['keterangan'];
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    Jumlah : <?= $jumlah ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    Rata - Rata : <?= round($rata_rata) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    Predikat : <?= $predikat ?>
                                </div>
                            </div>
                        </div>
                        <pre>
                    </div>

                    <div class="mt-3">
                        <p>Catatan : <?= $catatan ?></p>
                    </div>
                    </pre>
                    </div>
                </div>
            </div>