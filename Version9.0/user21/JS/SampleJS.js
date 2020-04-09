function changeText() {
 document.getElementById("textChange").innerHTML= "<div class= 'text'>Thanks for liking my webpage</div>" ;
}
var space = " ";
var pos = 0;
var msg = "List";

function confirmInput() {
            fname = document.forms[0].fname.value;
            alert("Hello " + fname + "! You will now be redirected to https://ibighit.com/");
        }
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();
function DoubleclickME() {
            document.getElementById("demo").innerHTML = "<div class= 'an'>SURPRISE!</div>" ;
        }
function bigImg(x) {
  x.style.height = "150px";
  x.style.width = "150px";
}

function normalImg(x) {
  x.style.height = "80px";
  x.style.width = "80px";
}
function myFunction(elmnt, clr) {
  elmnt.style.color = clr;
}
