<div class="registrasi">
    <div class="box">
        <form action="<?= BASEURL ?>login/log" id="regist" method="POST" enctype="multipart/form-data">
            <label for="nama"> Nama : </label>
            <input type="text" id="nama" auto-complete="off" name="nama" autocomplete="off">
            <label for="password"> Password : </label>
            <input type="password" id="password" auto-complete="off" name="password">
            <button type="submit" id="submit"><span>Log in</span> <i class="bx bx-log-in"></i></button>
        </form>
        <a href="<?= BASEURL ?>registrasi/">
        <button>
            Registrasi <div class="bx bx-log-in"></div>
        </button>    
    </a>
    </div>
</div>
<div class="check">
    <div class="progress"></div>
</div>
<div class="alert">
    <div class="title">
        Alert!
    </div>
    <div class="text">
    </div>
</div>