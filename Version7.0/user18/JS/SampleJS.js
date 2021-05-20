function scrollWindow() {
    window.scrollTo(0, 0)
}

$("#myCarousel").carousel();

$(".item").click(function () {
    $("#myCarousel").carousel(1);
});

$(".left").click(function () {
    $("#myCarousel").carousel("prev");
});

function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

function move2019() {
    window.location.href = "2018-2021.html";
}
function move2009() {
    window.location.href = "2009-2013.html";
}
function move2014() {
    window.location.href = "2014-2017.html";
}
function moveHome() {
    window.location.href = "Home.html"
}