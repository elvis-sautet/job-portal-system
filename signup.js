//togling between showing elements (HTML)
function display() {
    document.getElementById('show').style.display = "block"
    document.getElementById('show2').style.display = "none"
}
/*function displ() {
    document.getElementById('show').style.display = "none";
    document.getElementById('show2').style.display = "block";

*///password display.
var pass;
var show;
show = document.getElementById("my_pass");
pass = document.getElementById("mypass");
function showpass() {
    show = document.getElementById("my_pass");
    pass = document.getElementById("mypass");
    if ((pass.type === "password") || (show.type === "password")) {
        pass.type = "text";
        show.type = "text";
    } else {
        pass.type = "password";
        show.type = "password";

    }


}
//quering between the password and validating them.
function check(){
    function checkPasswordMatch() {
        var password = $("#mypass").val();
        var confirmPassword = $("#my_pass").val();
        if (password != confirmPassword)
            $("#validating").html("Passwords does not match!");
        else
            $("#validating").html("Passwords matches.");
    }
    $(document).ready(function () {
        $("#my_pass").keyup(checkPasswordMatch);
    });
}
