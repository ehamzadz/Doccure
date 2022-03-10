const form = document.querySelector(".content form"),
continueBtn =form.querySelector(".content form button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'serverFiles/doctor-updateSocialMedia.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success"){
                    swal("Successfully Changed!", "Your Informations was Successfully Changed.", "success");
                    setTimeout(function() {                        
                        location.replace("doctor-social-media.php");
                    }, 1500);
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}