function ajaxRequest(action,value) {
    var request;
    // Prevent default posting of form - put here to work in case of errors
    //event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }

    // Fire off the request to /form.php
    request = $.ajax({
        url: "ajaxHandler.php",
        type: "post",
        data: "action="+action+"&value="+value
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        // console.log("Hooray, it worked!");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        //$inputs.prop("disabled", false);
    });
}