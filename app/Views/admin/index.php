<?= $this->extend('layouts/main') ?>
<?= $this->Section('content'); ?>
<div class="py-4">
<div class="row">
        <div class="col-xl-3 col-md-6">
            <?= $users ; ?>
        </div>
        <div class="col-xl-3 col-md-6">
        <?= $users ; ?>
        </div>
        <div class="col-xl-3 col-md-6">
        <?= $users ; ?>
        </div>
        <div class="col-xl-3 col-md-6">
        <?= $users ; ?>
        </div>
    </div>
</div>
 


<?= $this->endSection('content'); ?>