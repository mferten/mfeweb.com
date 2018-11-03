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
    this.addEventListener("click", clickEvents, false);
    var titleText="Faculty of Arts and Sciences (FAS)" + "\n" +
        "Division of Continuing Education (DCE)" + "\n" +
        "Harvard Extension School (HES)" + "\n" +
        "-  Completion by December 2018," + "\n" +
        "-  Graduation by March 2019 and" + "\n" +
        "-  Commencement by May 2019";
    document.getElementById("title3").setAttribute("title", titleText);

    /* a Flag is Selected: The Search starts */
    function clickEvents(event)
    {
        if (event.target.id == "emailIcon" || event.target.id == "emailAnchor") {
            if (!document.getElementById("master").classList.contains("displayNone")) // if PhotoBox is Enabled (No displayNone class)
            {
                ableDisableMasterMenu("addRemove"); // Disable Photo Box and Email Button
                document.getElementById("mailText").focus;
            }
            else { // reverse back to the main page
                ableDisableMasterMenu("removeAdd"); // Disable Photo Box and Email Button
            }
        }
        else if (event.target.id == "sendButton") {
            if (document.getElementById("mailText").value) {
                processSendMail();
                processClearMail();
                returnBack();
            } else {
                document.getElementById("mailTextError").innerHTML = "Please Enter Your Message to Send!";
            }
        }
        else if (event.target.id == "clearButton") {
            processClearMail();
        }
        else if (event.target.id == "returnButton") {
            processClearMail();
            returnBack();
        }
        else if (event.target.id == "title3") alert(document.getElementById(event.target.id).title);
    }

    ableDisableMasterMenu(addRemoveFlag)
    {
        if(addRemoveFlag == "addRemove")
        {
            document.getElementById("master").classList.add("displayNone");
            document.getElementById("menu").classList.add("displayNone");
            // Enable Email Box
            document.getElementById("emailBox").classList.remove("displayNone");
        }
        else
        {
          document.getElementById("master").classList.remove("displayNone");
          document.getElementById("menu").classList.remove("displayNone");
          // Enable Email Box
          document.getElementById("emailBox").classList.add("displayNone");
        }
    }

    function returnBack()
    {
        // Show Photo Box
        document.getElementById("master").classList.remove("displayNone");
        document.getElementById("menu").classList.remove("displayNone");
        // Hide Email Box
        document.getElementById("emailBox").classList.add("displayNone");
    }
}

function processSendMail()
{
    var xhttpLogin = new XMLHttpRequest();
    var formLoginData = new FormData(); // Currently empty
    formLoginData.append("toMailAddress", "mferten@mfeweb.com");
    formLoginData.append("fromMailAddress", "mferten@mfeweb.com");
    formLoginData.append("mailMessage", document.getElementById("mailText").value);
    xhttpLogin.onreadystatechange = function()
    {
        if (xhttpLogin.readyState == 4 && xhttpLogin.status == 200)
        {
            // Initialize the entry columns
            document.getElementById("mailText").value = "";
        }
    };
    xhttpLogin.open("POST", "ajax/sendAnE_Mail", true);
    xhttpLogin.setRequestHeader('X-CSRF-TOKEN', document.getElementsByName('csrf-token')[0].getAttribute('content'));
    xhttpLogin.send(formLoginData);
}

function processClearMail()
{
    document.getElementById("mailTextError").innerHTML = "";
    document.getElementById("mailText").value = "";
}
