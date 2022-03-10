const form = document.querySelector(".content form"),
continueBtn =form.querySelector(".account-content button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'serverFiles/doctor-register.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success"){
                    swal("Successfully Registered!", "Your Account was Successfully Registered.", "success");
                    setTimeout(function() {                        
                        location.replace("doctor-dashboard.php");
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
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}