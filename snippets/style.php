<?= css('assets/css/auf-style-reset.css') ?>

<?php /* ---------------------------

Generated Themes have to be first, to be overridable by custom settings */ ?>

<style>
  <?= snippet('auf-style/type-themes'); ?>
</style>

<?= css('assets/css/auf-style-fluid-typography.css') ?>

<?php /* ---------------------------

Typography */ ?>

<?= css('assets/css/auf-style-theme-default.css') ?>

<?php /* ---------------------------

Box Themes */ ?>

<style>
  <?php 
    snippet('auf-style/color-themes');
    snippet('auf-style/background-themes');
    snippet('auf-style/outline-themes');
    snippet('auf-style/border-themes');
    snippet('auf-style/text-shadow-themes');
    snippet('auf-style/box-shadow-themes');
    snippet('auf-style/box-themes');
  ?>
</style>