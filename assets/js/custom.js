$(function () {
    // setting the img previews;
    let customFile = document.querySelector("#customFile")
    customFile.addEventListener('change', previewAvatar);
    function previewAvatar(event) {
        let reader = new FileReader();
        reader.onload = function (e) {
            let preview = document.querySelector("#preview");
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0])
    }


    // donatiion btn via check 
    document.querySelector("#enter")
    .addEventListener('click',function (e ) {
        console.log('clicj')
        document.querySelector("#show-display-input").innerHTML=`
        <label >enter dontation amount</label>
        <input type="number" class="form-control" name="donation" placeholder="enter donatation price">
        `;
      });


});