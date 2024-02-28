function stateBox(color) {
    document.getElementById("state").style.backgroundColor = color;
    function hijau() {
        document.getElementById("box1").style.backgroundColor = "#0f0";
        document.getElementById("box2").style.backgroundColor = "white";
        document.getElementById("box3").style.backgroundColor = "white";
    }

    function kuning() {
        document.getElementById("box1").style.backgroundColor = "white";
        document.getElementById("box2").style.backgroundColor = "#FFFF00"; //yellow
        document.getElementById("box3").style.backgroundColor = "white";
    }

    function merah() {
        document.getElementById("box1").style.backgroundColor = "white";
        document.getElementById("box2").style.backgroundColor = "white";
        document.getElementById("box3").style.backgroundColor = "#f00"; //red
    }
}
