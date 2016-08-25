// This page will never contact a DB so no other filtration is needed at this time.
function Validate() {
    if (document.getElementById("user-email").value == 0) {
        alertify.alert("You have not added an email address.");
        document.getElementById("user-email").focus();
        return false;
    }
    if (document.getElementById("user-message").value == 0) {
        document.getElementById("user-message").focus();
        alertify.alert("You have not added a message.");
        return false;
    }
    if (document.getElementById("user-name").value == 0) {
        document.getElementById("user-name").focus();
        alertify.alert("You have not added your name.");
        return false;
    }
    return true;
}