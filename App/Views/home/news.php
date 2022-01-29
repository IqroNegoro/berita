<?= $data["test"] ?>
<div class="news">
    <div class="img">
        <img src="<?= BASEURL ?>assets/img/<?= $data["detail"]["img"] ?>"></img>
    </div>
    <div class="judul">
        <h2><?= $data["detail"]["judul"] ?></h2>
    </div>
    <div class="view">
        <i class="bx bxs-pointer"></i>
        <span><?= $data["detail"]["view"]?> Viewers </span>
    </div>
    <div class="kreator">
        <div class="profile">
            <a href="<?= BASEURL ?>user/<?= $data["detail"]["nama"] ?>" target="_blank">
                <img src="<?= BASEURL ?>assets/img/<?= $data["detail"]["profile"] ?>" alt="Gambar Profile">
                <p><?= $data["detail"]["nama"] ?></p>
                <br>
                <p><i class="bx bxs-time"></i> <?= $data["detail"]["rilis"] ?></p>
            </a>
        </div>
    </div>
    <div class="isi">
        <p><?= $data["detail"]["isi"] ?></p>
    </div>
</div>