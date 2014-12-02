    /**
 * Created by Bodecrysis on 17/11/2014.
 */
    function validate (f){
        var x = f["login"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        var pass = f["password"].value;

        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            alert("Not a valid e-mail address");
            return false;
        }

        if(pass == ""){
            alert ("Please enter the password.");
            return false;
        }
    }