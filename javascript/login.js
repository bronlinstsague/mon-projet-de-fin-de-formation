// document.addEventListener('DOMContentLoaded', function () {
//     const form = document.getElementById('login');
//     const usernameInput = document.getElementById('username');
//     const passwordInput = document.getElementById('password');
//     const errorMessages = document.querySelector('.form_input-error-messages');
//     const passwordIncorrect = document.querySelector('.form_input-password-incorrect');

//     form.addEventListener('submit', function (event) {
//         event.preventDefault(); // Empêche l'envoi du formulaire

//         // Réinitialiser les messages d'erreur
//         errorMessages.style.display = 'none';
//         passwordIncorrect.style.display = 'none';

//         let isValid = true;

//         if (!usernameInput.value) {
//             errorMessages.style.display = 'block';
//             errorMessages.textContent = 'Le champ utilisateur est requis.';
//             isValid = false;
//         }

//         if (!passwordInput.value) {
//             passwordIncorrect.style.display = 'block';
//             passwordIncorrect.textContent = 'Le champ mot de passe est requis.';
//             isValid = false;
//         }

//         if (isValid) {
//             // Envoyer les données au serveur ou traiter le formulaire ici
//             console.log('Formulaire soumis');
//             // form.submit(); // Décommentez cette ligne pour envoyer le formulaire
//         }
//     });
// });

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
