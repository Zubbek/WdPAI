
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/register.css" />
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
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <title>Gluco</title>
  </head>
  <body>
    <div class="login-container">
      <div class="wrapper">
        <div class="form-box-login">
          <div class="circle">
            <img src="public/images/logo-white.png" alt="" />
          </div>
          <div class="box-login">
            <h1>Create your account</h1>
            <form action="home" method="post">
            <div class="messages">
                <?php if(isset($messages)) {
                    foreach ($messages as $message) {
                      echo $message;
                    }
                }
                ?>
              </div>
              <div class="input-box">
                <input type="text" name="username-a" required />
                <label>Username</label>
                <i class="bx bxs-user"></i>
              </div>
              <div class="input-box">
                <input type="email" name="email-a" required />
                <label>E-mail</label>
                <i class='bx bxs-envelope'></i>
              </div>
              <div class="input-box">
                <input
                  type="password"
                  name="password-a"
                  required
                  aria-describedby="passwordHelp"
                />
                <label>Password</label>
                <i class="bx bxs-lock-alt"></i>
              </div>
              <div class="remember-forgot">
                <label class="checkbox-forgot"
                  ><input
                    type="checkbox"q]
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  Remember me
              </div>
              <button type="submit" class="btn">Create</button>
              <div class="register-link">
                <p>Already have an accout ? <a href="login">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="image-container">
        <a href="">
          <i class="fa-solid fa-house"></i>
          Home
        </a>
        <img src="public/images/gluco-icon.png" alt="" />
      </div>
    </div>
  </body>
</html>
