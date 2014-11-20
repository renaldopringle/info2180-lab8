window.onload = function() {
	var button = document.getElementById("lookup");
	var result = document.getElementById("result");
	var term = document.getElementById("term");
    //var res = document.;
	/*button.addEventListener("click", function() {
		result.innerHTML += "<div>" + term.value + "</div>";
	});*/
    
    
    function successFunction(res) {
        //alert(res.responseText);
        result.innerHTML = res.responseText;
    }
    
    /**
    *   adds eventlistener to the button to display the information about a country as an alert
    *
    */
    button.addEventListener("click", function() {
        /*new Ajax.Updater(
            result,
            "world.php",
            {
                parameters : {
                    lookup: term.value
                },
                method: "get"
            }
        );*/
        new Ajax.Request("world.php", {
          parameters : {
              //lookup: term.value,               //CHECK THIS!!!
              all: term.value,
              format: "xml"
          },
          onSuccess : successFunction,
          method : "get"
        });
    });
}