/*==================== SHOW HIDE ====================*/
const showHide = (toggleSelect, navSelect, navSelect2) => {
  const toggle = document.querySelector(toggleSelect),
    nav = document.querySelector(navSelect),
    nav2 = document.querySelector(navSelect2);

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
      if (nav2) {
        nav2.classList.toggle("show");
      }
    });
  }
};

showHide("li.login-link", ".container.login", ".contact");
showHide("li.register-link", ".container.registration", ".contact");
showHide(".gotoRegister", ".container.registration", ".container.login");

showHide(".closeLogin", ".container.login", ".contact");
showHide(".closeRegistration", ".container.registration", ".contact");

/*====================== Form validate===============*/
document.addEventListener("DOMContentLoaded", function () {
  Validator({
    form: "#form-registration",
    formGroupSelector: ".input-box",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired("#fullname", "Please enter your full name"),
      Validator.isEmail("#email", "Please enter the correct email"),
      Validator.minLength("#password", 6, 32),
      Validator.isRequired("#password_confirmation", "Please confirm password"),
      Validator.isRequired("input[name='gender']", "Please select your gender"),
      Validator.isConfirmed(
        "#password_confirmation",
        function () {
          return document.querySelector("#form-registration #password").value;
        },
        "Confirm password is incorrect"
      ),
      Validator.isRequired("#number_phone", "Please enter the phone number"),
      Validator.isRequired("#username", "Please enter your username"),
    ],
  });

  Validator({
    form: "#form-login",
    formGroupSelector: ".input-box",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired("#user-name", "Please enter your username"),
      Validator.minLength("#password_login", 6, 32),
    ],
  });
});
