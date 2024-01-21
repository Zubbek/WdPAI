document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.categories-buttons button');
  
    buttons.forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault();  // Zapobiega domyślnej nawigacji
        const category = this.getAttribute('data-category');
        window.location.href = `/${category}`;
      });
    });
  });