document.addEventListener("DOMContentLoaded", function (event) {
    const registerButton = document.getElementById("registerbutton");
    const loginButton = document.getElementById("loginbutton");
    const Registervalidate = (event) => {
        event.preventDefault();
        const username = document.getElementById("username");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const retypepassword = document.getElementById("retypepassword");
        const message = document.getElementById("errormesage");
        message.style.marginBottom = "-20px";
        const emailValid = (email) => {
            const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/;
            return emailRegex.test(email.toLowerCase());
        }
        const passwordValid = (pass) => {
            const passRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            return passRegex.test(pass);
        }

        if (username.value == "") {
            message.innerHTML = "Username cannot be empty";
            username.focus();
            return false;
        }
        if (username.value.length > 20) {
            message.innerHTML = "Username cannot be more then 20 characters";
            username.focus();
            return false;
        }
        if (email.value == "") {
            message.innerHTML = "Email cannot be empty";
            email.focus();
            return false;
        }
        if (!emailValid(email.value)) {
            message.innerHTML = "Email is not valid";
            email.focus();
            return false;
        }
        if (password.value == "" || retypepassword.value == "") {
            message.innerHTML = "Password cannot be empty";
            password.focus();
            return false;
        }
        if (password.value != retypepassword.value) {
            message.innerHTML = "Passwords do not match";
            password.focus();
            return false;
        }
        if (!passwordValid(password.value)) {
            message.innerHTML = "Password must have at least one letter and one number and minimum eight characters.";
            password.focus();
            return false;
        }
        return true;
    }

    const Loginvalidate = (event) => {
        event.preventDefault();
        const username = document.getElementById("username");
        const password = document.getElementById("password");
        const message = document.getElementById("errormesage");
        message.style.marginBottom = "-20px";
        const passwordValid = (pass) => {
            const passRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            return passRegex.test(pass);
        }

        if (username.value == "") {
            message.innerHTML = "Username cannot be empty";
            username.focus();
            return false;
        }
        if (username.value.length > 20) {
            message.innerHTML = "Username cannot be more then 20 characters";
            username.focus();
            return false;
        }
        if (password.value == "") {
            message.innerHTML = "Password cannot be empty";
            password.focus();
            return false;
        }
        if (!passwordValid(password.value)) {
            message.innerHTML = "Password must have at least one letter and one number and minimum eight characters.";
            password.focus();
            return false;
        }
        return true;
    }

    if (loginButton != null) { 
        loginButton.addEventListener("click", Loginvalidate);
    }
    if (registerButton != null) {
        registerButton.addEventListener("click", Registervalidate);
    }
})

