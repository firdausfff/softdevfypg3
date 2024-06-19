<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="/assets/webfonts/uicons-brands.css" rel="stylesheet">

    <title>Account</title>
</head>

<body>

    <section class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">Don't have an account?</h2>
                    <p class="user_unregistered-text">Create now!</p>
                    <button class="user_unregistered-signup" id="signup-button">Sign up</button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">Already have a account!</h2>
                    <p class="user_registered-text">Get started..</p>
                    <button class="user_registered-login" id="login-button">Login</button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Login</h2>
                    <form action ="include/login.inc.php" method="post" class="forms_form">
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="email" id= "email" name="email" value="" placeholder="Email" class="forms_field-input" required autofocus />
                            </div>
                            <div class="forms_field">
                                <input type="password" id= "password" name="pwd" value="" placeholder="Password" class="forms_field-input" required />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <a href="resetpassword.html"><button type="button" class="forms_buttons-forgot">Forgot password?</button></a>
                            <input type="submit" value="Log In" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Sign Up</h2>
                    <form action ="include/signup.inc.php" method="post" class="forms_form">
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="text" name="name" placeholder="Full Name" class="forms_field-input" required />
                            </div>
                            <div class="forms_field">
                                <input type="email" name="email" placeholder="Email" class="forms_field-input" required />
                            </div>
                            <div class="forms_field">
                                <input type="password" name="pwd"  placeholder="Password" class="forms_field-input" required />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" value="Sign up" class="forms_buttons-action">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>


    <script src="scripts/account.js"></script> 

</body>

</html>