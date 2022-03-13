function myFunction() {
    var x = document.getElementById("menu-menu");
    if (x.className === "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }
}