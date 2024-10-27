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
            <strong><a class="text-white mt-2">Penilaian Pegawai</a>
                <!-- <a class="btn btn-dark" style="float:right;" href="<?= base_url('tambah-pegawai') ?>"> -->
                <!-- <i class="fa-solid fa-plus"></i> Tambah Pegawai</a> -->
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">NILAI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pegawai as $pgw) {
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $pgw['nip'] ?></td>
                            <td><?= $pgw['nama'] ?></td>
                            <td><?= $pgw['nama_jabatan'] ?></td>
                            <td>
                                <?php
                                if ($pgw['nilai'] != null) {
                                ?>
                                    <span class="badge badge-success">Sudah di nilai</span>
                                <?php
                                } else {

                                ?>
                                    <span class="badge badge-info">Belum di nilai</span>
                                <?php
                                }
                                ?>
                            </td>
                            <td><?= $pgw['email'] ?></td>
                            <td>
                                <a href="<?= base_url('penilaian-pegawai/' . $pgw['id_pegawai']) ?>" class="btn btn-success"></i>Nilai</a>
                                <?php
                                if ($pgw['nilai'] != null) {

                                ?>
                                    <a href="<?= base_url('penilaian-detail/' . $pgw['id_pegawai']) ?>" class="btn btn-info"></i>Hasil</a>
                                <?php
                                }
                                ?>
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

<!-- 
<script>
    function hapus(id) {
        if (confirm("Apakah kamu yakin ingin menghapus data dengan id = " + id)) {
            $.ajax({
                url: "<?= base_url('api-hapus-pegawai/') ?>" + id,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    alert(response.message)
                    location.reload();
                }
            })
        } else {
            alert("Data batal dihapus")
        }

    }
</script> -->