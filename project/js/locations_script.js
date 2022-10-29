function locationsNavDown() {
    let nav = document.getElementsByClassName("navbar")[0];
    navStyleDisplay = window.getComputedStyle(nav).getPropertyValue('display');
    if (navStyleDisplay === "none"){
        nav.style.display = "flex";
    } else {
        nav.style.display = "none";
    }

    let down = document.getElementsByClassName("nav-toggle-down")[0];
    down.style.display = "none";

    let up = document.getElementsByClassName("nav-toggle-up")[0];
    up.style.display = "block";
}

function locationsNavUp() {
    let nav = document.getElementsByClassName("navbar")[0];
    navStyleDisplay = window.getComputedStyle(nav).getPropertyValue('display');
    if (navStyleDisplay === "none"){
        nav.style.display = "flex";
    } else {
        nav.style.display = "none";
    }

    let down = document.getElementsByClassName("nav-toggle-down")[0];
    down.style.display = "block";

    let up = document.getElementsByClassName("nav-toggle-up")[0];
    up.style.display = "none";
}

function nilfgaard() {
    let n  = document.getElementsByClassName("nilfgaard")[0];
    
}

window.addEventListener('resize', function(event) {
    let w = document.getElementById('map-img').getBoundingClientRect().width;
    let h = document.getElementById('map-img').getBoundingClientRect().height;
    Array.from(document.getElementsByClassName("card")).forEach(el => {
        el.style.width = `${Math.round(w * 0.75)}px`;
        el.style.height = `${Math.round(h * 0.60)}px`;
    });
}, true);