let menu = document.getElementsByClassName("menu")[0];
let sidenav = document.getElementsByClassName("sidenav")[0];
menu.addEventListener("click", e => {
    sidenav.style.display = "block";
    sidenav.classList.toggle("active");
})

window.addEventListener("click", e => {
    if (e.target == sidenav) {
        sidenav.classList.remove("active");
    }
})

let category = document.querySelectorAll("[data-kategori]");
let item = document.querySelectorAll(".sidenav .berita ul li");

item.forEach(val => {
    val.addEventListener("click", e => {
        for (let i = 0; i < category.length; i++) {
            if (val.innerHTML.toLowerCase() == "semua") {
                category[i].style.display = "block";
            } else if (category[i].dataset.kategori.toLowerCase() !== val.innerHTML.toLowerCase()) {
                category[i].style.display = "none";
            } else {
                category[i].style.display = "block";
            }
        }
    })
})