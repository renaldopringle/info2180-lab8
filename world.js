window.onload = function() {
	var button = document.getElementById("lookup");
	var result = document.getElementById("result");
	var term = document.getElementById("term");
    var all = document.getElementById("all");
    
    
    /*The function alerts the response xml, but is not outputted properly*/
    /*see cnsole for the formatted response XML*/
    function successFunction(res) {
        result.innerHTML = res.responseText;
        alert(res.responseXML);
        responsexml = res.responseXML;
        console.log(responsexml);
    }
    
    /**
    * adds eventlistener to the button to display the information about a country as an alert
    */
    button.addEventListener("click", function() {
        new Ajax.Request("world.php", {
            parameters : {
              lookup: term.value,
              all: all.checked + "",
              format: "xml"
            },
            onSuccess : successFunction,
            method : "post"
        });
    });
}