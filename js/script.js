function validate_get(){
    var emailGet = document.forms['getIn']['emailGet'].value;

    if(emailGet == "" || emailGet == null){
        document.getElementById('emailGet').style.borderColor = "red";
        document.getElementById('emailError').innerHTML = "Empty Input..!";
        document.getElementById('emailError').style.color = "red";
        return false;
    }
}
