<!doctype html>
<html lang="<?= esc($lang) ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?></title>
    <link href="<?= base_url('assets/css/bootstrap_5.3.min.css') ?>" rel="stylesheet">
  </head>
  <body class="bg-black">
    <?= $this->renderSection('content') ?>
    <script src="<?= base_url('assets/js/bootstrap_5.3.bundle.min.js') ?>"></script>
  </body>
</html>