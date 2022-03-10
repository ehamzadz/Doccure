usersList = document.querySelector(".chat-users-list div");

setInterval (()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'serverFiles/chat.php',true);
    xhr.onload = ()=>{
        if(xhr.status === 200) {
            let data = xhr.response;
            usersList.innerHTML = data;
        }        
    }
    xhr.send();
}, 50);

