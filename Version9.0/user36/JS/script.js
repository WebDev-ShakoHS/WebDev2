// Tutorial by http://youtube.com/CodeExplained
// api key : 82005d27a116c2880c8f0fcb866998a0

// SELECT ELEMENTS
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");
const notificationElement = document.querySelector(".notification");
const dateElement = document.querySelector(".date");

// App data
const weather = {};

weather.temperature = {
    unit: "celsius"
}

// APP CONSTS AND VARS
const KELVIN = 273;
// API KEY
const key = "22906b9e73d5ad85f3188b6406281311";
var latitude = -41.2924;
var longitude = 174.7787;
var i = 0;
var a = 0;
var b = 0;

// GET WEATHER FROM API PROVIDER
function getWeather() {
    for (i = 0; i < 5; i++) {
        let api = `https://api.openweathermap.org/data/2.5/onecall?lat=${latitude}&lon=${longitude}&appid=${key}`;
        fetch(api)
            .then(function (response) {
                let data = response.json();
                return data;
            })

            .then(function (data) {
                weather.temperature.value = Math.floor(data.daily[a].temp.max - KELVIN);
                weather.description = data.daily[a].weather[0].description;
                weather.iconId = data.daily[a].weather[0].icon;
                weather.date = data.daily[a].dt;
                a = a+1;
            })
            .then(function () {
                displayWeather();
            });
    }
}

var time = "";
function timeConverter() {
    var a = new Date(weather.date * 1000);
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    time = date + ' ' + month + ' ' + year + ' ';
}

// DISPLAY WEATHER TO UI
function displayWeather() {
    timeConverter()
    document.getElementsByClassName("weather-icon")[b].innerHTML = `<img src="images/weatherimages/${weather.iconId}.png"/>`;
    document.getElementsByClassName("valuechild")[b].innerHTML = `${weather.temperature.value}°<span>C</span>`;
    document.getElementsByClassName("descriptionchild")[b].innerHTML = weather.description;
    document.getElementsByClassName("date")[b].innerHTML = time;
    setVariable();
    b = b+1;
}

// C to F conversion
function celsiusToFahrenheit(temperature) {
    return (temperature * 9 / 5) + 32;
}

var zeroValue = 0
var firstValue = 0
var secondValue = 0
var thirdValue = 0
var fourthValue = 0
function setVariable () {
    if (b == 0) {
        zeroValue = weather.temperature.value
    }
    if (b == 1) {
        firstValue = weather.temperature.value
    }
    if (b == 2 ) {
        secondValue = weather.temperature.value
    }
    if (b == 3) {
        thirdValue = weather.temperature.value
    }
    if (b == 4) {
        fourthValue = weather.temperature.value
    }

}

var c = 0;
document.getElementById("yes").addEventListener("click", function () {
    document.getElementById("hehe").style.color = "red";
    if (c < 2) {
        c = c + 1;
    }
    if (c == 2) {
        c = c - 2;
        document.getElementById("hehe").style.color = "black";
    }
});

// WHEN THE USER CLICKS ON THE TEMPERATURE ELEMENET

document.getElementsByClassName("valuechild")[0].addEventListener("click", function () {
    if (weather.temperature.value === undefined) return;

    if (weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(zeroValue);
        fahrenheit = Math.floor(fahrenheit);

        document.getElementsByClassName("valuechild")[0].innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        document.getElementsByClassName("valuechild")[0].innerHTML = `${zeroValue}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});

document.getElementsByClassName("valuechild")[1].addEventListener("click", function () {
    if (weather.temperature.value === undefined) return;

    if (weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(firstValue);
        fahrenheit = Math.floor(fahrenheit);

        document.getElementsByClassName("valuechild")[1].innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        document.getElementsByClassName("valuechild")[1].innerHTML = `${firstValue}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});

document.getElementsByClassName("valuechild")[2].addEventListener("click", function () {
    if (weather.temperature.value === undefined) return;

    if (weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(secondValue);
        fahrenheit = Math.floor(fahrenheit);

        document.getElementsByClassName("valuechild")[2].innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        document.getElementsByClassName("valuechild")[2].innerHTML = `${secondValue}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});

document.getElementsByClassName("valuechild")[3].addEventListener("click", function () {
    if (weather.temperature.value === undefined) return;

    if (weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(thirdValue);
        fahrenheit = Math.floor(fahrenheit);

        document.getElementsByClassName("valuechild")[3].innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        document.getElementsByClassName("valuechild")[3].innerHTML = `${thirdValue}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});

document.getElementsByClassName("valuechild")[4].addEventListener("click", function () {
    if (weather.temperature.value === undefined) return;

    if (weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(fourthValue);
        fahrenheit = Math.floor(fahrenheit);

        document.getElementsByClassName("valuechild")[4].innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        document.getElementsByClassName("valuechild")[4].innerHTML = `${fourthValue}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});

getWeather();