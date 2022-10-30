const countries = ["kovir_and_poviss", "nilfgaard", "lyria", "aedirn", "temeria", "verden", "cidaris", "bremervooris", "skellige", "redania", "kaedwen", "hengfors"];

window.addEventListener('resize', function() {
    resizeCards();
});

window.addEventListener('load', function() {
    createCards();
});

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

function resizeCards() {
    let w = document.getElementById('map-img').getBoundingClientRect().width;
    let h = document.getElementById('map-img').getBoundingClientRect().height;
    Array.from(document.getElementsByClassName("card")).forEach(el => {
        el.style.width = `${Math.round(w * 0.85)}px`;
        el.style.height = `${Math.round(h * 0.80)}px`;
    });
}

function showCard(card_class) {
    let card = document.querySelector(card_class);
    let crest = card.querySelector('.card-crest');
    let img = document.getElementsByClassName('card-img')[0];
    card.style.display = "block";
    crest.style.cssFloat = "right";
    img.style.cssFloat = "left";
    crest.style.width = "20%";
    img.style.width = "30%";
}

function closeCard(card_class) {
    let card = document.querySelector(card_class);
    card.style.display = "none";
}

function createCards() {
    countries.forEach(el => {
        //card itself
        let card = document.createElement("div");
        document.getElementsByTagName("body")[0].appendChild(card);
        card.classList.add("card", `card-${el}`);
        //close btn
        let close = document.createElement("h3");
        card.appendChild(close);
        close.classList.add("card-close", `card-${el}-close`);
        let arg = `.card-${el}`;
        close.addEventListener("click", function(){ closeCard(`${arg}`); });
        close.innerText = "X";
        //corner img
        let corner = document.createElement("img");
        card.appendChild(corner);
        corner.className = "card-corner";
        corner.src  = "images/locations/corner.png";
        //card-main
        let main = document.createElement("div");
        card.appendChild(main);
        main.className = "card-main";
        //title
        let title = document.createElement("h2");
        main.appendChild(title);
        title.className = "card-title";
        title.innerText = `${el.replace(/_/g, " ")}`;
        //crest
        let crest = document.createElement("img");
        main.appendChild(crest);
        crest.className = "card-crest";
        crest.src  = `images/locations/crests/${el}_crest.png`;
        //text
        let text = document.createElement("p");
        main.appendChild(text);
        text.className = "card-text";
        text.innerHTML = "<span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Cras non sapien a enim condimentum tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas tincidunt lacinia elementum. Mauris sit amet tellus euismod, condimentum arcu eu, convallis metus. Pellentesque posuere convallis volutpat. Nam elementum magna pulvinar, pharetra purus sit amet, eleifend urna. Donec pulvinar magna gravida, maximus sapien sed, laoreet magna. Integer massa dolor, auctor ut metus at, efficitur dignissim velit. Donec quis ultrices justo. Cras maximus, orci at vulputate consectetur, urna lectus consequat justo, in pharetra orci leo at ex.";
        //img
        let img = document.createElement("img");
        main.appendChild(img);
        img.className = "card-img";
        img.src = `images/locations/card-img/${el}_building.png`;
        //text2
        text = document.createElement("p");
        main.appendChild(text);
        text.className = "card-text";
        text.innerText = "Integer dignissim, elit ac imperdiet tempus, felis sapien consectetur sapien, nec tincidunt urna leo eget est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pulvinar consectetur lectus nec viverra. Pellentesque mattis risus at nulla dictum, sit amet gravida nisl aliquam. In id massa odio. Quisque iaculis molestie tempor. Maecenas fringilla scelerisque sapien, quis rhoncus mauris. Sed tempor, arcu a scelerisque gravida, mauris risus placerat nisl, non blandit sapien orci at augue. Suspendisse potenti.";
        //line
        let line = document.createElement("img");
        card.appendChild(line);
        line.className = "card-line";
        line.src = "images/locations/line.png";
    })
}