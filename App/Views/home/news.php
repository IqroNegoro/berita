<?= var_dump($data) ?>
<div class="news">
    <?php foreach ($data["detail"] as $berita) : ?>
        <div class="img">
            <img src="<?= $data["img"] ?>" alt="">
        </div>
        <div class="judul">
            <h2><?= $berita["judul"] ?></h2>
        </div>
    <?php endforeach ?>
</div>