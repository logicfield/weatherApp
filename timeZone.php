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
       

    </head>
    <body>
        <div id="timeZone_page" data-role="page" data-theme="a">
            <div data-role="header" data-position="fixed" >
                <h1 id="header">Time Zone</h1>
                <a data-rel="back" class="ui-btn ui-corner-all ui-icon-carat-l ui-alt-icon-left ui-btn-icon-notext ui-noboxshadow">Back</a>
            </div> 
          
             <div class="ui-content">   
                <div>
                    <label ><font size="5"> Time Zone</font> </label>                 
                    <input type="text" id="timeZone" placeholder="Key in time zone name, e.g Asia/Singapore"> 
                                     
                    <a href="#" id="btnTime"  class="ui-btn  ui-corner-all ui-btn-icon-right ui-icon-search ui-btn-b">Search </a>
                    </ul> 
                </div>
            </div>
               
               <h2>Current Time in(YYYY-MM-DD HH:MM:SS): <span id="time"></span></h2>
               <h2>Country Code: <span id="countryCode"></span></h2>

            </div>

        
    </body>
</html>
