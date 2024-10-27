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
            <strong><a class="text-white mt-2">
                    Daftar User
                </a>
                <a class="btn btn-dark" style="float:right;" href="<?= base_url('tambah-user') ?>">
                    <i class="fa-solid fa-plus"></i> Tambah Pegawai</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ROLE</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($users as $user) {
                    ?>
                        <tr>
                            <td scope="row"><?= $i++ ?></td>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['role'] ?></td>
                            <td>
                                <a href="#" class="btn btn-info">
                                    <i class="fa-solid fa-circle-info"></i> Detail</a>
                                <a href="#" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <!-- <a href="<?= base_url('hapus-pegawai/' . $pgw['id']) ?>" class="btn btn-danger">Hapus</a> -->
                                <a onclick="hapus(<?= $user['id'] ?>)" href="#" class="btn btn-danger">
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


<script>
    function hapus(id) {
        if (confirm("Apakah kamu yakin ingin menghapus data dengan id = " + id)) {
            $.ajax({
                url: "<?= base_url('api-hapus-user/') ?>" + id,
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
</script>