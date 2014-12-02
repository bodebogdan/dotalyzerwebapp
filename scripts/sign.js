function clear (t){
    var name = f["displayname"].value;
    if(name== "Dotalyzer User"){
       document.getElementById('displayname').value="";
    }
}
function validate (f){
    var x = f["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    var pass1 = f["password1"].value;
    var pass2 = f["password2"].value;
    var name = f["displayname"].value;

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    if(name == ""){
        alert ("Please enter a display name.");
        return false;
    }
    if(pass1 == ""){
        alert ("Please enter the password.");
        return false;
    }
    if(pass2 == ""){
        alert ("Please confirm your password.");
        return false;
    }
    if (pass1 != pass2){
        alert ("Password missmatch. Please make sure that you've entered the same password in both fields.")
        return false;
    }
    if (!f["agreement"].checked){
        alert("Please read the terms and conditions and agree to them.")
        return false;
    }


}