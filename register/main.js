$(document).ready(funtion(e) {


    $("#reg-form").submit(function(event) {
        let $password = $("#password");
        let $confirm = $("#confirm-password");
        let $error = $("#confirm-error");
        if ($password.val() == $confirm.val()) {
            return true;
        } else {
            $error.text("Password does not match");
            event.preventDefault();
        }
    }).
}).