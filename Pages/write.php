<?php
session_start();
if(isset($_SESSION['error'])){
    $erro = $_SESSION['error'];
}
$db = 'localhost';
$user = 'root';
$password = '';
$name = 'write';

$conn = mysqli_connect($db, $user, $password, $name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Write_</title>

    <script src="https://kit.fontawesome.com/2fc4d10b95.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../StyleSheets/write.css">
    <link rel="manifest" href="../manifest.webmanifest">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            if ($('#signin_id').css('opacity') == 1) $('#signin_id').css('opacity', 0);
            if ($('#signup_id').css('opacity') == 0) $('#signup_id').css('opacity', 1);
            if ($('#forgotPass_id').css('opacity') == 1) $('#forgotPass_id').css('opacity', 0);
            if ($('#signup_id').css('z-index') == -1) $('#signup_id').css('z-index', 1);
            if ($('#signin_id').css('z-index') == 1) $('#signin_id').css('z-index', -1);
            if ($('#forgotPass_id').css('z-index') == 1) $('#forgotPass_id').css('z-index', -1);
        }

        function myFunction2() {
            if ($('#signin_id').css('opacity') == 0) $('#signin_id').css('opacity', 1);
            if ($('#signup_id').css('opacity') == 1) $('#signup_id').css('opacity', 0);
            if ($('#forgotPass_id').css('opacity') == 1) $('#forgotPass_id').css('opacity', 0);
            if ($('#signup_id').css('z-index') == 1) $('#signup_id').css('z-index', -1);
            if ($('#signin_id').css('z-index') == -1) $('#signin_id').css('z-index', 1);
            if ($('#forgotPass_id').css('z-index') == 1) $('#forgotPass_id').css('z-index', -1);
        }

        function myFunction3() {
            if ($('#signin_id').css('opacity') == 1) $('#signin_id').css('opacity', 0);
            if ($('#forgotPass_id').css('opacity') == 0) $('#forgotPass_id').css('opacity', 1);
            if ($('#signin_id').css('z-index') == 1) $('#signin_id').css('z-index', -1);
            if ($('#forgotPass_id').css('z-index') == -1) $('#forgotPass_id').css('z-index', 1);
        }
    </script>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="title">
                    <h1>Write_</h1>
                </div>
                <div class="white-line"></div>
            </div>
            <div class="swiper-slide">
                <div class="hide" id="errors">
                    <p class="p_error"><?php echo $_SESSION['error'];?></p>
                </div>
                <div class="all" id="signin_id">
                    <div class="sign-ops">
                        <button class="signin-btn" style="opacity: 1;">Sign In</button>
                        <button class="signup-btn" onclick="myFunction()" style="opacity: 0.5;">Sign Up</button>
                    </div>
                    <div class="login-mainContent">
                        <div class="inputs">
                            <input class="input-email" type="text" placeholder="Email" />
                            <input class="input-pass" type="password" placeholder="Password" />
                        </div>
                        <div class="separations">
                            <div class="sp1"></div>
                            <p class="sp-text">or</p>
                            <div class="sp2"></div>
                        </div>
                        <div class="email">
                            <div class="signin-email">
                                <img class="email-icon" src="./img/gmail16x16.png" alt="">
                                <button class="email-text">Sign in with email</button>
                            </div>
                        </div>
                        <a href="documents.php">
                            <div class="sign-inf">
                                <button class="signinf-btn">Sign In</button>
                            </div>
                        </a>
                        <div class="forgot-p">
                            <button class="forgot-pass" onclick="myFunction3()">Forgot Password?</button>
                        </div>
                        <div class="black-line"></div>
                    </div>
                </div>
                <div class="all2" id="signup_id">
                    <div class="sign-ops">
                        <button class="signin-btn" onclick="myFunction2()" style="opacity: 0.5;">Sign In</button>
                        <button class="signup-btn" style="opacity: 1;">Sign Up</button>

                    </div>
                    <form action="registration.php" method="POST">
                        <div class="regist-mainContent">
                            <div class="inputs">
                                <input class="input-username" type="text" placeholder="First Name" name="firstname" />
                                <input class="input-email" type="text" placeholder="Email" name="email" />
                                <input class="input-pass" type="password" placeholder="Password" name="pass" />
                            </div>
                            <div class="sign-inf">
                                <button type="submit" name="submit" class="signinf-btn">Sign Up</button>
                            </div>
                            <div class="forgot-p">
                                <a class="forgot-pass" onclick="myFunction2()">Already have an account?</a>
                            </div>
                            <div class="black-line"></div>
                        </div>
                    </form>
                </div>
                <div class="all3" id="forgotPass_id">
                    <div class="sign-ops">
                        <form action="documents.php" method="POST">
                            <button class="signin-btn" onclick="myFunction2()" style="opacity: 0.5;">Sign
                                In</button>
                        </form>
                        <button class="signup-btn" style="opacity: 0.5;" onclick="myFunction()">Sign Up</button>
                    </div>
                    <div class="regist-mainContent">
                        <h2 class="h2-recoverPass">Password Recovery</h2>
                        <div class="inputs">
                            <input class="input-email" type="text" placeholder="Email" />
                        </div>
                        <div class="sign-inf">
                            <button class="signinf-btn">Recover Password</button>
                        </div>
                        <div class="forgot-p">
                            <a class="forgot-pass" onclick="myFunction2()">Cancel</a>
                        </div>
                        <div class="black-line"></div>
                    </div>
                </div>

            </div>
            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    direction: "vertical",
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
            </script>

            <?php 
                $fullUrl = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if (strpos($fullUrl, 'show=signup') == true) {
                    ?>
            <style>
                #signup_id {
                    opacity: 1;
                    z-index: 999;
                }

                #signin_id {
                    opacity: 0;
                    z-index: -1;
                }
            </style>
            <?php
                }
            ?>

            <?php 
                 if (strpos($fullUrl, 'erro=') == true && isset($_SESSION['error'])) {
                     ?>
                        <script>
                            document.getElementById('errors').classList.remove('hide');
                            setTimeout( () => {
                                document.getElementById('errors').classList.add('hide');
                            }, 3000);
                        </script>
                    <?php 
                }
            ?>
            <script src="../index.js" type="module"></script>
</body>

</html>