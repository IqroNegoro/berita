<div class="nav">
    <div class="col-1">
        <div class="menu">
            <i class="bx bx-menu"></i>
        </div>
    </div>
    <div class="col-2">
        <?php if (isset($_COOKIE["pass"]) && isset($data["user"]["pass"])) : ?>
        <?php if ($_COOKIE["pass"] === $data["user"]["pass"]) : ?>
            <a href="<?= BASEURL ?>user/<?= $data["user"]["url"] ?>">
                <img src="<?= BASEURL ?>assets/img/<?= $data["user"]["profile"] ?>" alt="?">
            </a>
        <?php endif; ?>
        <?php else : ?>
            <a href="<?= BASEURL ?>registrasi/">
                <img src="<?= BASEURL ?>assets/img/login.png" alt="?">
            </a>
        <?php endif ?>
    </div>
</div>
<div class="sidenav">
    <div class="list">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/CNN_International_logo.svg/2048px-CNN_International_logo.svg.png" alt="logo">
            <p><b>Howax</b></p>
            <p> Portal Berita Terbohong </p>
        </div>
        <hr>
        <div class="berita">
            <h3> Kategori </h3>
            <ul>
                <li>Semua</li>
                <li>Olahraga</li>
                <li>Life Style</li>
                <li>Artis</li>
                <li>Fashion</li>
                <li>Kuliner</li>
                <li>Anime</li>
            </ul>
        </div>
    </div>
</div>
<main class="main">