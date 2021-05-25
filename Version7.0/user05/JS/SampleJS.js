function button1() {
    console.log('button1()');
    window.scrollTo(0, 0)
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$("#myCarousel").carousel();


$(".item").click(function () {
    $("#myCarousel").carousel(1);
});


$(".left").click(function () {
    $("#myCarousel").carousel("prev");
});

function button2() {
    location.href = "Evolution.html";
}

function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

