<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/brekfast.css" />
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
          <a class="mobile-back" href="/public/html/home.html">
            <i class="bx bx-chevron-left"></i>
          </a>
          <!-- <img
            class="nav-logo"
            src="../img/gluco-icon.png"
            alt="This is an icon of gluco-app"
          /> -->
          <h1>BREKFAST</h1>
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
            <h1>BEST BREKFAST RECIPES</h1>
            <p>
              Start Your Day Right with Flavorful Beginnings! In the "Breakfast"
              section, we serve up a delightful array of morning recipes to
              kickstart your day. From hearty classics to inventive twists,
              these breakfast ideas are crafted to bring joy to your mornings.
              Whether you prefer a quick and nutritious option or a leisurely
              brunch affair, discover recipes that make breakfast the highlight
              of your day.
            </p>
          </div>
        </div>
      </div>
      <div class="recipes">
        <div class="meal-content">
          <?php $counter = 0; ?>
          <?php foreach ($brekfast as $item): ?>
              <?php $img = $item['image']; ?>
              <div class="meal" style="background-image: radial-gradient(
                circle,
                rgba(60, 60, 60, 0.902) 0%,
                rgba(53, 51, 51, 0) 100%
            ),
            url('<?=$img; ?>')">
                <h3><?php echo $item['meal_name']; ?></h3>
                <form action="/recipe" method="post">
                  <input type="hidden" name="meal_name" value="<?php echo htmlspecialchars($item['meal_name']); ?>">
                  <button type="submit">Check</button>
                </form>
              </div>
            <?php endforeach; ?>
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
    </div>
  </body>
</html>
