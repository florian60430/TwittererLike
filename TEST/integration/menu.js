let btn = document.querySelector('.toggle_btn');
let nav = document.querySelector('.nav');

btn.onclik = function() {
    nav.classList.toggle('nav_open');
}