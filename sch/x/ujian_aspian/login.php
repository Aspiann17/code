<?php
require "utils.php";
start();

if (is_set("login", true)) {
    header("location: index.php");
}

if (
    is_set("action", "login") &&
    is_set("username", "aspian") &&
    is_set("password", "wkwk")
) {
    $_SESSION += [
        "login" => true,
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "access" => "admin"
    ];

    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?=template("meta")?>
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" type="text" placeholder="Username" name="username" autocomplete="off" required />
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" type="password" placeholder="Password" name="password" required />
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="remember" type="checkbox" name="remember" value="true" />
                                                <label class="form-check-label" for="remember">Remember Me</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button class="btn btn-primary" name="action" value="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <?=template("footer")?>
            </div>
        </div>
        <?=template("js")?>
    </body>
</html>
