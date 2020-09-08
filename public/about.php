<?php

require 'mix.php';

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Mix Example Setup</title>

    <!-- Compiled CSS -->
    <link rel="stylesheet" href="<?= mix('css/app.css') ?>">
</head>
<body>

<a href="index.php">Home</a>

<!-- Shared JS -->
<script src="<?= mix('js/manifest.js') ?>" defer></script>
<script src="<?= mix('js/vendor.js') ?>" defer></script>

<!-- Page specific JS -->
<script src="<?= mix('js/main.js') ?>" defer></script>
<script src="<?= mix('js/about.js') ?>" defer></script>

</body>
</html>
