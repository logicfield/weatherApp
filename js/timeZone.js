
$(document).ready(function () {

    /*   var options = {
     url: "http://api.timezonedb.com/v2/list-time-zone?key=TSNYKLVHH5LG&format=json",
     getValue: "zoneName",
     template: {
     type: "description",
     fields: {
     description: "countryName"
     }
     }
     };
     $("#timeZone").easyAutocomplete(options); */ //Overload with resources. *Retrieving directly from API



    var options = {
        data: ["Asia/Singapore", "Asia/Dubai", "America/Argentina/San_Juan", "Europe/Vienna", "Australia/Brisbane","Australia/Melbourne","Australia/Perth","Australia/Sydney","Asia/Dhaka","Asia/Brunei","America/Eirunepe","Pacific/Galapagos","Atlantic/Canary","Europe/London","Asia/Hong_Kong","Europe/Budapest","Asia/Jakarta","Asia/Phnom_Penh"
        ]
    };

    $("#timeZone").easyAutocomplete(options);


    $("#btnTime").click(function () {


        //get the user input
        var userInput = document.getElementById('timeZone').value;

        //request data from a server
        var time = new XMLHttpRequest();

        //api with api key and user input
        var str1 = "http://api.timezonedb.com/v2/get-time-zone?key=";
        var api = "TSNYKLVHH5LG&format=json&by=zone&zone=";
        var res = str1.concat(api, userInput);

        //initialise get request, (false)*js will execute when the server is ready due to free api*
        time.open("GET", res, false);
        time.send(null);

        //parse JSON to JavaScript object
        var result = JSON.parse(time.response);

        var countryCode = result.countryCode;


        //.name is the parameter to retrieve specified location
        var localTime = " " + result.formatted + "<br/>";
        

        //get the value of specified id to output
        document.getElementById("time").innerHTML = localTime;
        document.getElementById("countryCode").innerHTML = countryCode;

    });

});
