<?php require "core/init.php" ?>
<!DOCTYPE html>
<html lang="en">

<!-- https://github.com/nauvalazhar/bootstrap-5-login-page -->

<?php dump() ?>

<head>
    <?= template("chead") ?>
    <meta name="author" content="Muhamad Nauval Azhar">
    <title>Login - Penggajian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 mb-5">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

                    <div class="text-center my-5">
                        <img src="assets/img/rpl.png" alt="logo" width="130">
                    </div>

                    <div class="card shadow-lg">
                        <div class="card-body p-5 pb-4">

                            <h1 class="fs-4 card-title fw-bold mb-4 text-center">Login</h1>

                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required autofocus>
                                    <div class="invalid-feedback">
                                        Username is empty
                                    </div>
                                </div>
                                
                                <!-- <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div> -->

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                        <!-- <a href="forgot.html" class="float-end">
                                            Forgot Password?
                                        </a> -->
                                    </div>

                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary ms-auto" name="action" value="login">
                                        Login
                                    </button>

                                </div>

                            </form>
                        </div>

                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Don't have an account? <a href="register.php" class="text-dark">Create One</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= template("footer") ?>
    <?= template("js") ?>
</body>

</html>