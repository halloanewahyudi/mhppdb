<?= $this->extend('layouts/main') ?>
<?=  $this->Section('content') ?>
<?php 
  $fields = $db->getFieldData('santri');

  foreach ($fields as $field) {
      echo $field->name;
      echo $field->type;
      echo $field->max_length;
      echo $field->primary_key;
      echo '<br>';
  }
foreach($santri as $san){
    echo $san->username;
} ?>
<?= $this->endSection(); ?>
