<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Tambah Pengajuan</h4>
        </div>
        <div class="card-body">
            <form action="tambah-permohonan" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="label-control">Nama Kegiatan</label>
                            <input value="<?php echo set_value('nama_kegiatan'); ?>" name="nama_kegiatan" id="nama_kegiatan" type="text" class="form-control">
                            <?php echo form_error('nama_kegiatan'); ?>
                            <?php
                            if (form_error('nama_kegiatan')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('nama_kegiatan') ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nama" class="label-control">Periode Mulai</label>
                                        <input value="<?php echo set_value('tgl_mulai'); ?>" name="tgl_mulai" id="tgl_mulai" type="date" class="form-control">
                                        <?php echo form_error('tgl_mulai'); ?>
                                        <?php
                                        if (form_error('tgl_mulai')) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= form_error('tgl_mulai') ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nama" class="label-control">Periode Selesai</label>
                                        <input value="<?php echo set_value('tgl_selesai'); ?>" name="tgl_selesai" id="tgl_selesai" type="date" class="form-control">
                                        <?php echo form_error('tgl_selesai'); ?>
                                        <?php
                                        if (form_error('nama')) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= form_error('tgl_selesai') ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="nama" class="label-control">Keterangan Kegiatan</label>
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
                            <label for="file" class="label-control">Upload Proposal</label>
                            <input value="<?php echo set_value('proposal_kegiatan'); ?>" name="proposal_kegiatan" id="proposal_kegiatan" type="file" class="form-control">
                            <?php echo form_error('proposal_kegiatan'); ?>
                            <?php
                            if (form_error('proposal_kegiatan')) {
                            ?>
                                <div class="invalid-feedback">
                                    <?= form_error('proposal_kegiatan') ?>
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