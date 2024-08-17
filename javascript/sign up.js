document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('sign-up-form');
    const nom = document.getElementById('nom');
    const email = document.getElementById('email');
    const numero = document.getElementById('numero');
    const motDePasse = document.getElementById('mot-de-passe');
    const message = document.getElementById('message');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        let errorMessage = '';

        // Validation du champ "Nom"
        if (nom.value.trim() === '') {
            errorMessage += 'Le nom est requis. ';
        }

        // Validation du champ "Email"
        if (email.value.trim() === '') {
            errorMessage += 'L\'email est requis. ';
        } else if (!validateEmail(email.value)) {
            errorMessage += 'L\'email n\'est pas valide. ';
        }

        // Validation du champ "Numéro de téléphone"
        if (numero.value.trim() === '') {
            errorMessage += 'Le numéro de téléphone est requis. ';
        } else if (!validatePhoneNumber(numero.value)) {
            errorMessage += 'Le numéro de téléphone n\'est pas valide. ';
        }

        // Validation du champ "Mot de passe"
        if (motDePasse.value.trim() === '') {
            errorMessage += 'Le mot de passe est requis. ';
        }

        if (errorMessage) {
            message.textContent = errorMessage;
        } else {
            message.textContent = 'Formulaire soumis avec succès !';
            // Vous pouvez ajouter ici le code pour envoyer les données au serveur
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePhoneNumber(phone) {
        const re = /^\d{10}$/; // Exemple pour la validation de numéros de téléphone à 10 chiffres
        return re.test(phone);
    }
});