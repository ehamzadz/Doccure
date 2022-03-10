const form = document.querySelector(".content form"),
continueBtn =form.querySelector(".content form button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'serverFiles/doctor-updateData.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success"){
                    swal("Successfully Changed!", "Your Informations was Successfully Changed.", "success");
                    setTimeout(function() {                        
                        location.replace("doctor-profile-settings.php");
                    }, 1500);
                }
                if(data == "fileSize"){ 
                    swal("Failed!", "Sorry, your file was not uploaded, Max size of 2MB", "error");
                }
                if(data == "notImg"){ 
                    swal("Failed!", "Your File is not an Image.", "error");
                }
                if(data == "fileType"){
                    swal("Failed!", "Sorry, only JPG, JPEG, PNG & GIF files are allowed.", "error");
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
