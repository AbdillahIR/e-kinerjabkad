<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Dokumentasi </h4>
        </div>
        <div class="card-body">
            <form action="tambah-lpj" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="nama" class="label-control">Silahkan Upload Link Google Drive</label>
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
                            <button class="btn btn-success">Simpan</button>
                            <a href="<?= base_url('dokumentasi') ?>" class="btn btn-dark">Batal</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>