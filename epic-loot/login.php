<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="src/img/epic-loot-sm.svg">
</head>
<body>

<div class="container" id="main">
    <div class="sign-up">
        <form action="register.php" method="post">
            <h1>Register</h1>
            <div class="social-container">
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </div>
            <p>Create your account</p>
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button>Submit</button>
        </form>
    </div>
    <div class="sign-in">
        <form action="loginAction.php" method="post">
            <h1>Login</h1>
            <div class="social-container">
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </div>
            <p>Enter your account</p>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required autocomplete="current-password" id="myInput">
            <i class="fas fa-eye" id="togglePassword" style="cursor: pointer;"></i>
            <button>Submit</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your account.</p>
                <button id="login">Login</button>
            </div>
            <div class="overlay-right">
                <h1>New here?</h1>
                <p>Enter your personal details to sign up.</p>
                <button id="register">Register</button>
            </div>
        </div>
    </div>
</div>
<div class="error-message">
    <?php
    if(isset($_GET['login'])){
        if($_GET['login']=="failed"){
            echo "<div class='alert alert-danger'>
                    <button class='close-alert'>&times;</button>
                    <h4>Incorrect username or password!</h4>
                  </div>";
        }
    }

    if(isset($_GET['register'])){
        if($_GET['register']=="error"){
            echo "<div class='alert alert-danger'>
                    <button class='close-alert'>&times;</button>
                    <h4>Error!</h4>
                  </div>";
        }
    }

    if(isset($_GET['register'])){
        if($_GET['register']=="exists"){
            echo "<div class='alert alert-danger'>
                    <button class='close-alert'>&times;</button>
                    <h4>Username not available!</h4>
                  </div>";
        }
    }

    if(isset($_GET['register'])){
        if($_GET['register']=="success"){
            echo "<div class='alert alert-success'>
                    <button class='close-alert'>&times;</button>
                    <h4>Your account is now created and you can login.</h4>
                  </div>";
        }
    }
    ?>
</div>
<script type="text/javascript">
    const regButton = document.getElementById('register');
    const loginButton = document.getElementById('login');
    const main = document.getElementById('main');

    regButton.addEventListener('click', () => {
        main.classList.add("right-panel-active");
    });
    loginButton.addEventListener('click', () => {
        main.classList.remove("right-panel-active");
    });

    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('myInput');

    togglePassword.addEventListener('click', () => {
        // Toggle the type attribute
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        // Toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });

    const closeAlerts = document.querySelectorAll('.close-alert');

    closeAlerts.forEach((closeAlert) => {
        closeAlert.addEventListener('click', () => {
            closeAlert.parentNode.remove();
        });
    });
</script>
</body>
</html>