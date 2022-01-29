<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php if (isset($data["kreator"])) : ?>
        <meta name="author" content="<?=$data["kreator"] ?>">
    <?php endif ?>
    <?php if (isset($data["title"])) : ?>
        <meta name="keywords" content="berita, news, <?= $data["title"] ?>">
    <?php endif ?>
    <?php if (isset($data["isi"])) : ?>
        <meta name="description" content="<?= $data["isi"] ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/style.css">
    <?php if (isset($data["style"])) : ?>
        <link rel="stylesheet" href="<?= BASEURL ?><?= $data["style"] ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/icon/css/boxicons.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($data["title"])) : ?>
        <title><?= $data["title"] ?></title>
    <?php else : ?>
        <title>Howax</title>
    <?php endif ?>
</head>

<body>
    <div class="container">