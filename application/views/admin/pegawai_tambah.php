<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Tambah Pegawai</h4>
        </div>
        <div class="card-body">
            <form action="tambah-pegawai" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="label-control">Nama Lengkap</label>
                            <input value="<?php echo set_value('nama_lengkap'); ?>" name="nama_lengkap" id="nama_lengkap" type="text" class="form-control">
                            <?php echo form_error('nama_lengkap'); ?>
                            <?php
                            if (form_error('nama_lengkap')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('nama_lengkap') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="label-control">Nip</label>
                            <input value="<?php echo set_value('nip'); ?>" name="nip" id="nip" type="text" class="form-control">
                            <?php echo form_error('nip'); ?>
                            <?php
                            if (form_error('nip')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('nip') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="label-control">Jenis Kelamin</label>
                            <select name="jk" id="jk" type="text" class="form-control">
                                <option value="" default>--- Pilih ---</option>
                                <option <?= set_value('jk') == 'Perempuan' ? 'selected' : ''; ?> value="Perempuan">Perempuan</option>
                                <option <?= set_value('jk') == 'Laki-laki' ? 'selected' : ''; ?> value="Laki-laki">Laki-Laki</option>
                            </select>
                            <?php echo form_error('jk'); ?>
                            <?php
                            if (form_error('jk')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('jk') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="tmp_lahir" class="label-control">Tempat Lahir</label>
                            <input value="<?php echo set_value('tmp_lahir'); ?>" name="tmp_lahir" id="tmp_lahir" type="text" class="form-control">
                            <?php echo form_error('tmp_lahir'); ?>
                            <?php
                            if (form_error('tmp_lahir')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('tmp_lahir') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_lahir" class="label-control">Tanggal Lahir</label>
                            <input value="<?php echo set_value('tgl_lahir'); ?>" name="tgl_lahir" id="tgl_lahir" type="date" class="form-control">
                            <?php echo form_error('tgl_lahir'); ?>
                            <?php
                            if (form_error('tgl_lahir')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('tgl_lahir') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="label-control">Upload Foto</label>
                            <input value="<?php echo set_value('img'); ?>" name="img" id="img" type="file" class="form-control">
                            <?php echo form_error('img'); ?>
                            <?php
                            if (form_error('img')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('img') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jabatan" class="label-control">Jabatan</label>
                            <select name="jabatan" id="jabatan" type="text" class="form-control <?= form_error('jabatan') ? 'is-invalid' : ''; ?>" id="jabatan" value="<?php echo set_value('jabatan'); ?>">
                                <option value="" default>--- Pilih ---</option>
                                <?php
                                foreach ($jabatan as $jb) {
                                ?>
                                    <option <?= set_value('jabatan') == $jb['kode'] ? 'selected' : ''; ?> value="<?= $jb['kode'] ?>"><?= $jb['nama_jabatan'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('jabatan')  ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="label-control">Email</label>
                            <input name="email" id="email" type="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" value="<?php echo set_value('email'); ?>">
                            <div class="invalid-feedback">
                                <?= form_error('email')  ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="no_tlp" class="label-control">No Telepon</label>
                            <input name="no_tlp" id="no_tlp" type="text" class="form-control <?= form_error('no_tlp') ? 'is-invalid' : ''; ?>" id="email" value="<?php echo set_value('no_tlp'); ?>">
                            <?php
                            if (form_error('no_tlp')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('no_tlp') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="label-control">Alamat</label>
                            <textarea name="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid' : ''; ?>" id="alamat"><?php echo set_value('alamat'); ?></textarea>
                            <?php
                            if (form_error('alamat')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('alamat') ?>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>