const form = document.querySelector(".content form"),
continueBtn =form.querySelector(".login-right button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'serverFiles/doctor-login.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success"){
                    swal("Loged In", "Welcome Back Doctor!.", "success");
                    setTimeout(function() {                        
                        location.replace("doctor-dashboard.php");
                    }, 1500);
                }
                if(data == "incorrect"){ 
                    swal("Incorrect Username/Password!", "", "error");
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