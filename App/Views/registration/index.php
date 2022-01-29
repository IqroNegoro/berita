<div class="registrasi">
    <div class="box">
        <form action="<?= BASEURL ?>registrasi/create" id="regist" method="POST" enctype="multipart/form-data">
            <label for="nama"> Nama : </label>
            <input type="text" id="nama" auto-complete="off" name="nama" autocomplete="off">
            <label for="password"> Password : </label>
            <input type="password" id="password" auto-complete="off" name="password">
            <label for="repeatpass"> Confirm Password : </label>
            <input type="password" id="repeatpass" auto-complete="off" name="repeatpass">
            <label for="email"> Email </label>
            <input type="email" id="email" auto-complete="off" name="email">
            <label for="select"> Reset Option </label>
            <select name="select" id="select">
                <option value="kucing">Kucing</option>
                <option value="anjing">Anjing</option>
                <option value="kelelawar">Kelelawar</option>
            </select>
            <button type="submit" id="submit"><span>Buat Akun</span> <i class="bx bx-log-in"></i></button>
        </form>
    </div>
</div>
<div class="alert">
    <div class="title">
        Alert!
    </div>
    <div class="text">
        
    </div>
</div>