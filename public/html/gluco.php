<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="public/css/gluco.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <title>Gluco</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="public/scripts/main.js" defer></script>
    <script src="public/scripts/sendMessage.js" defer></script>
    <script src="public/scripts/script.js" defer></script>
  </head>
  <body>
    <div class="main-page-container">
      <nav class="navbar">
        <img
          class="nav-logo"
          src="public/images/gluco-icon.png"
          alt="This is an icon of gluco-app"
        />
        <div class="navbar-links">
          <a href="#About-us">ABOUT US</a>
          <a href="#faq">FAQ</a>
          <a href="#contact">CONTACT </a>
        </div>
        <div class="nav-buttons">
          <button class="sign-in-button" type="submit" action="login">Sign in</button>
          <button class="sign-up-button" type="submit" action="register">Register For Free</button>
        </div>
        <i class="fa-solid fa-bars" id="hamburger"></i>
      </nav>
      <div class="text-container">
        <h1>Gluco - Your diabetic best friend</h1>
        <p>
          Welcome to Gluco, an innovative recipe app designed for people with diabetes :)
        </p>
        <div class="main-page-buttons">
          <button class="sign-in-button" type="submit" action="login">Sign in</button>
          <button class="sign-up-button" type="submit" action="register">Register For Free</button>
        </div>
      </div>
    </div>
    <div class="About-us" id="About-us">
      <div class="about-us-container">
        <div class="about-us-info">
          <h1>Who we are ?</h1>
          <p>We are a dedicated team of nutrition experts, culinary enthusiasts, and technology innovators, united by a common goal: to make healthy eating simple and enjoyable for those living with diabetes.

            Our journey began with a simple realization – managing diabetes doesn't just mean keeping track of numbers; it's about embracing a lifestyle where every meal not only nourishes your body but also brings joy to your palate.</p>
        </div>
        <div class="about-us1">
          <img src="/public/images/about-us2.jpg" alt="">
          <div class="description">
            <h1>Why Diabetic Recipes?</h1>
            <p>Diabetic recipes are crafted with precision to regulate blood sugar levels, ensuring a balanced and nourishing diet for individuals managing diabetes. Tailored ingredients promote health, energy, and delicious meals without compromising on taste.</p>
          </div>
        </div>
        <div class="about-us1">
          <img src="public/images/about-us3.jpg" alt="">
          <div class="description">
            <h1>Is It Healthy?</h1>
            <p>Absolutely. Diabetic recipes prioritize nutrient-rich ingredients, low glycemic index foods, and controlled portions. This health-centric approach supports overall well-being, weight management, and blood sugar control. Enjoying wholesome meals becomes a daily delight, contributing to a healthier lifestyle.</p>
          </div>
        </div>
        <div class="about-us1">
          <img src="public/images/about-us1.jpg" alt="">
          <div class="description">
            <h1>Is It Tasty?</h1>
            <p>Diabetic recipes redefine the notion that healthy can't be delicious. Bursting with flavors, these recipes use herbs, spices, and creative combinations to tantalize taste buds. From vibrant salads to hearty entrees, each dish promises a delightful culinary experience, proving that healthy eating can be an indulgent pleasure.</p>
          </div>
        </div>
      </div>
      <div class="Stats">
        <div class="stats-content">
          <div class="stats-info">
            <hr>
            <h1>100%</h1>
            <p>Diabetic friendly recipes</p>
            <hr>
          </div>
          <div class="stats-info">
            <hr>
            <h1>10000</h1>
            <p>Delicious and unique recipes</p>
            <hr>
          </div>
          <div class="stats-info">
            <hr>
            <h1>98%</h1>
            <p>Satisfied clients</p>
            <hr>
        </div>
      </div>
    </div>
    <div class="FAQ">
      <div class="FAQ-description" id="faq">
        <h1>FAQ</h1>
        <p>
          Explore our FAQ section on diabetes regulations, designed to provide
          quick answers and valuable insights for effective diabetes management.
          Discover tips on diabetic recipes, meal planning, sugar substitutes,
          and lifestyle choices. Empower yourself with the knowledge needed for
          a healthier, balanced life.
        </p>
      </div>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseOne"
              aria-expanded="true"
              aria-controls="panelsStayOpen-collapseOne"
            >
              Why use diabetic recipes?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseOne"
            class="accordion-collapse collapse show"
          >
            <div class="accordion-body">
              <strong
                >Diabetic recipes help maintain control over blood sugar levels
                by providing tasty and healthy alternatives tailored to specific
                dietary needs.</strong
              >
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTwo"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseTwo"
            >
              Are there sugar substitutes suitable for diabetics?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseTwo"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              <strong
                >Yes, there are many sugar substitutes, such as stevia or
                erythritol, that can be safely used by individuals with
                diabetes, adding sweetness without impacting glucose
                levels.</strong
              >
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseThree"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseThree"
            >
              How to effectively plan meals for diabetics?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseThree"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              <strong
                >Effective meal planning for diabetics involves balancing
                proteins, carbohydrates, and fats. In our recipes, you'll find
                inspiration for balanced and delicious dishes that support a
                healthy lifestyle.</strong
              >
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFour"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFour"
            >
              Are diabetic recipes difficult to prepare?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseFour"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              <strong
                >No, the recipes are tailored for easy preparation. They provide
                simple steps and ingredients, allowing for tasty meals without
                complications, promoting a healthy lifestyle.</strong
              >
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed --bs-warning-border-subtle accordion-active"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFive"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFive"
            >
              How can diabetic recipes contribute to overall health and
              well-being?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseFive"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              <strong
                >Diabetic recipes are designed to support overall health by
                promoting balanced nutrition. They help regulate blood sugar
                levels, encourage mindful eating, and contribute to a healthier
                lifestyle for individuals managing diabetes.</strong
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-us" id="contact">
      <div class="caption">
        <h1>Contact Us!</h1>
      </div>
      <div class="contact-icons">
        <div class="phone">
          <i class="bx bx-phone"></i>
          <h1>PHONE</h1>
          <h2>Main Company:</h2>
          <p>Phone: (+48) 224444444</p>
          <h2>Customer Service:</h2>
          <p>Phone: (+48) 225555555</p>
          <h2>Administration:</h2>
          <p>Phone: (+48) 226666666</p>
        </div>
        <div class="adress">
          <i class="bx bx-map"></i>
          <h1>ADRESS</h1>
          <h2>Our mailing adress is:</h2>
          <p>Strzebrzeszynowska 159,</p>
          <p>Chrząszczyżewoszyce 32-258,</p>
          <p>Poland</p>
        </div>
        <div class="email">
          <i class="bx bx-message-square-dots"></i>
          <h1>EMAIL</h1>
          <h2>Main Company:</h2>
          <p>Gluco.app@gmail.com</p>
          <h2>Customer Service:</h2>
          <p>Gluco.app.customer@gmail.com</p>
          <h2>Administration:</h2>
          <p>Gluco.app.administration@gmail.com</p>
        </div>
      </div>
      <div class="contact-info">
        <h1>
          Great vision without great people is irrelevant. Let's work together!
        </h1>
        <div class="contact-form">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="name@example.com"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
              >Write your thoughts</label
            >
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>
        </div>
        <div class="contact-button">
          <button type="button" class="contact-btn" onclick="validateAndSendForm()">Send</button>
        </div>
      </div>
    </div>
    <div class="greetings-content">
      <p>
        We hope that our app will meet your expectations!
        <i class="bx bx-happy-alt"></i>
      </p>
    </div>
    <div class="author-info">
      <p>
        <i class="bx bxs-hand"></i>
        CREATED BY MICHAŁ ZUB
      </p>
      <p>
        <i class="bx bx-registered"></i>
        ALL RIGHTS RESERVED
      </p>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
