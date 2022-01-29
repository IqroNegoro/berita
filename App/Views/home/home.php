<div class="berita">
    <div class="col-1">
        <h3> Berita Terbaru ! </h3>
        <!-- <?= var_dump($data["news"]) ?> -->
        <div class="items">
            <?php foreach ($data["news"] as $new) : ?>
                <div class="item" data-kategori="<?= $new["kategori"] ?>">
                    <a href="<?= BASEURL ?>home/news/<?= $new["url"] ?>">
                        <img src="<?= BASEURL ?>assets/img/<?= $new["img"] ?>" alt="Gambar berita">
                        <div class="title">
                            <h4> <?= $new["judul"] ?> </h4>
                        </div>
                        <div class="description">
                            <p><?= $new["isi"] ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="col-2">
        <h3> Berita Terpopuler ! </h3>
        <div class="items">
            <!-- <?= var_dump($data["popular"]) ?> -->
            <?php foreach ($data["popular"] as $pop) : ?>
                <div class="item" data-kategori="<?= $pop["kategori"] ?>">
                    <a href="<?= BASEURL ?>home/news/<?= $pop["url"] ?>">
                        <img src="<?= BASEURL ?>assets/img/<?= $pop["img"] ?>" alt="Gambar berita">
                        <div class="title">
                            <h4> <?= $pop["judul"] ?> </h4>
                        </div>
                        <div class="description">
                            <p><?= $pop["isi"] ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
</div>
