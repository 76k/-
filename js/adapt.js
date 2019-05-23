window.onload = function () {
    var box_navtwo = document.getElementById("box_navtwo")
    console.log(box_navtwo);
    var box_navthree = document.getElementById("box_navthree")
    console.log(box_navthree);
    var a = 1;
    box_navtwo.onclick = function () {
        if ( a = 1 && a < 1) {
            box_navthree.style.display = "block"
            box_navtwo.style.transform = "rotate(90deg)"
        } else {
            box_navthree.style.display = "none"
            box_navtwo.style.transform = "rotate(0deg)"
        }
    }
}
