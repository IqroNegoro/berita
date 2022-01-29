let form = document.forms["regist"];

async function postData(data) {
    return await fetch("http://localhost/berita/registrasi/create", {
        method: "POST",
        body: data
    }).then(resp => resp.text()).then(resp => console.log(resp)).catch(err => console.log(resp));
}

function checking(data) {
    
}

form.addEventListener("submit", e => {
    e.preventDefault();
    checking(form);
    let data = new FormData(form);
    let succes = postData(data);
    if (succes > 0) {
        // window.location.replace("http://localhost/berita");
        console.log("Berhasil!");
    } else {
        console.log("Gagal zamn");
    }
})