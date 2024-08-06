//login
const container = document.querySelector(".container"),
  pwShowHide = document.querySelectorAll(".showHidePw"),
  pwFields = document.querySelectorAll(".password"),
  signUp = document.querySelector(".signup-link"),
  login = document.querySelector(".login-link");

//   js code to show/hide password and change icon
pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach((pwField) => {
      if (pwField.type === "password") {
        pwField.type = "text";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pwField.type = "password";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    });
  });
});

function validatefullname() {
  let fullnameerror = document.getElementById("fullname-validation");
  let Fullname = document.getElementById("fullname").value;

  if (Fullname.length == 0) {
    fullnameerror.innerHTML = "Full name is required";
    fullnameerror.style.color = "#FF0000";
    return false;
  }
  if (!Fullname.match(/^[A-Za-z0-9_ ]*$/)) {
    fullnameerror.innerHTML = "Character is invalid";
    fullnameerror.style.color = "#FF0000";
    return false;
  }
  fullnameerror.innerHTML = "Full name is Valid";
  fullnameerror.style.color = "#1dcd59";
  return true;
}
function validatephonenum() {
  let numberError = document.getElementById("phonenumber-validation");
  let numbers = document.getElementById("no").value;

  if (numbers.length == 0) {
    numberError.innerHTML = "Phone number is Required";
    numberError.style.color = "#FF0000";
    return false;
  }

  if (
    !numbers.match(
      /((\+[0-9]{2})|0)[.\- ]?9[0-9]{2}[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}/
    )
  ) {
    numberError.innerHTML = "Phone number is invalid";
    numberError.style.color = "#FF0000";
    return false;
  }
  numberError.innerHTML = "Phone number is valid";
  numberError.style.color = "#1dcd59";
  return true;
}
function validateUsername() {
  let usernameError = document.getElementById("username-validation");
  let user = document.getElementById("username").value;

  if (user.length == 0) {
    usernameError.innerHTML = "Username is required";
    usernameError.style.color = "#FF0000";
    return false;
  }
  if (!user.match(/^[A-Za-z0-9]*$/)) {
    alert("Username consist of letters and numbers only");
    usernameError.innerHTML = "Username is invalid";
    usernameError.style.color = "#FF0000";
    return false;
  }
  usernameError.innerHTML = "Username is valid";
  usernameError.style.color = "#1dcd59";
  return true;
}

function validate() {
  var confirmpassError = document.getElementById("ConfirmPass-validation");
  var password = document.getElementById("pass");
  var confirmpass3 = document.getElementById("passconfirm");

  if (password.value.length >= 8) {
    confirmpassError.innerHTML = "Required password is at least 8 digit";
    confirmpassError.style.color = "#FF0000";
  } else {
    confirmpassError.innerHTML = "Required password is at least 8 digit";
    confirmpassError.style.color = "#FF0000";
    return;
  }

  if (password.value == confirmpass3.value) {
    confirmpassError.innerHTML = "Password Match!";
    confirmpassError.style.color = "#1dcd59";
    return true;
  } else {
    confirmpassError.innerHTML = "Password don't match";
    confirmpassError.style.color = "#FF0000";
  }

  if (password.value.length == 0) {
    confirmpassError.innerHTML = "Yowza, password is required silly.";
    confirmpassError.style.color = "#FF0000";
  }
}

function validateAddress() {
  let addressError = document.getElementById("address-validation");
  let cityError = document.getElementById("city-validation");
  let Address = document.getElementById("address").value;
  let City = document.getElementById("city").value;

  if (Address.length == 0) {
    addressError.innerHTML = "Address is required";
    addressError.style.color = "#FF0000";
    return false;
  }
  if (City.length == 0) {
    cityError.innerHTML = "City is required";
    cityError.style.color = "#FF0000";
    return false;
  }
  addressError.innerHTML = "";
  addressError.style.color = "#1dcd59";
  cityError.innerHTML = "";
  cityError.style.color = "#1dcd59";
  return true;
}
function validateProfile() {
  let profileError = document.getElementById("profile-validation");
  let profil = document.getElementById("myFile");

  if (profil.files.length == 0) {
    profileError.innerHTML = "no files selected";
    profileError.style.color = "#FF0000";
    return false;
  }
  else {
    profileError.innerHTML = "Profile uploaded";
    profileError.style.color = "#1dcd59";
    return true;
  }

}
function validateEmail() {
  let emailerror = document.getElementById("email-validation");
  let Email = document.getElementById("contact-email").value;

  if (Email.length == 0) {
    emailerror.innerHTML = "Email is required";
    emailerror.style.color = "#FF0000";
    return false;
  }
  if (!Email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
    emailerror.innerHTML = "Email invalid";
    emailerror.style.color = "#FF0000";
    return false;
  }
  emailerror.innerHTML = "Email is valid";
  emailerror.style.color = "#1dcd59";
  return true;
}

function validateForm() {
  let submitError = document.getElementById("submit-validation");
  if (
    !validate() ||
    !validateEmail() ||
    !validateUsername() ||
    !validatefullname() ||
    !validatephonenum() ||
    !validateAddress() ||
    !validateProfile()
  ) {
    submitError.style.display = "block";
    submitError.innerHTML = "Fix the error above.";
    submitError.style.color = "#FF0000";
    setTimeout(function () {
      submitError.style.display = "none";
    }, 3000);
    $("#reg").click(function () {
      const Toast = Swal.mixin({
        position: "center",
        showConfirmButton: true,
        confirmButtonColor: "#3085d6",
      });

      Toast.fire({
        icon: "warning",
        title: "Please fix the error",

        backdrop: `
        hsla(0, 0%, 0%, 0.5)
        url("assets/images/mochi-mochi-peach-cat-crying.gif")
        left
        no-repeat
      `,
      });
    });
    return false;
  } else {
    submitError.innerHTML = "Login success.";
    submitError.style.color = "#1dcd59";

    return true;
  }
}