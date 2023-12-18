function validateForm() {
  var email = document.querySelector(".email").value;
  var password = document.querySelector(".password").value;


  var emailError = document.querySelector(".emailError");
  var passwordError = document.querySelector(".passwordError");
  emailError.textContent = "";
  passwordError.textContent = "";
  if (email == "") {
    emailError.textContent = "Vui lòng nhập lại email !";
    return false;
  }
  else if (password == "") {
    passwordError.textContent = "Vui lòng nhập mật khẩu !";
    return false;
  }
  
  // Ngăn form được submit một cách truyền thống
  return true;
}
