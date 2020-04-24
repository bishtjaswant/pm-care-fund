let customFile = document.querySelector("#customFile")

customFile.addEventListener('change',previewAvatar);



function previewAvatar(event) {
    let reader= new FileReader();

    reader.onload=function (e) { 
        let preview = document.querySelector("#preview");
        preview.src=  reader.result;
        
     }

    reader.readAsDataURL(event.target.files[0])
}