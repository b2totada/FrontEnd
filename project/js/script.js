function respNav() {
    let x = document.getElementsByClassName("navbar-col")[0];
    if (x.className === "navbar-col") {
      x.className += " responsive";
    } else {
      x.className = "navbar-col";
    }
}