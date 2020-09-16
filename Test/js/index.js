
function checkPassword(){
    let pw = document.getElementById("pass123").value;
    if (pw === "frankbutt"){

        window.open('transcript.html');
    }
    else {
        alert("The password you entered was incorrect.");
        return false;   
    }
}
