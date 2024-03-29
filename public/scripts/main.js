// Page Elements
const body = document.querySelector(".main-page-container")
const hamburger = document.getElementById("hamburger")
const navLinks = document.querySelector(".navbar-links")

// Variables
const hamburgerClassNames = ['fa-solid fa-x', 'fa-solid fa-bars']

hamburger.addEventListener('click', () => {
    if (hamburger.className === hamburgerClassNames[0]) {
        hamburger.className = hamburgerClassNames[1];
        navLinks.style.display = 'none';
    } else {
        hamburger.className = hamburgerClassNames[0];
        navLinks.style.display = 'flex';
    }
})

window.addEventListener('resize', () => {
   if (window.innerWidth > 900) {
        navLinks.style.display = 'flex';
   } else {
        navLinks.style.display = 'none';
   }
})


function redirectTo(url) {
    window.location.href = url;
}

let signInButton = document.querySelector('.sign-in-button');
if (signInButton) {
    signInButton.addEventListener('click', function() {
        redirectTo('login'); 
    });
}


let signUpButton = document.querySelector('.sign-up-button');
if (signUpButton) {
    signUpButton.addEventListener('click', function() {
        redirectTo('register'); 
    });
}