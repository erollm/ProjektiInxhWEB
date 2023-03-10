document.addEventListener("DOMContentLoaded", function (event) {
    const registerButton = document.getElementById("registerbutton");
    const loginButton = document.getElementById("loginbutton");
    const contactButton = document.getElementById("contactbutton");

    const Registervalidate = (event) => {
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
            event.preventDefault();
            message.innerHTML = "Username cannot be empty";
            username.focus();
            return false;
        }
        if (username.value.length > 20) {
            event.preventDefault();
            message.innerHTML = "Username cannot be more then 20 characters";
            username.focus();
            return false;
        }
        if (email.value == "") {
            event.preventDefault();
            message.innerHTML = "Email cannot be empty";
            email.focus();
            return false;
        }
        if (!emailValid(email.value)) {
            event.preventDefault();
            message.innerHTML = "Email is not valid";
            email.focus();
            return false;
        }
        if (password.value == "" || retypepassword.value == "") {
            event.preventDefault();
            message.innerHTML = "Password cannot be empty";
            password.focus();
            return false;
        }
        if (password.value != retypepassword.value) {
            event.preventDefault();
            message.innerHTML = "Passwords do not match";
            password.focus();
            return false;
        }
        if (!passwordValid(password.value)) {
            event.preventDefault();
            message.innerHTML = "Password must have at least one letter and one number and minimum eight characters.";
            password.focus();
            return false;
        }
        return true;
    }

    const Loginvalidate = (event) => {
        const username = document.getElementById("username");
        const password = document.getElementById("password");
        const message = document.getElementById("errormesage");
        message.style.marginBottom = "-20px";
        const passwordValid = (pass) => {
            const passRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            return passRegex.test(pass);
        }

        if (username.value == "") {
            event.preventDefault();
            message.innerHTML = "Username cannot be empty";
            username.focus();
            return false;
        }
        if (username.value.length > 20) {
            event.preventDefault();
            message.innerHTML = "Username cannot be more then 20 characters";
            username.focus();
            return false;
        }
        if (password.value == "") {
            event.preventDefault();
            message.innerHTML = "Password cannot be empty";
            password.focus();
            return false;
        }
        if (!passwordValid(password.value)) {
            event.preventDefault();
            message.innerHTML = "Password must have at least one letter and one number and minimum eight characters.";
            password.focus();
            return false;
        }
        return true;
    }

    const Contactvalidate = (event) => {
        
        const fullname = document.getElementById("fullname");
        const email = document.getElementById("email");
        const subject = document.getElementById("subject");
        const message = document.getElementById("message");
        const errormessage = document.getElementById("errormessage");
        const emailValid = (email) => {
            const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/;
            return emailRegex.test(email.toLowerCase());
        }

        if (fullname.value == "") {
            event.preventDefault();
            errormessage.innerHTML = "Name cannot be empty";
            fullname.focus();
            return false;
        }
        if (email.value == "") {
            event.preventDefault();
            errormessage.innerHTML = "Email cannot be empty";
            email.focus();
            return false;
        }
        if (!emailValid(email.value)) {
            event.preventDefault();
            errormessage.innerHTML = "Email is not valid";
            email.focus();
            return false;
        }
        if (subject.value == "") {
            event.preventDefault();
            errormessage.innerHTML = "Subject cannot be empty";
            subject.focus();
            return false;
        }
        if (message.value == "") {
            event.preventDefault();
            errormessage.innerHTML = "Message cannot be empty";
            message.focus();
            return false;
        }
        return true;
    }

    if (registerButton != null) {
        registerButton.addEventListener("click", Registervalidate);
    }
    if (loginButton != null) {
        loginButton.addEventListener("click", Loginvalidate);
    }
    if (contactButton != null) {
        contactButton.addEventListener("click", Contactvalidate);
    }

})

