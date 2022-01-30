const profile = document.getElementsByClassName("profile")[0];
window.addEventListener("scroll", e => {
    let y = window.scrollY
    profile.children[0].style.transform = "translateY(-" + (y / 2) + "px)";
    profile.children[1].style.transform = "translateY(-" + (y / 2) + "px)";
})