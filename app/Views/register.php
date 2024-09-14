<?= $this->extend("public_layout") ?>
<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <h2>Create a new account</h2>
                    <?php $validation = \Config\Services::validation(); ?>

                    <form action="<?= base_url("register") ?>" method="post">
                        <div class="mb-2">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= old('username') ?>">
                            <?php if (isset($validation)): ?>
                                <div class="text-danger">
                                    <?= $validation->getError('username') ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= old('email') ?>">
                            <?php if (isset($validation)): ?>
                                <div class="text-danger">
                                    <?= $validation->getError('email') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?= old('password') ?>">
                            <?php if (isset($validation)): ?>
                                <div class="text-danger">
                                    <?= $validation->getError('password') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-2">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" value="<?= old('cpassword') ?>">
                            <?php if (isset($validation)): ?>
                                <div class="text-danger">
                                    <?= $validation->getError('cpassword') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-2">
                            <input name='register' type="submit" value="Register" class="btn btn-primary" />
                        </div>
                    </form>
                    <a href="<?= base_url("login") ?>">Already have an account?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection("content") ?>