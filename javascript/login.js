document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('login');
    const usernameOrEmailInput = document.getElementById('username_or_email');
    const passwordInput = document.getElementById('password');
    const usernameOrEmailError = document.querySelector('.form__input-error-messages');
    const passwordError = document.querySelector('.form__input-password-incorrect');

    form.addEventListener('submit', function (event) {
        let valid = true;

        // Réinitialiser les messages d'erreur
        usernameOrEmailError.textContent = '';
        passwordError.textContent = '';

        // Validation des champs
        if (usernameOrEmailInput.value.trim() === '') {
            usernameOrEmailError.textContent = 'Le nom d\'utilisateur ou l\'email est requis.';
            valid = false;
        }

        if (passwordInput.value.trim() === '') {
            passwordError.textContent = 'Le mot de passe est requis.';
            valid = false;
        }

        // Si le formulaire n'est pas valide, empêcher l'envoi
        if (!valid) {
            event.preventDefault();
        }
    });
});
