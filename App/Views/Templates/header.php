<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="<?=$data["kreator"] ?>">
    <meta name="keywords" content="berita, news, <?= $data["title"] ?>">
    <meta name="description" content="<?= $data["isi"] ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/style.css">
    <?php if (isset($data["style"])) : ?>
        <link rel="stylesheet" href="<?= BASEURL ?><?= $data["style"] ?>">
    <?php endif ?>
    <?php
    if (isset($data["style"])) :
    ?>
        <link rel="stylesheet" href="<?= BASEURL ?><?= $data["style"] ?>">
    <?php
    endif;
    ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/icon/css/boxicons.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($data["title"]) : ?>
        <title><?= $data["title"] ?></title>
    <?php else : ?>
        <title>Howax</title>
    <?php endif ?>
</head>

<body>
    <div class="container">