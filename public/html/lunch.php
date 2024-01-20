<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/public/css/lunch.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Gluco</title>
  </head>
  <body>
    <div class="main-container">
      <header class="header">
        <nav class="navbar">
          <a class="mobile-back" href="/public/html/main-page.html">
            <i class="bx bx-chevron-left"></i>
          </a>
          <!-- <img
            class="nav-logo"
            src="../img/gluco-icon.png"
            alt="This is an icon of gluco-app"
          /> -->
          <h1>Welcome User!</h1>
          <div class="navbar-links">
            <a href="home">HOME</a>
            <a href="favourites">FAVOURTIES</a>
            <a href="favourites">MEAL OF THE DAY</a>
          </div>
          <form class="logout" action="logout.php" method="POST">
              <button type="submit">LOG OUT</button>
          </form> 
        </nav>
      </header>
      <div class="mobile-menu">
        <a href="#ingredients">INGREDIENTS</a>
        <a href="#preparation">MEAL PREP</a>
        <a href="#nutritional">NUTRI VALUES</a>
      </div>
      <div class="categories">
        <div class="categories-container">
          <div class="categories-info">
            <h1>BEST LUNCH RECIPES</h1>
            <p>
              Midday Delights for Satisfying Lunches! In the "Lunch" section, we offer a selection of recipes tailored for your midday fuel. Explore a variety of satisfying and quick lunch ideas that suit your taste and schedule. From vibrant salads to filling sandwiches, these recipes ensure that your lunch break is a moment to savor.
            </p>
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
</body>