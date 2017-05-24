
$(document).ready(function () {
    $("#btnSearch").click(function () {
        //get the user input
        var userInput = document.getElementById('input').value;

        //request data from a server
        var weather = new XMLHttpRequest();

        //api with api key and user input
        var str1 = "http://api.openweathermap.org/data/2.5/weather?q=";
        var api = "&APPID=0378f6d6e8975327b1bc3ab239603c62";
        var res = str1.concat(userInput, api);

        //initialise get request, (false)*js will execute when the server is ready due to free api*
        weather.open("GET", res, false);
        weather.send(null);

        //parse JSON to JavaScript object
        var result = JSON.parse(weather.response);

        //.name is the parameter to retrieve specified location
        var loc = " " + result.name + "<br/>";
        
        //.main.temp is the parameter to retrieve temperature of the specified location                  
        var kelTemp = result.main.temp;
        
        //conversion of default temperature(Kelvin) to Celsius
        var celTemp = " " + Math.round(((kelTemp - 273.15) * 10) / 10) + "C";
        
        //.wind.speed is the parameter to retrieve wind speed of the specified location
        var wind =  " " + result.wind.speed + "m/s";
        
        //.main.humidity is the parameter to retrieve humidity of the specified location
        var humid = " " + result.main.humidity + "%";
        
        //extract description from weather array in JSON
        var description = JSON.stringify(result.weather[0].description);
   
        //extract weather.icon from weather array in JSON
        var icon = JSON.stringify(result.weather[0].icon);
        //alert(icon); debugging
        
        
        //output String has " " which will obstruct the url
        icon = icon.replace("\"", "");
        icon = icon.replace("\"", "");

        //var rainVol = result.list[0].rain['3h']; rainfall is unstable

        //get the value of specified id to output
        document.getElementById("loc").innerHTML = loc;
        document.getElementById("temp").innerHTML = celTemp;
        document.getElementById("wind").innerHTML = wind;
        document.getElementById("humi").innerHTML = humid;
        document.getElementById("des").innerHTML = description;
        
        //set and return attribute to display the weather icon
        $("img").attr("src", "http://openweathermap.org/img/w/" + icon + ".png");






    });
});


       