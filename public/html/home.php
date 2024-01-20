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
              category unfolds a treasure trove of diverse recipes. Dive in and
              find the perfect dish for every occasion!
            </p>
          </div>
          <div class="categories-buttons">
            <button><i class="bx bx-baguette"></i> BREKFAST</button>
            <button><i class="bx bxs-coffee-alt"></i> LUNCH</button>
            <button><i class="bx bx-restaurant"></i>DINNER</button>
            <button>
              <i class="bx bxs-cookie"></i>
              SNACK
            </button>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="popular-meals">
          <div class="meal-content">
            <h1>Popular</h1>
            <?php foreach ($randomMeals as $meal): ?>
              <div class="meal">
                <h3><?php echo $meal['meal_name']; ?></h3>
                <button>Check</button>
              </div>
            <?php endforeach; ?>
            <a class="see-all" href=""
              >See all
              <i class="bx bx-right-arrow-alt"></i>
            </a>
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
              <img src="public/images/pexels-eneida-nieves-803963.jpg" alt="" />
              <div class="description">
                <h1><?php echo $mealOfDay['meal_name']; ?>
                <i class='bx bx-happy-heart-eyes'></i></h1>
                <p>
                <?php echo $mealOfDay['description'];?>
                </p>
                <button>Check</button>
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
