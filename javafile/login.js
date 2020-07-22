var pass;
function showpass(){
    pass  =document.getElementById("pass");
    if(pass.type==="password"){
        pass.type="text";
    }else{
        pass.type="password";
    }
}

var loader = function(e){
let file= e.target.files;
let show = "<span> selected file : </span>"+file[0].name;
let output = document.getElementsById('selector');
output.innerHTML = show;
output.classList.add("active");
}
//add event listener for input

let fileinput = document.getElementById('files');
fileinput.addEventListener("change", loader)