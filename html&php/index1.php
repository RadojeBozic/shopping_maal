<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping maal & Registration Form</title>
    <link rel="stylesheet" href="../css/style1.css?v=1" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <style>
  .header h1 {
    color:rgba(255, 255, 255, 0.9);
    font-size: 36px;
    padding: 150px;
  }

  .header h1:hover {
    color:rgb(255, 255, 255);
    font-size: 56px;
    padding: 50px;
    cursor: pointer;
  }
  </style>
  
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">ShoppingMaal</a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="../php/index.php" class="nav_link">Home</a>
            <a href="../php/brendovi.php" class="nav_link">Naši brendovi</a>
            <a href="#" class="nav_link">Uslovi korišćenja</a>
            <a href="#" class="nav_link">Kontakt</a>
          </li>
        </ul>

        <button class="button" id="form-open">Uloguj se</button>
      </nav>
      <a href="../php/brendovi.php"><h1>Prvi on line šoping mol...</h1></a>
      

    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="#">
            <h2>Prijavite se</h2>

            <div class="input_box">
              <input type="email" placeholder="Unesite Vaš mail" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Unesite Vašu lozinku" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Zapamti me</label>
              </span>
              <a href="#" class="forgot_pw">Zaboravili ste lozinku</a>
            </div>

            <button class="button">Prijavite se sada</button>

            <div class="login_signup">Nemate nalog? <a href="#" id="signup">Kreirajte nalog</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
         <!--  <form action="#">
            <h2>Registruj se</h2>

            <div class="input_box">
              <input type="email" placeholder="Unesite Vaš mail" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Kreirajte lozinku" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Potvrdite lozinku" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Registruj se</button>

            <div class="login_signup">Već imate nalog? <a href="#" id="login">Uloguj se</a></div>
          </form> -->

          <form action="register.php" method="POST" class="signup_form">
              <h2>Registracija</h2>
              <div class="input_box">
                  <input type="email" name="email" placeholder="Unesite Vaš email" required />
              </div>
              <div class="input_box">
                  <input type="password" name="password" placeholder="Unesite lozinku" required />
              </div>
              <div class="input_box">
                  <input type="password" name="confirm_password" placeholder="Potvrdite lozinku" required />
              </div>
              <button type="submit" class="button">Registruj se</button>
              <div class="login_signup">Već imate nalog? <a href="#" id="login">Uloguj se</a></div>

        </form>


        </div>
      </div>
    </section>

    <script src="../js/script.js"></script>
  </body>
</html>
