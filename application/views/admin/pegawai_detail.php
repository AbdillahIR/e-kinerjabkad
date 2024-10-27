<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Detail Pegawai
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <tr>
                                <td>Foto:</td>
                                <td>:</td>
                                <th>
                                    <img width="200" src="<?= base_url('assets/uploads/' . $pegawai['img']) ?>" alt="Foto tidak" class="img-thumbnail" </th>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <th><?= $pegawai['nip'] ?></th>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <th><?= $pegawai['nama'] ?></th>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <th><?= $pegawai['jk'] ?></th>
                            </tr>
                            <tr>
                                <td>Tempat, Tgl Lahir</td>
                                <td>:</td>
                                <th><?= $pegawai['tmp_lahir'] ?>, <?= $pegawai['tgl_lahir'] ?></th>
                            </tr>
                            <tr>
                                <td>Jabatan:</td>
                                <td>:</td>
                                <th><?= $pegawai['nama_jabatan'] ?></th>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>:</td>
                                <th><?= $pegawai['email'] ?></th>
                            </tr>
                            <tr>
                                <td>No Telepon:</td>
                                <td>:</td>
                                <th><?= $pegawai['no_tlp'] ?></th>
                            </tr>
                            <tr>
                                <td>Alamat:</td>
                                <td>:</td>
                                <th><?= $pegawai['alamat'] ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>