<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">


            <div class="card o-hidden border-5 shadow-lg my-5">

                <!-- Start Notif -->
                <?php
                if ($this->session->flashdata('success')) {

                ?>
                    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                        <?php
                        echo $this->session->flashdata('success');
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                }
                ?>
                <?php
                if ($this->session->flashdata('failed')) {

                ?>
                    <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                        <?php
                        echo $this->session->flashdata('failed');
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                }
                ?>
                <!-- end Notif -->

                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-black-950 mb-5">Selamat Datang!</h1>
                        </div>
                        <form class="user" action="login" method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user  <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                <div class="invalid-feedback">
                                    <?= form_error('email')  ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user <?= form_error('password') ? 'is-invalid' : ''; ?>" id="password" placeholder="Password">
                                <div class="invalid-feedback">
                                    <?= form_error('password')  ?>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Login</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-white" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small text-white" href="<?= base_url('registration') ?>">Create an Account!</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>