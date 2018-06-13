'use strict';

/*
 * when the window is loaded: set the page and add the events
 */

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
     document.getElementById("toEmailAddressError").innerHTML = "";
     document.getElementById("mailText").value = "";
 }
