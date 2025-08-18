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
<!-- Change Password Form -->
      <section class="change-password-form">
        <div class="card" id="change_password_card">
          <h1>Change Password</h1>
          <div class="input-group">
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="current_password"
                  class="input"
                  placeholder=" "
                />
                <label for="current_password" class="input-label"
                  >Current Password</label
                >
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="current_password_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="change_password"
                  class="input"
                  placeholder=" "
                />
                <label for="change_password" class="input-label"
                  >New Password</label
                >
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="change_password_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="conchange_password"
                  class="input"
                  placeholder=" "
                />
                <label for="conchange_password" class="input-label"
                  >Confirm New Password</label
                >
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="conchange_password_error"></p>
              </span>
            </div>
          </div>
          <div class="btn-group">
            <button type="submit" id="change_submit" class="btn">SUBMIT</button>
            <button type="submit" id="change_cancel" class="cancel-btn btn">
              CANCEL
            </button>
          </div>
        </div>
      </section>
      </div>
      </body>
      </html>
      