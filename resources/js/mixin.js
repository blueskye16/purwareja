// mixin.js
export default {
    togglePasswordVisibility() {
        const passwordInput = document.getElementById("password");
        const eyeIcon = document.getElementById("eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.setAttribute("data-feather", "eye");
        } else {
            passwordInput.type = "password";
            eyeIcon.setAttribute("data-feather", "eye-off");
        }

        feather.replace();
    },
    toggleRetypePasswordVisibility() {
        const passwordInput = document.getElementById("retypePassword");
        const eyeIcon = document.getElementById("eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.setAttribute("data-feather", "eye");
        } else {
            passwordInput.type = "password";
            eyeIcon.setAttribute("data-feather", "eye-off");
        }

        feather.replace();
    },
};
