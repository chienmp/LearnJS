function loadBigFoot() {
    document.getElementById('bigFoot').src = 'bigfoot.png'
}

function moveBigFoot() {
    alert('Yay!! U found the big Foot !!');
    var bigFoot = document.getElementById('bigFoot');
    var x = Math.random() * 200;
    var y = Math.random() * 242;
    bigFoot.style.top = x + 'px';
    bigFoot.style.left = y + 'px';
    console.log(bigFoot);
}