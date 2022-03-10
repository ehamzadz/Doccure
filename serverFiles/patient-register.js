const form = document.querySelector(".content form"),
continueBtn =form.querySelector(".account-content button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'serverFiles/patient-register.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                /*if(data == "success"){
                    swal("Confirme Your Email!", "A link was sent to your email, click on it to verify your account", "success");
                    setTimeout(function() {                        
                        location.replace("patient-login.php");
                    }, 5000);
                }*/
                if(data == "success"){
                    swal("Successfully Registered!", "Your Account was Successfully Registered.", "success");
                    setTimeout(function() {                        
                        location.replace("patient-dashboard.php");
                    }, 1500);
                }
                if(data == "invalid"){ 
                    swal("Invalid Username/Email!", "Write another valid Username/Email.", "error");
                }
                if(data == "mismatch"){ 
                    swal("Password Mismatch!", "Write The same Password.", "warning");
                }
                if(data == "empty"){
                    swal("Empty Fields!", "Complete All The Fileds.", "info");
                }
                if(data == "failed"){
                    swal("Failed!", "", "");
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}