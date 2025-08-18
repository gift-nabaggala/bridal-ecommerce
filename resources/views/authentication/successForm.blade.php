<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Registration Form</title>
    <link rel="icon" type="image/icon" href="img/favicon.svg" />
    <link rel="stylesheet" href="{{ url('css/registration.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container">
      <!-- Navbar -->
      <nav>
        <h1></h1>
        <div class="link-group">
          <a id="change_theme"><i class="ri-sun-fill"></i></a>
          <a>
            <div class="logo">
            <img src="{{ url('images/bridal logo.jpeg') }}" alt="Logo" />
            <h2>JML BRIDALS</h2>
          </div>
          </a>
        </div>
      </nav>

    

      <!-- Success Form -->
      <section class="success-form">
        <div class="card" id="success_card">
          <h1 id="success_text">Success text</h1>
          <button type="submit" id="success_continue" class="btn">
            CONTINUE
          </button>
        </div>
      </section>
    </div>

    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>
