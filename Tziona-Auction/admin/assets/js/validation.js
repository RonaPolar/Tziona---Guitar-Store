function validateTime(){
    var confirmTimeError = document.getElementById("time-validation");
    var start = document.getElementById("start");
    var end = document.getElementById("end");

    if(start.value.length == "" || end.value.length == ""){
        confirmTimeError.innerHTML = "Error! set the time please";
        confirmTimeError.style.color = "#FF0000";
        return false;
    }
    else{
        confirmTimeError.innerHTML = "Time set!";
        confirmTimeError.style.color = "#1dcd59";
        return true;
    }
}
var date = new Date();
var tdate = date.getDate();
var month = date.getMonth() +1;
if(tdate < 10){
    tdate = '0' + tdate;
}
if(month < 10){
    month = '0' + month;
}

var year = date.getUTCFullYear();
var minDate = year + "-" + month + "-" + tdate;
document.getElementById("currentdate").setAttribute('min', minDate);
document.getElementById("endofdate").setAttribute('min', minDate);

function validateDate(){
    var confirm = document.getElementById("Date-validation");
    var cdate = document.getElementById("currentdate").value;
    var edate = document.getElementById("endofdate").value;
    if(edate.length == "" || cdate.length == ""){
        confirm.innerHTML = "Field is empty";
        confirm.style.color = "#FF0000";
        return false;
    }
    else{
      setTimeout(function () {
        confirm.style.display = "none";
      }, 1000);
    return true;
    }
}

function validateProductname() {
    let productError = document.getElementById("product-validation");
    let product = document.getElementById("prod").value;

    if (product.length == 0) {
      productError.innerHTML = "Name is required";
      productError.style.color = "#FF0000";
      return false;
    }
    if (!product.match(/^[A-Za-z0-9-\s]*$/)) {
      alert("Username consist of letters and numbers only");
      productError.innerHTML = "Name is invalid";
      productError.style.color = "#FF0000";
      return false;
    }
    productError.innerHTML = "Name is valid";
    productError.style.color = "#1dcd59";
    return true;
  }


function validateForm() {
    let submitError = document.getElementById("submit-validation");
    if (!validateTime() || !validateDate() || !validateProductname()) {
      submitError.style.display = "block";
      submitError.innerHTML = "Fix the error above.";
      submitError.style.color = "#FF0000";
      setTimeout(function () {
        submitError.style.display = "none";
      }, 3000);

      $("#submit").click(function(){
        const Toast = Swal.mixin({

          position: 'center',
          showConfirmButton: true,
          confirmButtonColor: '#3085d6',


        })

        Toast.fire({

          icon: 'warning',
          title: 'Please fix the error',

          backdrop: `
          hsla(0, 0%, 0%, 0.5)
          url("images/mochi-mochi-peach-cat-crying.gif")
          left
          no-repeat
        `

        })
      });
      return false;
    }
    else{
      $("#submit").click(function(){
        const Toast = Swal.mixin({
          position: 'center',
          showConfirmButton: false,

        })

        Toast.fire({

          icon: 'success',
          title: 'The item is added!',

          backdrop: `
          hsla(0, 0%, 0%, 0.5)
          url("images/ca-hát.gif")
          left
          no-repeat
        `

        })
      });
      submitError.innerHTML = "success.";
      submitError.style.color = "#1dcd59";
        return true;
    }
  }