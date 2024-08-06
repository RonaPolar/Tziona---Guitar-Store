$("#s").click(function(){

    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var msg = $("#msg").val();

    if(name ==''|| email ==''|| phone ==''|| msg ==''){
        swal({
            title: "Fields Empty!!",
            text: "Please check the missing field",
            icon: "warning",
            button: "ok"
        });
    }
});

const form = document.querySelector('.login-form form'),
submitbtn = form.querySelector('.button input'),
errortxt = form.querySelector('.error-msg');

form.onsubmit = (e) =>{
  e.preventDefault();
}

submitbtn.onclick = () => {
  let xhr = new XMLHttpRequest(); //create xml object
  xhr.open("POST","./Php/signupvalid.php", true);
  xhr.onload = () =>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status == 200){
          let data = xhr.response;
          if(data == "success"){
              location.href = "./login.php";
          }
          else{
            errortxt.textContent = data;
            errortxt.style.display = "block";
          }
      }
    }
  }
  //send data through ajax to php
  let formData = new FormData(form);  //creating new object from form data
  xhr.send(formData);  //sending data to php
}