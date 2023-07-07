function validateform()
{
    var name=document.loginform.uname.value;
    var pass=document.loginform.password.value;
    if(name==null || name==""){
        alert("Name cannot be Empty!");
        return false;
    }
    else if(pass.length<5)
    {
        alert("Password too Short!");
        return false;
    }
    

}