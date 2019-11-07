const change = document.querySelector('body');
change.addEventListener('onload', changeColor);

function changeColor() {

    t = setInterval(color, 1000);

    function color() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        var rgb = 'rgb(' + r + ',' + g + ',' + b + ')';
        change.style.backgroundColor = rgb;
    }
}