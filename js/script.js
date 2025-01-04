/* const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});
 */

const loginForm = document.querySelector(".login_form form");
const signupForm = document.querySelector(".signup_form form");

// Funkcija za proveru email-a
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

// Funkcija za validaciju lozinke (minimalno 8 karaktera)
function isValidPassword(password) {
    return password.length >= 8;
}

// Login forma - validacija
loginForm.addEventListener("submit", function (event) {
    const emailInput = loginForm.querySelector("input[type='email']");
    const passwordInput = loginForm.querySelector("input[type='password']");
    let valid = true;

    if (!isValidEmail(emailInput.value)) {
        alert("Unesite ispravan email.");
        valid = false;
    }

    if (!isValidPassword(passwordInput.value)) {
        alert("Lozinka mora imati najmanje 8 karaktera.");
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});

// Registracija forma - validacija
signupForm.addEventListener("submit", function (event) {
    const emailInput = signupForm.querySelector("input[type='email']");
    const passwordInput = signupForm.querySelectorAll("input[type='password']")[0];
    const confirmPasswordInput = signupForm.querySelectorAll("input[type='password']")[1];
    let valid = true;

    if (!isValidEmail(emailInput.value)) {
        alert("Unesite validan email.");
        valid = false;
    }

    if (!isValidPassword(passwordInput.value)) {
        alert("Lozinka mora imati najmanje 8 karaktera.");
        valid = false;
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
        alert("Lozinke se ne poklapaju.");
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});
