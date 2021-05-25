$('.round').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.arrow').toggleClass('bounceAlpha');
});

function openWin1() {
    window.open("asia.html");
}

function openWin2() {
    window.open("europe.html");
}

function openWin3() {
    window.open("america.html");
}

function load1() {
    alert("Page has loaded to Asia");
}
function load3() {
    alert("Page has loaded to Europe");
}
function load2() {
    alert("Page has loaded to America");
}