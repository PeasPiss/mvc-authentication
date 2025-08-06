document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const utilisateur = document.getElementById("utilisateur");
    const email = document.getElementById("email");
    const utilisateurError = document.getElementById("utilisateurError");
    const emailError = document.getElementById("emailError");

    const nameRegex = /^[A-Za-zÀ-ÿ\s\-]+$/;

    // Validation individuelle
    function validateField(input, errorSpan, fieldName) {
        const value = input.value.trim();

        if (value === "") {
            errorSpan.textContent = `${fieldName} est requis.`;
            return false;
        } else if (!nameRegex.test(value)) {
            errorSpan.textContent = `${fieldName} ne doit contenir que des lettres.`;
            return false;
        } else {
            errorSpan.textContent = "";
            return true;
        }
    }

    // Validation au moment de soumettre
    form.addEventListener("submit", function (e) {
        let validUtilisateur = validateField(utilisateur, utilisateurError, "Le nom d'utilisateur");
        let validEmail = validateField(email, emailError, "L'email");

        if (!validUtilisateur || !validEmail) {
            e.preventDefault();
        }
    });

    // Validation temps réel
    utilisateur.addEventListener("input", () => validateField(utilisateur, utilisateurError, "Le nom d'utilisateur"));
    email.addEventListener("input", () => validateField(email, emailError, "L'email"));

    console.log("Proute");
    
});
