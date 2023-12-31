<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/recipe.css" />
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
      <div class="recipe-content">
        <header class="header">
          <nav class="navbar">
            <a class="mobile-back" href="public/html/main-page.html">
              <i class="bx bx-chevron-left"></i>
            </a>
            <img
              class="nav-logo"
              src="public/images/gluco-icon.png"
              alt="This is an icon of gluco-app"
            />
            <div class="navbar-links">
              <a href="home">HOME</a>
              <a href="#ingredients">INGREDIENTS</a>
              <a href="#preparation">MEAL PREPARATION</a>
              <a href="#nutritional">NUTRITONAL VALUES</a>
            </div>
          </nav>
        </header>
        <div class="mobile-menu">
          <a href="#ingredients">INGREDIENTS</a>
          <a href="#preparation">MEAL PREP</a>
          <a href="#nutritional">NUTRI VALUES</a>
        </div>
        <div class="recipe-name">
          <p>Chicken Salad</p>
          <button class="add-favourite">
            Add to favourite
            <i class="bx bxs-heart-circle"></i>
          </button>
          <div class="icons">
            <a href="">
              <i class="bx bxs-heart-circle"></i>
            </a>
            <a href="">
              <i class="bx bx-share"></i>
            </a>
            <a href="">
              <i class="bx bxl-instagram"></i>
            </a>
            <a href="">
              <i class="bx bxl-facebook-circle"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="description-content">
        <div class="description-text">
          <h1>
           <i class='bx bx-calendar-check'></i>
            Description
          </h1>
          <p>
            A chicken salad presents a balanced fusion of flavors and textures.
            Tender pieces of boiled chicken intermingle with a medley of fresh
            greens, crunchy cucumber slices, red onion rings, and succulent
            strips of red bell pepper. The salad is lightly coated with a
            yogurt-based dressing, imparting a lightness and refreshing taste.
            With a sprinkle of salt, pepper, and favorite spices, this chicken
            salad is an excellent choice for those seeking a combination of
            healthy and delectable dining.
          </p>
        </div>
        <div class="description-table">
          <div class="li-1">
            <p>
                <i class="bx bxs-category-alt"></i>
                Category
                <p>Dinner</p>
            </p>
          </div>
          <div class="li-2">
            <p>
                <i class="bx bx-line-chart"></i>
                Difficulty
                <p>Medium</p>
            </p>
          </div>
          <div class="li-3">
            <p>
                <i class="bx bxs-time"></i>
                Total time
                <p>40 min</p>
            </p>
          </div>
          <div class="li-4">
            <p>
                <i class="bx bxs-bowl-hot"></i>
                Yields
                <p>4 Servings</p>
            </p>
          </div> 
        </div>
      </div>
      <div class="ingredients">
        <div class="ingredients-content">
          <div class="ingrednients-info">
            <h1>
              <i class="bx bxs-cheese" id="ingredients"></i>
              Ingredients
            </h1>
            <p>
              First of all, check if you have all the necessary ingredients for
              this recipe. Pay attention to the quantities!
            </p>
          </div>
        </div>
        <div class="ingredients-description">
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
          <li>200 g of chicken</li>
        </div>
      </div>
      <div class="preparation">
        <div class="preparation-content">
          <div class="preparation-info" id="preparation">
            <h1>
              <i class="bx bxs-food-menu"></i>
              Meal Preparation
            </h1>
            <p>
              Next, follow the steps to finalize your dish and finally be able
              to enjoy it!
            </p>
          </div>

          <div class="preparation-description">
            <li>
              Prepare the Chicken Cook and shred the chicken breasts into
              bite-sized pieces.
            </li>
            <li>In a large bowl, combine the mixed salad greens.</li>
            <li>
              Add the halved cherry tomatoes, sliced cucumber, and thinly sliced
              red onion to the bowl.
            </li>
            <li>Sprinkle crumbled feta cheese over the salad.</li>
            <li>Add sliced black olives to the mix.</li>
            <li>
              Toss the shredded chicken into the salad for a protein boost.
            </li>
            <li>
              In a separate bowl, whisk together olive oil, lemon juice, Dijon
              mustard, minced garlic, salt, and pepper to create a flavorful
              dressing.
            </li>
            <li>
              Drizzle the dressing over the salad and gently toss everything
              together until well coated. Serve immediately, garnished with
              freshly chopped parsley if desired.
            </li>
          </div>
        </div>
      </div>
      <div class="nutritional">
        <div class="nutritional-content">
          <div class="nutritional-info" id="nutritional">
            <h1>
              <i class="bx bxs-cookie"></i>
              Nutritional Values
            </h1>
            <p>Finally, here are nutritional values of this meal!</p>
          </div>
        </div>
        <div class="nutitional-description">
          <div class="elemnt1">
            <h1>Calories</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
          <div class="elemnt2">
            <h1>Fat</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
          <div class="elemnt3">
            <h1>Carbs</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
          <div class="elemnt4">
            <h1>Sugar</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
          <div class="elemnt5">
            <h1>Protein</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
          <div class="elemnt6">
            <h1>Fibre</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
          <div class="elemnt7">
            <h1>Sodium</h1>
            <p>22336.8 kJ / 534.4 kcl</p>
          </div>
        </div>
      </div>
      <div class="greetings-content">
        <h1>Enjoy your meal!</h1>
        <p>
          We encourage you to discover other recipes
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
