<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Upload Laporan LPJ </h4>
        </div>
        <div class="card-body">
            <form action="tambah-lpj" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="label-control">Keterangan Laporan Pertanggungjawaban</label>
                            <textarea value="<?php echo set_value('keterangan_kegiatan'); ?>" name="keterangan_kegiatan" id="nama" class="form-control"> </textarea>
                            <?php echo form_error('keterangan_kegiatan'); ?>
                            <?php
                            if (form_error('keterangan_kegiatan')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('keterangan_kegiatan') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="label-control">Upload Lpj</label>
                            <input value="<?php echo set_value('lpj_kegiatan'); ?>" name="lpj_kegiatan" id="lpj_kegiatan" type="file" class="form-control">
                            <?php echo form_error('lpj_kegiatan'); ?>
                            <?php
                            if (form_error('lpj_kegiatan')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('lpj_kegiatan') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="label-control">Silahkan Upload Link Google Drive Dokumentasi</label>
                            <input value="<?php echo set_value('keterangan_kegiatan'); ?>" name="keterangan_kegiatan" placeholder="Masukan Link: https://drive.google.com/file/d/54wUrOkCVbx-e_LaFjXjzKYm0" id="nama" class="form-control"> </input>
                            <?php echo form_error('keterangan_kegiatan'); ?>
                            <?php
                            if (form_error('keterangan_kegiatan')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('keterangan_kegiatan') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>