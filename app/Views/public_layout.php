<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include("bootstrap") ?>
    <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">
    <script src="<?= base_url('js/main.js') ?>" async></script>
</head>

<body>
    <?= $this->include('navbar.php') ?>
    <?= $this->renderSection('content') ?>
</body>

</html>