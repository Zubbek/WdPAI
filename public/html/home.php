<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/home.css" />
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
    <script src="public/scripts/categories.js" defer></script>
  </head>
  <body>
    <div class="main-container">
      <header class="header">
        <nav class="navbar">
          <a class="mobile-back" href="public/html/main-page.html">
            <i class="bx bx-chevron-left"></i>
          </a>
          <!-- <img
            class="nav-logo"
            src="../img/gluco-icon.png"
            alt="This is an icon of gluco-app"
          /> -->
          <H1>WELCOME <?php echo htmlspecialchars($user->getUserName()); ?>! </H1>
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
            <h1>MAIN RECIPES CATEGORIES</h1>
            <p>
              Embark on a Culinary Journey Throughout Your Day! We invite you to
              explore a spectrum of delectable options designed for every part
              of your day. From energizing Breakfast delights to satisfying
              Lunch choices, indulgent Dinners, and delightful Snacks, each
              category unfolds a treasure trove of diverse recipes.
            </p>
          </div>
          <div class="categories-buttons">
          <button data-category="brekfast" href="/brekfast"><i class="bx bx-baguette"></i> BREKFAST</button>
          <button data-category="lunch" href="/lunch"><i class="bx bx-baguette"></i> LUNCH</button>
          <button data-category="dinner" href="/dinner"><i class="bx bx-baguette"></i> DINNER</button>
          <button data-category="snack" href="/snack"><i class="bx bx-baguette"></i> SNACK</button>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="popular-meals">
          <div class="popular-info">
            <h1>THE MOST POPULAR RECIPES</h1>
            <p>
            The Most Popular Recipes' tag opens the gateway to a culinary realm where flavor takes center stage. Delve into a curated selection of our community's most cherished and sought-after recipes. From the breakfast delights that kickstart the day to the satisfying lunch options, indulgent dinners, and delightful snacks, this tag unveils a treasure trove of gastronomic wonders.
            </p>
          </div>
          <div class="meal-content">
            <?php foreach ($randomMeals as $meal): ?>
              <?php $img = $meal['image']; ?>
              <div class="meal" style="background-image: radial-gradient(
                circle,
                rgba(60, 60, 60, 0.902) 0%,
                rgba(53, 51, 51, 0) 100%
            ),
            url('<?=$img; ?>')">
                <h3><?php echo $meal['meal_name']; ?></h3>
                <form action="/recipe" method="post">
                  <input type="hidden" name="meal_name" value="<?php echo htmlspecialchars($meal['meal_name']); ?>">
                  <button type="submit">Check</button>
                </form>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="meal-day" id="meal-day">
          <div class="meal-container">
            <div class="meal-info">
              <h1>MEAL OF THE DAY</h1>
              <p>
                Discover our carefully curated pick for today! In "Meal of the
                Day," we showcase a recipe that stands out not only for its
                exceptional flavor but also for its originality and ease of
                preparation. Today's dish has been selected for its seasonal
                ingredients, perfect flavor balance, and positive reviews from
                our culinary community. Dive into the experience and explore how
                effortlessly you can bring culinary magic to your own kitchen!
              </p>
            </div>
            <div class="meal-description">
              <img src="<?php echo $mealOfDay['image']; ?>" alt="" />
              <div class="description">
                <h1><?php echo $mealOfDay['meal_name']; ?>
                <i class='bx bx-happy-heart-eyes'></i></h1>
                <p>
                <?php echo $mealOfDay['description'];?>
                </p>
                <form action="/recipe" method="post">
                  <input type="hidden" name="meal_name" value="<?php echo htmlspecialchars($mealOfDay['meal_name']); ?>">
                  <button type="submit">Check</button>
                </form>
              </div>
            </div>
          </div>
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
</html>
