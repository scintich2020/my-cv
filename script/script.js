
    let btnClick = document.querySelector("#btn-click")

    btnClick.addEventListener("click" ,(e) => {

        var maDiv = document.getElementById("btn-click-groups");
        
        maDiv.classList.toggle("active")      
} )


let btnEdit = document.querySelector("#edit")

    btnEdit.addEventListener("click" ,(e) => {

        var monBouton = document.getElementById("btn_edit_group");
        
        monBouton.classList.toggle("active")      
} )


$(document).ready(function(){
    $("#send").click((e)=>{
        e.preventDefault()
        var email=$("#exampleFormControlInput1").val();
        $.ajax({
            method:"post",
            url: "../sendMail.php",
            data:{"email": email},
            // beforeSend: function(xhr){
            //     $("#loader").removeClass(".spinner_none")
            //     $("#loader").addClass(".spinner_load")
                
            // }
        })
        .done(function(data){
            // $("#loader").removeClass(".spinner_load")
            // $("#loader").addClass(".spinner_none")
            alert("Message has been send");
        })
    })
})
