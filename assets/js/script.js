let menu = document.getElementsByClassName("menu")[0];
let sidenav = document.getElementsByClassName("sidenav")[0];
menu.addEventListener("click", e => {
    sidenav.style.display = "block";
    sidenav.classList.toggle("active");
})

window.addEventListener("click", e => {
    if (e.target == sidenav) {
        sidenav.classList.toggle("active");
    }
})