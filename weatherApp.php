<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Weather App</title>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>        
        <script src="css/js/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
        <script src="js/weatherForecast.js" type="text/javascript"></script>
        <script src="js/timeZone.js" type="text/javascript"></script>       
        <link href="EasyAutocomplete-1.3.5/easy-autocomplete.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/themes/weatherApp.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/themes2/themeButton.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/themes/jquery.mobile.icons.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
        <script src="EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js" type="text/javascript"></script>
        <link href="EasyAutocomplete-1.3.5/easy-autocomplete.min.css" rel="stylesheet" type="text/css"/>
        <link href="EasyAutocomplete-1.3.5/easy-autocomplete.themes.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
       

    </head>
    <body>
        <div id="main_page" data-role="page" data-theme="a">
            <div data-role="header" data-position="fixed">
                <h1 id="header">Weather Forecast</h1>
            </div> 

            <div class="ui-content">   
                <div>
                    <label><font size="5"> Weather Report </font></label>
                    <input type="text" id="input" placeholder="Key in country name, e.g Singapore"> 
                    <a href="#" id="btnSearch"  class="ui-btn  ui-corner-all ui-btn-icon-right ui-icon-search ui-btn-b">Search </a>

                </div>
            </div>
                  
            <div class="ui-content"> </div>
            <h2>Current Location: <span id="loc" ></span></h2>
            <h2>Temperature: <span id="temp" ></span></h2>
            <h2>Wind Speed: <span id="wind"></span></h2>
            <h2>Humidity: <span id="humi"></span></h2>
            <h2>Weather description: <span id="des"></span></h2>
            

            <div class="ui-content">
                <img src="" >
                <p><a href="timeZone.php" class="ui-btn ui-corner-all ui-shadow ui-nodisc-icon ui-icon-earthz ui-btn-icon-left ui-btn-inline" data-transition="fade"> World Time Zone</a></p>
                

            </div>

        </div>
    </body>
</html>
