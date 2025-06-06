





function emailValidation(){
     
    const email=document.getElementById('mail_id').value;
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://mailcheck.p.rapidapi.com/?domain="+email,
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "mailcheck.p.rapidapi.com",
            "x-rapidapi-key": "c801871fc5msh09697b05c1fff61p108b03jsnfc6cdd0c60ab"
        }
    };
    
    $.ajax(settings).done(function (response) {
        
        if(response.valid == true && response.block == false){
            document.getElementById('check_icon').className="fas fa-check-circle fa-lg";
            document.getElementById('check_icon').setAttribute("style", "color:green; display:block;");
           
        }

            else{
               
                document.getElementById('check_icon').className="far fa-times-circle fa-lg";
                document.getElementById('check_icon').setAttribute("style", " color:red; display:block;");
                const email=document.getElementById('mail_id').value="";
            }

    });
}
