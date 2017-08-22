window.onload = function () {
    console.clear();
    // After the page loads, let's define a variable to refer to
    // to the bulbs in our stop light.
    var lights = document.getElementById("lights").children;

    // An array of colors we can use to turn a light on.
    // When a light is on, it will have the appropriate color.
    var colors = ["red", "yellow", "green"];

    // Configure our stoplight behavior. Only one light should be
    // on at a time, and it should show in its correct color.
    for (var i = 0; i < lights.length; i++) {

        lights[i].addEventListener("click", (function (index) {
            // This self-executing function acts as a factory to stamp
            // out the individual functions we'll bind to our
            // page elements. We are *not* binding this function to page
            // element events, but the function it returns on each loop execution.

            // We take take the index into the lights array as
            // a parameter of the self-executing function. This breaks
            // it from its dependence on i as the source of its value.

                // *This* is the function we stamp out to bind to each
                // individual light.
                var fn = function () {

                    // First, turn off all the lights
                    Array.prototype.forEach.call(lights, function (light) {
                        light.style.color = "black";
                    });

                    // Now, set turn on the light that we clicked
                    // by seeking into our colors array.
                    this.style.color = colors[index];

                    // console.log("value of index is %d, value of i is %d", index, i);

                };
                return fn;

            // And our self-executing function takes the current index value of our loop
            // as its argument. Since 'index' and not 'i' is the value that operates
            // within the execution context of the factory function, it does not get
            // overwritten by the next loop iteration. allowing us to create a closure
            // on the correct value
            })(i)
        )
    }
    autoLights() // start: initial load
    setInterval(autoLights, 14000); // maybe we can pass the duration-to-be-on with an array argument
};

// 14 seconds a full lighting cycle: Go 8 seconds, Slow 2 second and Stop 4 seconds
function autoLights()
{
    // Go
    triggerAMouseEvent("go");
    console.log("go");
    // Slow
    setTimeout(function()
    {
        triggerAMouseEvent("slow");
        console.log("slow");
    }, 8000);
    // Stop
    setTimeout(function()
    {
        triggerAMouseEvent("stop");
        console.log("stop");
    }, 10000);
}

// Trigger a Mouse Event
function triggerAMouseEvent(idName)
{
    // Trigger "idName" Upload's click event... to show file selection dialog...
    var event = new MouseEvent('click', { 'view': window,'bubbles': true,'cancelable': true });
    document.getElementById(idName).dispatchEvent(event);
}
