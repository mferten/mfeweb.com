'use strict';

/*
 * when the window is loaded: set the page and add the events
 */
this.addEventListener("load", startUp, false);

/*
 * window is loaded
 */
function startUp()
{

    // Date and time
    var currentTime;
    var currentTimeString;
  
    // Date and Time Javascript Function to be run with one second interval
    function getDateTime()
    {
        // http://www.w3schools.com/jsref/jsref_obj_date.asp
        // Now: Currently the Default is Eastern USA (República Dominicana is the same)
        currentTime = new Date();
        currentTimeString = currentTime.toLocaleString();
        currentTimeString = currentTimeString.replace(",",""); // no comman needed in between
        document.getElementById("id_DateTime").innerHTML = currentTimeString;
    }

    // set the date and time
    getDateTime();
    // set the data and time every second: one thousand milliseconds
    setInterval(getDateTime, 1000);
}
