
<?php include_once('config.php'); ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Sign-In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }



      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .form-floating{
        padding-top: 2%;
      }

      img, h2 {
      display: inline-block;
      vertical-align: middle;
    }
    #form-header{
      margin-left: 26%;
    }


    
    </style>

    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary col-4" style="margin-left: 35%">
    


    
<main class="form-signin w-100 m-auto">
  <form method="POST" action="signin_logic.php">
    <div id="form-header"><img class="mb-4" src="img/logo.png" alt="" width="100" height="70">
    <h2 class="h3 mb-3 fw-normal">Sign In</h2></div>
    

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput"  name="surname">
      <label for="floatingInput">Surname</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingInput"  name="age">
      <label for="floatingInput">Date of Birth</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput"  name="sex">
      <label for="floatingInput">Sex</label>
    </div>


    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput"  name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput"  name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit" style="margin-top: 2%; background-color: #1abc9c; border-color: #1abc9c;" name="submit">Sign in</button>
    <p>Already have an account? <a href="login.php">Log-In here!</a></p>
    <p class="mt-5 mb-3 text-body-secondary">&copy;2023 RedHealth</p>
  </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>
