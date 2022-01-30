<div class="account">
    <div class="profile" style="background-image: linear-gradient(rgb(0,0,0,0), rgba(0,0,0,0.8)), url(<?= BASEURL ?>assets/img/<?= $data["detail"][0]["profile"] ?>)">
        <img src="<?= BASEURL ?>assets/img/<?= $data["detail"][0]["profile"] ?>" alt="">
        <div class="nama">
            <h3><?= $data["detail"][0]["nama"] ?></h3>
        </div>
    </div>
    <div class="isi">
        <h3> Bio </h3>
        <p>
            <?= $data["detail"][0]["bio"] ?>
        </p>
        <h2> Berita </h2>
        <?php if ($data["detail"][0]["kreator"] !== NULL) : ?>

            <div class="items">
                <?php foreach ($data["detail"] as $x) : ?>
                    <div class="item">
                        <a href="<?= BASEURL ?>home/news/<?= $x["url"] ?>" target="_blank">
                            <div class="img">
                                <img src="<?= BASEURL ?>assets/img/<?= $x["img"] ?>" alt="">
                            </div>
                            <div class="title">
                                <h2><?= $x["judul"] ?></h2>
                            </div>
                            <div class="text">
                                <p><?= substr($x["isi"], 0, 100) ?></p>
                            </div>
                            <div class="info">
                                <div class="view">
                                    <i class="bx bxs-pointer"></i><span><?= $x["view"] ?></span>
                                </div>
                                <div class="rilis">
                                    <i class="bx bxs-time"></i><span><?= $x["rilis"] ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
    </div>
<?php else : ?>
    <h1> Belum ada berita satupun</h1>
<?php endif ?>
</div>