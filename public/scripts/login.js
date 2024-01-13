function redirectTo(url) {
    window.location.href = url;
}

// Odwołanie się do przycisku "Sign in" i dodanie obsługi zdarzenia
let signInButton = document.querySelector('.sign-in-button');
if (signInButton) {
    signInButton.addEventListener('click', function() {
        redirectTo('login'); // Przekierowanie na stronę logowania
    });
}

// Odwołanie się do przycisku "Register for Free" i dodanie obsługi zdarzenia
let signUpButton = document.querySelector('.sign-up-button');
if (signUpButton) {
    signUpButton.addEventListener('click', function() {
        redirectTo('account'); // Przekierowanie na stronę rejestracji
    });
}