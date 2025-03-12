<!DOCTYPE html>
<html lang="<?= site()->language() ?? 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title() ?> | <?= $page->title() ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&family=Lexend+Exa:wght@300&display=swap" rel="stylesheet">
    
    
    <?= css('assets/css/style.css') ?>
</head>
<body>