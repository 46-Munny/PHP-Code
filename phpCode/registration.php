<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body>

    <div class="container">
        <dive class="formWraper">

            <!-- Left section of responsive registration form -->

            <div class="formDiv">
                <h2>Create Account</h2>
                <p class="text"> Sign Up with Social Media</p>

             <!-- Font Awesome Icons -->
             <div class="socialBtn">
                 <div class="facebook icon"><i class="fab fa-facebook-f"></i></div>
                 <div class="twitter icon"><i class="fab fa-twitter"></i></div>
                 <div class="instagram icon"><i class="fab fa-instagram"></i></i></div>
             </div>

                <!--Horizontal Line-->
                <hr>
                <div class="orDiv">Or</div>

                <p class="text">Sign Up with Email Address</p>
                <div class="formGroup">
                    <i class="far fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="formGroup">
                    <i class="far fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="formGroup">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>

                <div class="formGroup">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Confirm Password">
                </div>

                <div class="checkBox">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <span class="text">I Agree with Term & Conditions.</span>
                </div>
                <button class="btn">SIGN UP</button>
            </div>

            <!-- Right section of responsive registration form -->
            <div class="welcomeDiv">
                <h2>Welcome Back!</h2>
                <p class="text">Get in touch with us for our news letter and more updates.</p>
                <button class="btn2">SIGN IN</button>
            </div>

        </dive>
    </div>

</body>

</html>
