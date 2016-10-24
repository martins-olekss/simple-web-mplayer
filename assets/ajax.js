function ajaxRequest(action,value) {
    var request;

    // Abort any pending request
    if (request) {
        request.abort();
    }

    // Fire off the request to ajaxHandler.php
    request = $.ajax({
        url: "ajaxHandler.php",
        type: "post",
        data: "action="+action+"&value="+value
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
}