<?= $this->extend('layouts/main-test'); ?>
<?= $this->Section('content'); ?>
<div class="row">
    <div class="col-sm-4 offset-sm-4 d-flex flex-column justify-content-center vh-100">
    <h2 class="text-center"><?= lang('Auth.loginTitle') ?></h2>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="form-group">
                            <label for="login"><?= lang('Auth.email') ?></label>
                            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="password"><?= lang('Auth.password') ?></label>
                        <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <?php if ($config->allowRemembering) : ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <br>

                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                </form>

                <hr>
                <?php if ($config->activeResetter) : ?>
                    <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                <?php endif; ?>


    </div>
</div>
<?= $this->endSection() ?>