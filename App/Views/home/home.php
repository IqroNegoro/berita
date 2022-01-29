<div class="berita">
    <div class="col-1">
        <h3> Berita Terbaru ! </h3>
        <div class="items">
            <?php foreach ($data["news"] as $berita) : ?>
                <div class="item" data-kategori="<?= $berita["kategori"] ?>">
                    <a href="<?= BASEURL ?>home/news/<?= $berita["url"] ?>">
                        <img src="<?= BASEURL ?>assets/img/<?= $berita["img"] ?>" alt="Gambar berita">
                        <div class="title">
                            <h4> <?= $berita["judul"] ?> </h4>
                        </div>
                        <div class="description">
                            <p><?= $berita["isi"] ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="col-2">
        <h3> Berita Terpopuler ! </h3>
        <div class="items">
            <?php foreach ($data["popular"] as $berita) : ?>
                <div class="item" data-kategori="<?= $berita["kategori"] ?>">
                    <a href="<?= BASEURL ?>home/news/<?= $berita["url"] ?>">
                        <img src="<?= BASEURL ?>assets/img/<?= $berita["img"] ?>" alt="Gambar berita">
                        <div class="title">
                            <h4> <?= $berita["judul"] ?> </h4>
                        </div>
                        <div class="description">
                            <p><?= $berita["isi"] ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>