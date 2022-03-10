const form = document.querySelector(".frm form"),
continueBtn =form.querySelector(".frm .submit-btn2 button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'registration.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success"){
                    swal("Successfully Registered!", "Your Account was Successfully Registered.", "success");
                    setTimeout(function() {                        
                        location.replace("../doctor-dashboard.php");
                    }, 1500);
                }
                if(data == "incorrect"){ 
                    swal("Incorrect Serial!", "Write Valid Serial Number.", "error");
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