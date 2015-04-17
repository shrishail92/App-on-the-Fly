/**
 * Created by king on 31/3/15.
 */

function progress() {
    if (document.getElementById('name').value != "" && document.getElementById('email').value != "" && document.getElementById('msg').value != "") {
        var id = 'progress';
        var myClassName = " progress"; //must keep a space before class name
        var d;
        d = document.getElementById(id);
        d.className = d.className.replace(myClassName, ""); // first remove the class name if that already exists
        d.className = d.className + myClassName;
        //adding new class name
        document.getElementById('submitbutton').value = "sending ...";
    }
}

//Function To Display Popup
function div_show() {
    document.getElementById('abc').style.display = "block";
}

//Function to Hide Popup
function div_hide() {
    document.getElementById('abc').style.display = "none";
}
