function validateAndSendForm() {
    var email = document.getElementById("exampleFormControlInput1").value.trim();
    var message = document.getElementById("exampleFormControlTextarea1").value.trim();
  
    if (email === "" || message === "") {
      alert("Please fill in both email and message fields.");
      return false; // Zapobiega wysłaniu formularza
    }
    // Wyzeruj pola
    document.getElementById("exampleFormControlInput1").value = "";
    document.getElementById("exampleFormControlTextarea1").value = "";
  
    alert("Message sent successfully!");
  
    return false; // Zapobiega standardowemu wysłaniu formularza
  }