const form = document.querySelector(".content form"),
continueBtn =form.querySelector(".card-body button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'serverFiles/patient-changePass.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success"){
                    swal("Successfully Changed!", "Your Informations was Successfully Changed.", "success");
                    setTimeout(function() {                        
                        location.replace("patient-change-password.php");
                    }, 1500);
                }
                if(data == "incorrect"){ 
                    swal("Incorrect Password!", "Write the Old Correct Password AND try Again.", "error");
                }
                if(data == "mismatch"){ 
                    swal("Password Mismatch!", "Write The same New Password.", "warning");
                }
                if(data == "empty"){
                    swal("Empty Fields!", "Complete All The Fileds.", "info");
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}