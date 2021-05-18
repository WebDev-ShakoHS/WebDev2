function changeText() {
    document.getElementById("textChange").innerHTML = "Hallo this is dave from houston microsoft tech support. your bank account has been hack and all your money is ours now bye bye have nice day";
}

var space = " ";
var pos = 0;
var msg = "Gamer Virus Gamer Virus Gamer Virus Gamer Virus";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 10);
}
Scroll();

function virusAlert() {
    alert("Your Computer Has Many Severe Virus");
}

var trailLength = 8 // The length of trail (8 by default; put more for longer "tail")
var path = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNNdaMJito-VpR6YKTovz5MTHUpyXO1bnWjYd1PQBbS-F-Qc5gne0PvC3UTNdTqmF7-dA&usqp=CAU" // URL of your image

var standardbody = (document.compatMode == "CSS1Compat") ? document.documentElement : document.body //create reference to common "body" across doctypes
var i, d = 0

function initTrail() { // prepares the script
    images = new Array() // prepare the image array
    for (i = 0; i < parseInt(trailLength); i++) {
        images[i] = new Image()
        images[i].src = path
    }
    storage = new Array() // prepare the storage for the coordinates
    for (i = 0; i < images.length * 3; i++) {
        storage[i] = 0
    }
    for (i = 0; i < images.length; i++) { // make divs for IE and layers for Navigator
        document.write('<div id="obj' + i + '" style="position: absolute; z-Index: 100; height: 0; width: 0"><img src="' + images[i].src + '"></div>')
    }
    trail()
}
function trail() { // trailing function
    for (i = 0; i < images.length; i++) { // for every div/layer
        document.getElementById("obj" + i).style.top = storage[d] + 'px' // the Y-coordinate
        document.getElementById("obj" + i).style.left = + storage[d + 1] + 'px' // the X-coordinate
        d = d + 2
    }
    for (i = storage.length; i >= 2; i--) { // save the coordinate for the div/layer that's behind
        storage[i] = storage[i - 2]
    }
    d = 0 // reset for future use
    var timer = setTimeout("trail()", 10) // call recursively 
}
function processEvent(e) { // catches and processes the mousemove event 
    if (window.event) { // for IE
        storage[0] = window.event.y + standardbody.scrollTop + 10
        storage[1] = window.event.x + standardbody.scrollLeft + 10
    } else {
        storage[0] = e.pageY + 12
        storage[1] = e.pageX + 12
    }
}

initTrail()
document.onmousemove = processEvent // start capturing

    //-->

    ; (function () {

        var msg = "gamer virus gamer virus gamer virus gamer virus";

        // Set font's style size for calculating dimensions
        // Set to number of desired pixels font size (decimal and negative numbers not allowed)
        var size = 14;

        // Set both to 1 for plain circle, set one of them to 2 for oval
        // Other numbers & decimals can have interesting effects, keep these low (0 to 3)
        var circleY = 1; var circleX = 1;

        // The larger this divisor, the smaller the spaces between letters
        // (decimals allowed, not negative numbers)
        var letter_spacing = 4;

        // The larger this multiplier, the bigger the circle/oval
        // (decimals allowed, not negative numbers, some rounding is applied)
        var diameter = 22;

        // Rotation speed, set it negative if you want it to spin clockwise (decimals allowed)
        var rotation = 1;

        // This is not the rotation speed, its the reaction speed, keep low!
        // Set this to 1 or a decimal less than one (decimals allowed, not negative numbers)
        var speed = 1;

        ////////////////////// Stop Editing //////////////////////

        if (!window.addEventListener && !window.attachEvent || !document.createElement) return;

        msg = msg.split('');
        var n = msg.length - 1, a = Math.round(size * diameter * 0.20), currStep = 20,

            ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],

            o = document.createElement('div'), oi = document.createElement('div'),

            b = document.compatMode && document.compatMode != "BackCompat" ? document.documentElement : document.body,

            mouse = function (e) {
                e = e || window.event;
                ymouse = !isNaN(e.pageY) ? e.pageY : e.clientY; // y-position
                xmouse = !isNaN(e.pageX) ? e.pageX : e.clientX; // x-position
            },

            makecircle = function () { // rotation/positioning

                if (init.nopy) {
                    o.style.top = (b || document.body).scrollTop + 'px';
                    o.style.left = (b || document.body).scrollLeft + 'px';
                };

                currStep -= rotation;

                for (var d, i = n; i > -1; --i) { // makes the circle
                    d = document.getElementById('iemsg' + i).style;
                    d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';
                    d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
                };

            },

            drag = function () { // makes the resistance
                y[0] = Y[0] += (ymouse - Y[0]) * speed;
                x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
                for (var i = n; i > 0; --i) {
                    y[i] = Y[i] += (y[i - 1] - Y[i]) * speed;
                    x[i] = X[i] += (x[i - 1] - X[i]) * speed;
                };
                makecircle();
            },

            init = function () { // appends message divs, & sets initial values for positioning arrays

                if (!isNaN(window.pageYOffset)) {
                    ymouse += window.pageYOffset;
                    xmouse += window.pageXOffset;
                } else init.nopy = true;

                for (var d, i = n; i > -1; --i) {
                    d = document.createElement('div'); d.id = 'iemsg' + i;
                    d.style.height = d.style.width = a + 'px';
                    d.appendChild(document.createTextNode(msg[i]));
                    oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
                };

                o.appendChild(oi); document.body.appendChild(o);
                setInterval(drag, 25);

            },

            ascroll = function () {
                ymouse += window.pageYOffset;
                xmouse += window.pageXOffset;
                window.removeEventListener('scroll', ascroll, false);
            };

        o.id = 'outerCircleText'; o.style.fontSize = size + 'px';

        if (window.addEventListener) {
            window.addEventListener('load', init, false);
            document.addEventListener('mouseover', mouse, false);
            document.addEventListener('mousemove', mouse, false);
            if (/Apple/.test(navigator.vendor))
                window.addEventListener('scroll', ascroll, false);
        }

        else if (window.attachEvent) {
            window.attachEvent('onload', init);
            document.attachEvent('onmousemove', mouse);
        };

    })();

setInterval(() => {
    const time = document.querySelector("#time");
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let day_night = "AM";
    if (hours > 12) {
        hours = hours - 12;
        day_night = "PM";
    }
    if (hours < 10) {
        hours = "0" + hours;
    }
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }
    time.textContent = hours + ":" + minutes + ":" + seconds + day_night;
});

if ((document.getElementById) &&
    window.addEventListener || window.attachEvent) {

    (function () {

        //Configure here....

        var colours = new Array('#ff0000', '#00ff00', '#ffa500', '#fff000');
        var num = 100;    //number of segments.
        var icen = 2;    //next segment is times 'icen' previous segment size.
        var rep = 40;    //setTimeout speed.
        var min = 10;     //slowest speed.
        var max = 100;    //fastest speed.

        //End.

        var temp1 = new Array();
        var temp2 = new Array();
        if (icen % 2 != 0) icen++;
        var fcen = icen / 2;
        var d = document;
        var idx = d.getElementsByTagName('div').length;

        var dims;

        for (i = 0; i < num; i++) {
            var randcol = colours[Math.floor(Math.random() * colours.length)];
            var dims = (i + 1) * icen;
            document.write('<div id="worm' + (idx + i) + '" style="position:absolute;top:0px;left:0px;width:'
                + dims + 'px;height:' + dims + 'px;font-size:1px;border: 1px solid ' + randcol + ';overflow:hidden">.<\/div>');
        }

        var h, w, r;
        var y = 0;
        var x = 0;
        var dir = 45;   //direction.
        var acc = 6;    //acceleration.
        var newacc = new Array(1, 0, 1);
        var vel = 10;    //initial speed.
        var sev = 0;
        var newsev = new Array(8, -8, 5, -5, 3, -3, 1, -1, 0);

        //counters.
        var c1 = 0;    //time between changes.
        var c2 = 0;    //new time between changes.

        var pix = "px";

        var strictmod = ((document.compatMode) &&
            document.compatMode.indexOf("CSS") != -1);


        var domWw = (typeof window.innerWidth == "number");
        var domSy = (typeof window.pageYOffset == "number");

        if (domWw) r = window;
        else {
            if (d.documentElement &&
                typeof d.documentElement.clientWidth == "number" &&
                d.documentElement.clientWidth != 0)
                r = d.documentElement;
            else {
                if (d.body &&
                    typeof d.body.clientWidth == "number")
                    r = d.body;
            }
        }


        function winsize() {
            var oh, sy, ow, sx, rh, rw;
            if (domWw) {
                if (d.documentElement && d.defaultView &&
                    typeof d.defaultView.scrollMaxY == "number") {
                    oh = d.documentElement.offsetHeight;
                    sy = d.defaultView.scrollMaxY;
                    ow = d.documentElement.offsetWidth;
                    sx = d.defaultView.scrollMaxX;
                    rh = oh - sy;
                    rw = ow - sx;
                }
                else {
                    rh = r.innerHeight;
                    rw = r.innerWidth;
                }
                h = rh - (dims + fcen + 1);
                w = rw - (dims + fcen + 1);
            }
            else {
                h = r.clientHeight - (dims + fcen + 1);
                w = r.clientWidth - (dims + fcen + 1);
            }
        }


        function scrl(yx) {
            var y, x;
            if (domSy) {
                y = r.pageYOffset;
                x = r.pageXOffset;
            }
            else {
                y = r.scrollTop;
                x = r.scrollLeft;
            }
            return (yx == 0) ? y : x;
        }


        function followleader() {
            for (i = 0; i < num; i++) {
                if (i < num - 1) {
                    temp1[i].top = parseFloat(temp2[i].top) + fcen + pix;
                    temp1[i].left = parseFloat(temp2[i].left) + fcen + pix;
                }
                else {
                    temp1[i].top = y + scrl(0) + pix;
                    temp1[i].left = x + scrl(1) + pix;
                }
            }
        }


        function newpath() {
            sev = newsev[Math.floor(Math.random() * newsev.length)];
            acc = newacc[Math.floor(Math.random() * newacc.length)];
            c2 = Math.floor(10 + Math.random() * 50);
        }


        function animate() {
            var vb, hb, dy, dx, curr;
            if (acc == 1) vel += 0.05;
            if (acc == 0) vel -= 0.05;
            if (vel >= max) vel = max;
            if (vel <= min) vel = min;
            c1++;
            if (c1 >= c2) {
                newpath();
                c1 = 0;
            }
            curr = dir += sev;

            dy = vel * Math.sin(curr * Math.PI / 180);
            dx = vel * Math.cos(curr * Math.PI / 180);

            y += dy;
            x += dx;

            //horizontal-vertical bounce.
            vb = 180 - dir;
            hb = 0 - dir;

            //Corner rebounds?
            if ((y < 1) && (x < 1)) { y = 1; x = 1; dir = 45; }
            if ((y < 1) && (x > w)) { y = 1; x = w; dir = 135; }
            if ((y > h) && (x < 1)) { y = h; x = 1; dir = 315; }
            if ((y > h) && (x > w)) { y = h; x = w; dir = 225; }

            //edge rebounds.
            if (y < 1) { y = 1; dir = hb; }
            if (y > h) { y = h; dir = hb; }
            if (x < 1) { x = 1; dir = vb; }
            if (x > w) { x = w; dir = vb; }

            followleader();
            setTimeout(animate, rep);
        }


        function init() {
            for (i = 0; i < num; i++) {
                temp1[i] = document.getElementById("worm" + (idx + i)).style;
                if (i < num - 1)
                    temp2[i] = document.getElementById("worm" + (idx + (i + 1))).style;
            }
            winsize();

            var iniafter = Math.floor(500 + Math.random() * 2000);
            setTimeout(animate, iniafter);
        }


        if (window.addEventListener) {
            window.addEventListener("resize", winsize, false);
            window.addEventListener("load", init, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onresize", winsize);
            window.attachEvent("onload", init);
        }

    })();
}

if ((document.getElementById) &&
    window.addEventListener || window.attachEvent) {

    (function () {

        //Configure here....

        var colours = new Array('#ff0000', '#00ff00', '#ffa500', '#fff000');
        var num = 100;    //number of segments.
        var icen = 2;    //next segment is times 'icen' previous segment size.
        var rep = 40;    //setTimeout speed.
        var min = 10;     //slowest speed.
        var max = 100;    //fastest speed.

        //End.

        var temp1 = new Array();
        var temp2 = new Array();
        if (icen % 2 != 0) icen++;
        var fcen = icen / 2;
        var d = document;
        var idx = d.getElementsByTagName('div').length;

        var dims;

        for (i = 0; i < num; i++) {
            var randcol = colours[Math.floor(Math.random() * colours.length)];
            var dims = (i + 1) * icen;
            document.write('<div id="worm' + (idx + i) + '" style="position:absolute;top:0px;left:0px;width:'
                + dims + 'px;height:' + dims + 'px;font-size:1px;border: 1px solid ' + randcol + ';overflow:hidden">.<\/div>');
        }

        var h, w, r;
        var y = 0;
        var x = 0;
        var dir = 45;   //direction.
        var acc = 6;    //acceleration.
        var newacc = new Array(1, 0, 1);
        var vel = 10;    //initial speed.
        var sev = 0;
        var newsev = new Array(8, -8, 5, -5, 3, -3, 1, -1, 0);

        //counters.
        var c1 = 0;    //time between changes.
        var c2 = 0;    //new time between changes.

        var pix = "px";

        var strictmod = ((document.compatMode) &&
            document.compatMode.indexOf("CSS") != -1);


        var domWw = (typeof window.innerWidth == "number");
        var domSy = (typeof window.pageYOffset == "number");

        if (domWw) r = window;
        else {
            if (d.documentElement &&
                typeof d.documentElement.clientWidth == "number" &&
                d.documentElement.clientWidth != 0)
                r = d.documentElement;
            else {
                if (d.body &&
                    typeof d.body.clientWidth == "number")
                    r = d.body;
            }
        }


        function winsize() {
            var oh, sy, ow, sx, rh, rw;
            if (domWw) {
                if (d.documentElement && d.defaultView &&
                    typeof d.defaultView.scrollMaxY == "number") {
                    oh = d.documentElement.offsetHeight;
                    sy = d.defaultView.scrollMaxY;
                    ow = d.documentElement.offsetWidth;
                    sx = d.defaultView.scrollMaxX;
                    rh = oh - sy;
                    rw = ow - sx;
                }
                else {
                    rh = r.innerHeight;
                    rw = r.innerWidth;
                }
                h = rh - (dims + fcen + 1);
                w = rw - (dims + fcen + 1);
            }
            else {
                h = r.clientHeight - (dims + fcen + 1);
                w = r.clientWidth - (dims + fcen + 1);
            }
        }


        function scrl(yx) {
            var y, x;
            if (domSy) {
                y = r.pageYOffset;
                x = r.pageXOffset;
            }
            else {
                y = r.scrollTop;
                x = r.scrollLeft;
            }
            return (yx == 0) ? y : x;
        }


        function followleader() {
            for (i = 0; i < num; i++) {
                if (i < num - 1) {
                    temp1[i].top = parseFloat(temp2[i].top) + fcen + pix;
                    temp1[i].left = parseFloat(temp2[i].left) + fcen + pix;
                }
                else {
                    temp1[i].top = y + scrl(0) + pix;
                    temp1[i].left = x + scrl(1) + pix;
                }
            }
        }


        function newpath() {
            sev = newsev[Math.floor(Math.random() * newsev.length)];
            acc = newacc[Math.floor(Math.random() * newacc.length)];
            c2 = Math.floor(10 + Math.random() * 50);
        }


        function animate() {
            var vb, hb, dy, dx, curr;
            if (acc == 1) vel += 0.05;
            if (acc == 0) vel -= 0.05;
            if (vel >= max) vel = max;
            if (vel <= min) vel = min;
            c1++;
            if (c1 >= c2) {
                newpath();
                c1 = 0;
            }
            curr = dir += sev;

            dy = vel * Math.sin(curr * Math.PI / 180);
            dx = vel * Math.cos(curr * Math.PI / 180);

            y += dy;
            x += dx;

            //horizontal-vertical bounce.
            vb = 180 - dir;
            hb = 0 - dir;

            //Corner rebounds?
            if ((y < 1) && (x < 1)) { y = 1; x = 1; dir = 45; }
            if ((y < 1) && (x > w)) { y = 1; x = w; dir = 135; }
            if ((y > h) && (x < 1)) { y = h; x = 1; dir = 315; }
            if ((y > h) && (x > w)) { y = h; x = w; dir = 225; }

            //edge rebounds.
            if (y < 1) { y = 1; dir = hb; }
            if (y > h) { y = h; dir = hb; }
            if (x < 1) { x = 1; dir = vb; }
            if (x > w) { x = w; dir = vb; }

            followleader();
            setTimeout(animate, rep);
        }


        function init() {
            for (i = 0; i < num; i++) {
                temp1[i] = document.getElementById("worm" + (idx + i)).style;
                if (i < num - 1)
                    temp2[i] = document.getElementById("worm" + (idx + (i + 1))).style;
            }
            winsize();

            var iniafter = Math.floor(500 + Math.random() * 2000);
            setTimeout(animate, iniafter);
        }


        if (window.addEventListener) {
            window.addEventListener("resize", winsize, false);
            window.addEventListener("load", init, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onresize", winsize);
            window.attachEvent("onload", init);
        }

    })();
}

if ((document.getElementById) &&
    window.addEventListener || window.attachEvent) {

    (function () {

        //Configure here....

        var colours = new Array('#ff0000', '#00ff00', '#ffa500', '#fff000');
        var num = 100;    //number of segments.
        var icen = 2;    //next segment is times 'icen' previous segment size.
        var rep = 40;    //setTimeout speed.
        var min = 10;     //slowest speed.
        var max = 100;    //fastest speed.

        //End.

        var temp1 = new Array();
        var temp2 = new Array();
        if (icen % 2 != 0) icen++;
        var fcen = icen / 2;
        var d = document;
        var idx = d.getElementsByTagName('div').length;

        var dims;

        for (i = 0; i < num; i++) {
            var randcol = colours[Math.floor(Math.random() * colours.length)];
            var dims = (i + 1) * icen;
            document.write('<div id="worm' + (idx + i) + '" style="position:absolute;top:0px;left:0px;width:'
                + dims + 'px;height:' + dims + 'px;font-size:1px;border: 1px solid ' + randcol + ';overflow:hidden">.<\/div>');
        }

        var h, w, r;
        var y = 0;
        var x = 0;
        var dir = 45;   //direction.
        var acc = 6;    //acceleration.
        var newacc = new Array(1, 0, 1);
        var vel = 10;    //initial speed.
        var sev = 0;
        var newsev = new Array(8, -8, 5, -5, 3, -3, 1, -1, 0);

        //counters.
        var c1 = 0;    //time between changes.
        var c2 = 0;    //new time between changes.

        var pix = "px";

        var strictmod = ((document.compatMode) &&
            document.compatMode.indexOf("CSS") != -1);


        var domWw = (typeof window.innerWidth == "number");
        var domSy = (typeof window.pageYOffset == "number");

        if (domWw) r = window;
        else {
            if (d.documentElement &&
                typeof d.documentElement.clientWidth == "number" &&
                d.documentElement.clientWidth != 0)
                r = d.documentElement;
            else {
                if (d.body &&
                    typeof d.body.clientWidth == "number")
                    r = d.body;
            }
        }


        function winsize() {
            var oh, sy, ow, sx, rh, rw;
            if (domWw) {
                if (d.documentElement && d.defaultView &&
                    typeof d.defaultView.scrollMaxY == "number") {
                    oh = d.documentElement.offsetHeight;
                    sy = d.defaultView.scrollMaxY;
                    ow = d.documentElement.offsetWidth;
                    sx = d.defaultView.scrollMaxX;
                    rh = oh - sy;
                    rw = ow - sx;
                }
                else {
                    rh = r.innerHeight;
                    rw = r.innerWidth;
                }
                h = rh - (dims + fcen + 1);
                w = rw - (dims + fcen + 1);
            }
            else {
                h = r.clientHeight - (dims + fcen + 1);
                w = r.clientWidth - (dims + fcen + 1);
            }
        }


        function scrl(yx) {
            var y, x;
            if (domSy) {
                y = r.pageYOffset;
                x = r.pageXOffset;
            }
            else {
                y = r.scrollTop;
                x = r.scrollLeft;
            }
            return (yx == 0) ? y : x;
        }


        function followleader() {
            for (i = 0; i < num; i++) {
                if (i < num - 1) {
                    temp1[i].top = parseFloat(temp2[i].top) + fcen + pix;
                    temp1[i].left = parseFloat(temp2[i].left) + fcen + pix;
                }
                else {
                    temp1[i].top = y + scrl(0) + pix;
                    temp1[i].left = x + scrl(1) + pix;
                }
            }
        }


        function newpath() {
            sev = newsev[Math.floor(Math.random() * newsev.length)];
            acc = newacc[Math.floor(Math.random() * newacc.length)];
            c2 = Math.floor(10 + Math.random() * 50);
        }


        function animate() {
            var vb, hb, dy, dx, curr;
            if (acc == 1) vel += 0.05;
            if (acc == 0) vel -= 0.05;
            if (vel >= max) vel = max;
            if (vel <= min) vel = min;
            c1++;
            if (c1 >= c2) {
                newpath();
                c1 = 0;
            }
            curr = dir += sev;

            dy = vel * Math.sin(curr * Math.PI / 180);
            dx = vel * Math.cos(curr * Math.PI / 180);

            y += dy;
            x += dx;

            //horizontal-vertical bounce.
            vb = 180 - dir;
            hb = 0 - dir;

            //Corner rebounds?
            if ((y < 1) && (x < 1)) { y = 1; x = 1; dir = 45; }
            if ((y < 1) && (x > w)) { y = 1; x = w; dir = 135; }
            if ((y > h) && (x < 1)) { y = h; x = 1; dir = 315; }
            if ((y > h) && (x > w)) { y = h; x = w; dir = 225; }

            //edge rebounds.
            if (y < 1) { y = 1; dir = hb; }
            if (y > h) { y = h; dir = hb; }
            if (x < 1) { x = 1; dir = vb; }
            if (x > w) { x = w; dir = vb; }

            followleader();
            setTimeout(animate, rep);
        }


        function init() {
            for (i = 0; i < num; i++) {
                temp1[i] = document.getElementById("worm" + (idx + i)).style;
                if (i < num - 1)
                    temp2[i] = document.getElementById("worm" + (idx + (i + 1))).style;
            }
            winsize();

            var iniafter = Math.floor(500 + Math.random() * 2000);
            setTimeout(animate, iniafter);
        }


        if (window.addEventListener) {
            window.addEventListener("resize", winsize, false);
            window.addEventListener("load", init, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onresize", winsize);
            window.attachEvent("onload", init);
        }

    })();
}

if ((document.getElementById) &&
    window.addEventListener || window.attachEvent) {

    (function () {

        //Configure here....

        var colours = new Array('#ff0000', '#00ff00', '#ffa500', '#fff000');
        var num = 100;    //number of segments.
        var icen = 2;    //next segment is times 'icen' previous segment size.
        var rep = 40;    //setTimeout speed.
        var min = 10;     //slowest speed.
        var max = 100;    //fastest speed.

        //End.

        var temp1 = new Array();
        var temp2 = new Array();
        if (icen % 2 != 0) icen++;
        var fcen = icen / 2;
        var d = document;
        var idx = d.getElementsByTagName('div').length;

        var dims;

        for (i = 0; i < num; i++) {
            var randcol = colours[Math.floor(Math.random() * colours.length)];
            var dims = (i + 1) * icen;
            document.write('<div id="worm' + (idx + i) + '" style="position:absolute;top:0px;left:0px;width:'
                + dims + 'px;height:' + dims + 'px;font-size:1px;border: 1px solid ' + randcol + ';overflow:hidden">.<\/div>');
        }

        var h, w, r;
        var y = 0;
        var x = 0;
        var dir = 45;   //direction.
        var acc = 6;    //acceleration.
        var newacc = new Array(1, 0, 1);
        var vel = 10;    //initial speed.
        var sev = 0;
        var newsev = new Array(8, -8, 5, -5, 3, -3, 1, -1, 0);

        //counters.
        var c1 = 0;    //time between changes.
        var c2 = 0;    //new time between changes.

        var pix = "px";

        var strictmod = ((document.compatMode) &&
            document.compatMode.indexOf("CSS") != -1);


        var domWw = (typeof window.innerWidth == "number");
        var domSy = (typeof window.pageYOffset == "number");

        if (domWw) r = window;
        else {
            if (d.documentElement &&
                typeof d.documentElement.clientWidth == "number" &&
                d.documentElement.clientWidth != 0)
                r = d.documentElement;
            else {
                if (d.body &&
                    typeof d.body.clientWidth == "number")
                    r = d.body;
            }
        }


        function winsize() {
            var oh, sy, ow, sx, rh, rw;
            if (domWw) {
                if (d.documentElement && d.defaultView &&
                    typeof d.defaultView.scrollMaxY == "number") {
                    oh = d.documentElement.offsetHeight;
                    sy = d.defaultView.scrollMaxY;
                    ow = d.documentElement.offsetWidth;
                    sx = d.defaultView.scrollMaxX;
                    rh = oh - sy;
                    rw = ow - sx;
                }
                else {
                    rh = r.innerHeight;
                    rw = r.innerWidth;
                }
                h = rh - (dims + fcen + 1);
                w = rw - (dims + fcen + 1);
            }
            else {
                h = r.clientHeight - (dims + fcen + 1);
                w = r.clientWidth - (dims + fcen + 1);
            }
        }


        function scrl(yx) {
            var y, x;
            if (domSy) {
                y = r.pageYOffset;
                x = r.pageXOffset;
            }
            else {
                y = r.scrollTop;
                x = r.scrollLeft;
            }
            return (yx == 0) ? y : x;
        }


        function followleader() {
            for (i = 0; i < num; i++) {
                if (i < num - 1) {
                    temp1[i].top = parseFloat(temp2[i].top) + fcen + pix;
                    temp1[i].left = parseFloat(temp2[i].left) + fcen + pix;
                }
                else {
                    temp1[i].top = y + scrl(0) + pix;
                    temp1[i].left = x + scrl(1) + pix;
                }
            }
        }


        function newpath() {
            sev = newsev[Math.floor(Math.random() * newsev.length)];
            acc = newacc[Math.floor(Math.random() * newacc.length)];
            c2 = Math.floor(10 + Math.random() * 50);
        }


        function animate() {
            var vb, hb, dy, dx, curr;
            if (acc == 1) vel += 0.05;
            if (acc == 0) vel -= 0.05;
            if (vel >= max) vel = max;
            if (vel <= min) vel = min;
            c1++;
            if (c1 >= c2) {
                newpath();
                c1 = 0;
            }
            curr = dir += sev;

            dy = vel * Math.sin(curr * Math.PI / 180);
            dx = vel * Math.cos(curr * Math.PI / 180);

            y += dy;
            x += dx;

            //horizontal-vertical bounce.
            vb = 180 - dir;
            hb = 0 - dir;

            //Corner rebounds?
            if ((y < 1) && (x < 1)) { y = 1; x = 1; dir = 45; }
            if ((y < 1) && (x > w)) { y = 1; x = w; dir = 135; }
            if ((y > h) && (x < 1)) { y = h; x = 1; dir = 315; }
            if ((y > h) && (x > w)) { y = h; x = w; dir = 225; }

            //edge rebounds.
            if (y < 1) { y = 1; dir = hb; }
            if (y > h) { y = h; dir = hb; }
            if (x < 1) { x = 1; dir = vb; }
            if (x > w) { x = w; dir = vb; }

            followleader();
            setTimeout(animate, rep);
        }


        function init() {
            for (i = 0; i < num; i++) {
                temp1[i] = document.getElementById("worm" + (idx + i)).style;
                if (i < num - 1)
                    temp2[i] = document.getElementById("worm" + (idx + (i + 1))).style;
            }
            winsize();

            var iniafter = Math.floor(500 + Math.random() * 2000);
            setTimeout(animate, iniafter);
        }


        if (window.addEventListener) {
            window.addEventListener("resize", winsize, false);
            window.addEventListener("load", init, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onresize", winsize);
            window.attachEvent("onload", init);
        }

    })();
}

if ((document.getElementById) &&
    window.addEventListener || window.attachEvent) {

    (function () {

        //Configure here....

        var colours = new Array('#ff0000', '#00ff00', '#ffa500', '#fff000');
        var num = 100;    //number of segments.
        var icen = 2;    //next segment is times 'icen' previous segment size.
        var rep = 40;    //setTimeout speed.
        var min = 10;     //slowest speed.
        var max = 100;    //fastest speed.

        //End.

        var temp1 = new Array();
        var temp2 = new Array();
        if (icen % 2 != 0) icen++;
        var fcen = icen / 2;
        var d = document;
        var idx = d.getElementsByTagName('div').length;

        var dims;

        for (i = 0; i < num; i++) {
            var randcol = colours[Math.floor(Math.random() * colours.length)];
            var dims = (i + 1) * icen;
            document.write('<div id="worm' + (idx + i) + '" style="position:absolute;top:0px;left:0px;width:'
                + dims + 'px;height:' + dims + 'px;font-size:1px;border: 1px solid ' + randcol + ';overflow:hidden">.<\/div>');
        }

        var h, w, r;
        var y = 0;
        var x = 0;
        var dir = 45;   //direction.
        var acc = 6;    //acceleration.
        var newacc = new Array(1, 0, 1);
        var vel = 10;    //initial speed.
        var sev = 0;
        var newsev = new Array(8, -8, 5, -5, 3, -3, 1, -1, 0);

        //counters.
        var c1 = 0;    //time between changes.
        var c2 = 0;    //new time between changes.

        var pix = "px";

        var strictmod = ((document.compatMode) &&
            document.compatMode.indexOf("CSS") != -1);


        var domWw = (typeof window.innerWidth == "number");
        var domSy = (typeof window.pageYOffset == "number");

        if (domWw) r = window;
        else {
            if (d.documentElement &&
                typeof d.documentElement.clientWidth == "number" &&
                d.documentElement.clientWidth != 0)
                r = d.documentElement;
            else {
                if (d.body &&
                    typeof d.body.clientWidth == "number")
                    r = d.body;
            }
        }


        function winsize() {
            var oh, sy, ow, sx, rh, rw;
            if (domWw) {
                if (d.documentElement && d.defaultView &&
                    typeof d.defaultView.scrollMaxY == "number") {
                    oh = d.documentElement.offsetHeight;
                    sy = d.defaultView.scrollMaxY;
                    ow = d.documentElement.offsetWidth;
                    sx = d.defaultView.scrollMaxX;
                    rh = oh - sy;
                    rw = ow - sx;
                }
                else {
                    rh = r.innerHeight;
                    rw = r.innerWidth;
                }
                h = rh - (dims + fcen + 1);
                w = rw - (dims + fcen + 1);
            }
            else {
                h = r.clientHeight - (dims + fcen + 1);
                w = r.clientWidth - (dims + fcen + 1);
            }
        }


        function scrl(yx) {
            var y, x;
            if (domSy) {
                y = r.pageYOffset;
                x = r.pageXOffset;
            }
            else {
                y = r.scrollTop;
                x = r.scrollLeft;
            }
            return (yx == 0) ? y : x;
        }


        function followleader() {
            for (i = 0; i < num; i++) {
                if (i < num - 1) {
                    temp1[i].top = parseFloat(temp2[i].top) + fcen + pix;
                    temp1[i].left = parseFloat(temp2[i].left) + fcen + pix;
                }
                else {
                    temp1[i].top = y + scrl(0) + pix;
                    temp1[i].left = x + scrl(1) + pix;
                }
            }
        }


        function newpath() {
            sev = newsev[Math.floor(Math.random() * newsev.length)];
            acc = newacc[Math.floor(Math.random() * newacc.length)];
            c2 = Math.floor(10 + Math.random() * 50);
        }


        function animate() {
            var vb, hb, dy, dx, curr;
            if (acc == 1) vel += 0.05;
            if (acc == 0) vel -= 0.05;
            if (vel >= max) vel = max;
            if (vel <= min) vel = min;
            c1++;
            if (c1 >= c2) {
                newpath();
                c1 = 0;
            }
            curr = dir += sev;

            dy = vel * Math.sin(curr * Math.PI / 180);
            dx = vel * Math.cos(curr * Math.PI / 180);

            y += dy;
            x += dx;

            //horizontal-vertical bounce.
            vb = 180 - dir;
            hb = 0 - dir;

            //Corner rebounds?
            if ((y < 1) && (x < 1)) { y = 1; x = 1; dir = 45; }
            if ((y < 1) && (x > w)) { y = 1; x = w; dir = 135; }
            if ((y > h) && (x < 1)) { y = h; x = 1; dir = 315; }
            if ((y > h) && (x > w)) { y = h; x = w; dir = 225; }

            //edge rebounds.
            if (y < 1) { y = 1; dir = hb; }
            if (y > h) { y = h; dir = hb; }
            if (x < 1) { x = 1; dir = vb; }
            if (x > w) { x = w; dir = vb; }

            followleader();
            setTimeout(animate, rep);
        }


        function init() {
            for (i = 0; i < num; i++) {
                temp1[i] = document.getElementById("worm" + (idx + i)).style;
                if (i < num - 1)
                    temp2[i] = document.getElementById("worm" + (idx + (i + 1))).style;
            }
            winsize();

            var iniafter = Math.floor(500 + Math.random() * 2000);
            setTimeout(animate, iniafter);
        }


        if (window.addEventListener) {
            window.addEventListener("resize", winsize, false);
            window.addEventListener("load", init, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onresize", winsize);
            window.attachEvent("onload", init);
        }

    })();
}

if ((document.getElementById) &&
    window.addEventListener || window.attachEvent) {

    (function () {

        //Configure here....

        var colours = new Array('#ff0000', '#00ff00', '#ffa500', '#fff000');
        var num = 100;    //number of segments.
        var icen = 2;    //next segment is times 'icen' previous segment size.
        var rep = 40;    //setTimeout speed.
        var min = 10;     //slowest speed.
        var max = 100;    //fastest speed.

        //End.

        var temp1 = new Array();
        var temp2 = new Array();
        if (icen % 2 != 0) icen++;
        var fcen = icen / 2;
        var d = document;
        var idx = d.getElementsByTagName('div').length;

        var dims;

        for (i = 0; i < num; i++) {
            var randcol = colours[Math.floor(Math.random() * colours.length)];
            var dims = (i + 1) * icen;
            document.write('<div id="worm' + (idx + i) + '" style="position:absolute;top:0px;left:0px;width:'
                + dims + 'px;height:' + dims + 'px;font-size:1px;border: 1px solid ' + randcol + ';overflow:hidden">.<\/div>');
        }

        var h, w, r;
        var y = 0;
        var x = 0;
        var dir = 45;   //direction.
        var acc = 6;    //acceleration.
        var newacc = new Array(1, 0, 1);
        var vel = 10;    //initial speed.
        var sev = 0;
        var newsev = new Array(8, -8, 5, -5, 3, -3, 1, -1, 0);

        //counters.
        var c1 = 0;    //time between changes.
        var c2 = 0;    //new time between changes.

        var pix = "px";

        var strictmod = ((document.compatMode) &&
            document.compatMode.indexOf("CSS") != -1);


        var domWw = (typeof window.innerWidth == "number");
        var domSy = (typeof window.pageYOffset == "number");

        if (domWw) r = window;
        else {
            if (d.documentElement &&
                typeof d.documentElement.clientWidth == "number" &&
                d.documentElement.clientWidth != 0)
                r = d.documentElement;
            else {
                if (d.body &&
                    typeof d.body.clientWidth == "number")
                    r = d.body;
            }
        }


        function winsize() {
            var oh, sy, ow, sx, rh, rw;
            if (domWw) {
                if (d.documentElement && d.defaultView &&
                    typeof d.defaultView.scrollMaxY == "number") {
                    oh = d.documentElement.offsetHeight;
                    sy = d.defaultView.scrollMaxY;
                    ow = d.documentElement.offsetWidth;
                    sx = d.defaultView.scrollMaxX;
                    rh = oh - sy;
                    rw = ow - sx;
                }
                else {
                    rh = r.innerHeight;
                    rw = r.innerWidth;
                }
                h = rh - (dims + fcen + 1);
                w = rw - (dims + fcen + 1);
            }
            else {
                h = r.clientHeight - (dims + fcen + 1);
                w = r.clientWidth - (dims + fcen + 1);
            }
        }


        function scrl(yx) {
            var y, x;
            if (domSy) {
                y = r.pageYOffset;
                x = r.pageXOffset;
            }
            else {
                y = r.scrollTop;
                x = r.scrollLeft;
            }
            return (yx == 0) ? y : x;
        }


        function followleader() {
            for (i = 0; i < num; i++) {
                if (i < num - 1) {
                    temp1[i].top = parseFloat(temp2[i].top) + fcen + pix;
                    temp1[i].left = parseFloat(temp2[i].left) + fcen + pix;
                }
                else {
                    temp1[i].top = y + scrl(0) + pix;
                    temp1[i].left = x + scrl(1) + pix;
                }
            }
        }


        function newpath() {
            sev = newsev[Math.floor(Math.random() * newsev.length)];
            acc = newacc[Math.floor(Math.random() * newacc.length)];
            c2 = Math.floor(10 + Math.random() * 50);
        }


        function animate() {
            var vb, hb, dy, dx, curr;
            if (acc == 1) vel += 0.05;
            if (acc == 0) vel -= 0.05;
            if (vel >= max) vel = max;
            if (vel <= min) vel = min;
            c1++;
            if (c1 >= c2) {
                newpath();
                c1 = 0;
            }
            curr = dir += sev;

            dy = vel * Math.sin(curr * Math.PI / 180);
            dx = vel * Math.cos(curr * Math.PI / 180);

            y += dy;
            x += dx;

            //horizontal-vertical bounce.
            vb = 180 - dir;
            hb = 0 - dir;

            //Corner rebounds?
            if ((y < 1) && (x < 1)) { y = 1; x = 1; dir = 45; }
            if ((y < 1) && (x > w)) { y = 1; x = w; dir = 135; }
            if ((y > h) && (x < 1)) { y = h; x = 1; dir = 315; }
            if ((y > h) && (x > w)) { y = h; x = w; dir = 225; }

            //edge rebounds.
            if (y < 1) { y = 1; dir = hb; }
            if (y > h) { y = h; dir = hb; }
            if (x < 1) { x = 1; dir = vb; }
            if (x > w) { x = w; dir = vb; }

            followleader();
            setTimeout(animate, rep);
        }


        function init() {
            for (i = 0; i < num; i++) {
                temp1[i] = document.getElementById("worm" + (idx + i)).style;
                if (i < num - 1)
                    temp2[i] = document.getElementById("worm" + (idx + (i + 1))).style;
            }
            winsize();

            var iniafter = Math.floor(500 + Math.random() * 2000);
            setTimeout(animate, iniafter);
        }


        if (window.addEventListener) {
            window.addEventListener("resize", winsize, false);
            window.addEventListener("load", init, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onresize", winsize);
            window.attachEvent("onload", init);
        }

    })();
}