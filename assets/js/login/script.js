let form = document.forms["regist"];
let alerting = document.getElementsByClassName("alert")[0];
let loading = document.getElementsByClassName("check")[0]
function alerts(str) {
    alerting.lastElementChild.innerHTML = str;
    alerting.style.transform = "translate(0,0)";
    let timeOut = setTimeout(() => {
        alerting.style.transform = "translate(0,-150px)";
    }, 5000);
    clearTimeout(timeOut);
}

async function postData(data) {
    loading.style.display = "block";
    loading.firstElementChild.style.width = "0%"
    return await fetch("http://localhost/berita/login/log", {
        method: "POST",
        body: data
    }).then(resp => resp.text()).then(resp => {
        loading.firstElementChild.style.width = "100%";
        let response = JSON.parse(resp);
        if (response.success) {
            alerts("Berhasil Masuk!")
            window.location.replace("http://localhost/berita/user/" + response.nama);
        } else {
                loading.style.display = "none";
                loading.firstElementChild.style.width = "0";
                alerts("Nama / password salah~")
        }
    }).catch(err => {
        console.log(err)
            loading.style.display = "none";
            loading.firstElementChild.style.width = "0";
            alerts("Nama / password salah~")
    });
}



form.addEventListener("submit", e => {
    e.preventDefault();
    let doc = new FormData(form);
    postData(doc);
})