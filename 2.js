function is_username_valid(value){
    var regex = /(^[A-Za-z])\w{5,9}/;
    if(regex.test(value)){
        return true;
    }
    else{
        return false;
    }
}

function is_password_valid(value){
    var regex = /((?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+}{":;'?/>.<,])(?=.*[@])).{8,}/;
    if(regex.test(value)){
        return true;
    }
    else{
        return false;
    }
}