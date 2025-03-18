// if time left, change to modern fetch-method,
// also loop event listeners to apply to all users' buttons

function proLike(ev) {
    console.log(ev.target);
    let str = ev.target.value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Request sent");
            console.log(this.responseText);
        }
    }
    xmlhttp.open("POST", "model_like.php?username=" + str, true);
    xmlhttp.send();
}

document.querySelector("#like").addEventListener('click', proLike);