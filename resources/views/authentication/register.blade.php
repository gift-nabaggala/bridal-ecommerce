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

      
      <!-- Register Form -->
      <section class="signup-form">
        <div class="card">
          <h1>Sign Up</h1>
          <div class="input-group">
            <div class="username-input">
              <div class="input-box">
                <input
                  type="text"
                  id="username"
                  class="input"
                  placeholder=" "
                  maxlength="25"
                />
                <label for="username" class="input-label">Username</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="username_error"></p>
              </span>
            </div>
            <div class="email-input">
              <div class="input-box">
                <input type="text" id="email" class="input" placeholder=" " />
                <label for="email" class="input-label">Email</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="email_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="reg_password"
                  class="input"
                  placeholder=" "
                />
                <label for="reg_password" class="input-label">Password</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="reg_password_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="conreg_password"
                  class="input"
                  placeholder=" "
                />
                <label for="conreg_password" class="input-label"
                  >Confirm Password</label
                >
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="conreg_password_error"></p>
              </span>
            </div>
          </div>
          <div class="check-element">
            <input type="checkbox" name="reg-check" id="reg_check" />
            <label for="reg_check"
              >This account can only be used on this device.</label
            >
          </div>
          <button type="submit" id="signup_submit" class="btn" disabled>
            SIGN UP
          </button>
        </div>
        <div class="under-card">
          <p>Already have an account?</p>
          <button id="to_login">Login</button>
        </div>
      </section>
      </div>
      </body>
      </html>