function validate_get(){
    var emailGet = document.forms['getIn']['emailGet'].value;

    if(emailGet == "" || emailGet == null){
        document.getElementById('emailGet').style.borderColor = "red";
        return false;
    }
}
