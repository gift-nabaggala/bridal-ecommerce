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
          <a
            id="github"
            href="https://github.com/parunchxi/JavaScript-Login-Registration-Form"
            ><i class="ri-github-fill"></i
          ></a>
        </div>
      </nav>

      <!-- Login Form -->
      <section class="login-form">
        <div class="card">
          <h1>Login</h1>
          <div class="input-group">
            <div class="username-email-input">
              <div class="input-box">
                <input
                  type="text"
                  id="username_email"
                  class="input"
                  placeholder=" "
                />
                <label for="username_email" class="input-label"
                  >Username or Email</label
                >
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="username_email_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="password"
                  class="input"
                  placeholder=" "
                />
                <label for="password" class="input-label">Password</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="password_error"></p>
              </span>
            </div>
          </div>
          <div class="check-element">
            <input type="checkbox" name="remember-check" id="remember_check" />
            <label for="remember_check">Remember me</label>
          </div>
          <button type="submit" id="login_submit" class="btn">LOGIN</button>
        </div>
        <div class="under-card">
          <p>Don't have an account?</p>
          <button id="to_signup">Create</button>
        </div>
      </section>
      </div>
      </body>
      </html>