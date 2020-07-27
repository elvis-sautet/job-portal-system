var pass;
function showpass() {
    pass = document.getElementById("pass");
    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}
//the jqueypart

    console.log('i came');