let form = document.forms["regist"];
let alerting = document.getElementsByClassName("alert")[0];
let loading = document.getElementsByClassName("check")[0]
async function postData(data) {
    loading.style.display = "block";
    loading.firstElementChild.style.width = "0%"
    return await fetch("http://localhost/berita/registrasi/create", {
        method: "POST",
        body: data
    }).then(resp => resp.text()).then(resp => {
        console.log(resp)
        loading.firstElementChild.style.width = "100%"
        window.location.replace("http://localhost/berita/user");
    }).catch(err => console.log(err));
}


function alerts(str) {
    alerting.lastElementChild.innerHTML = str;
    alerting.style.transform = "translate(0,0)";
    let timeOut = setTimeout(() => {
        alerting.style.transform = "translate(0,-150px)";
    }, 5000);
    clearTimeout(timeOut);
}


function checking(data) {
    if (/^[a-zA-Z]+\s*[a-zA-Z]*$/g.test(data["nama"].value) && data["nama"].value.length >= 8) {
        if (/[a-zA-Z]{6,}[0-9]{1,}/g.test(data["password"].value) && data["password"].value === data["repeatpass"].value) {
            if (data["email"].value.length >= 10) {
                let doc = new FormData(data);
                postData(doc);
                return true;
            } else {
                alerts("Email harus di isi!")
            }
        } else {
            alerts("Password harus di isi! \n Minimal 8 huruf dan 1 angka!")
        }
    } else {
        alerts("Nama harus di isi! \n Nama harus di isi minimal 8 huruf!")
    }
    return false;
}


form.addEventListener("submit", e => {
    e.preventDefault();
    checking(form)
})