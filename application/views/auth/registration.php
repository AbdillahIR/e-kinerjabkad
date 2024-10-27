<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card o-hidden border-5 shadow-lg my-5">
                <div class="p-4">
                    <div class="text-center">
                        <h1 class="h4 text-black-950 mb-1">Formulir Registrasi</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('registration') ?>" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" id="name" value="<?php echo set_value('name'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('name')  ?>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="no_tlp" class="form-label">No Handpone</label>
                                <input type="text" name="no_tlp" class="form-control  <?= form_error('no_tlp') ? 'is-invalid' : ''; ?>" id="no_tlp" value="<?php echo set_value('no_tlp'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('no_tlp')  ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" name="nip" class="form-control  <?= form_error('nip') ? 'is-invalid' : ''; ?>" id="nip" value="<?php echo set_value('nip'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('nip')  ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control  <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" value="<?php echo set_value('email'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('email')  ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control  <?= form_error('password') ? 'is-invalid' : ''; ?>" id="password">
                                <div class="invalid-feedback">
                                    <?= form_error('password')  ?>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="<?= base_url('login') ?>" class="btn btn-success float-right">Kembali</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>