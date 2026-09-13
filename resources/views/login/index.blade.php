<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>

        <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">

                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                            Login
                                        </h3>
                                    </div>

                                    <div class="card-body">

                                        <form onsubmit="return loginCheck()">

                                            <!-- Email -->
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="inputEmail"
                                                    type="email"
                                                    placeholder="name@example.com"
                                                />
                                                <label for="inputEmail">
                                                    Email address
                                                </label>
                                            </div>

                                            <!-- Password -->
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="inputPassword"
                                                    type="password"
                                                    placeholder="Password"
                                                />
                                                <label for="inputPassword">
                                                    Password
                                                </label>
                                            </div>

                                            <!-- Remember Password -->
                                            <div class="form-check mb-3">
                                                <input
                                                    class="form-check-input"
                                                    id="inputRememberPassword"
                                                    type="checkbox"
                                                    value=""
                                                />

                                                <label
                                                    class="form-check-label"
                                                    for="inputRememberPassword"
                                                >
                                                    Remember Password
                                                </label>
                                            </div>

                                            <!-- Button -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <a class="small" href="#">
                                                    Forgot Password?
                                                </a>

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    Login
                                                </button>

                                            </div>

                                        </form>

                                    </div>

                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            <a href="#">
                                                Need an account? Sign up!
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <!-- Footer -->
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">

                        <div class="d-flex align-items-center justify-content-between small">

                            <div class="text-muted">
                                Copyright &copy; Your Website 2023
                            </div>

                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>

                        </div>

                    </div>
                </footer>
            </div>
        </div>

        <!-- Bootstrap -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous">
        </script>

        <!-- Login Validation -->
        <script>
            function loginCheck() {

                let email = document.getElementById("inputEmail").value;
                let password = document.getElementById("inputPassword").value;

                // Email dan password wajib diisi
                if (email === "" || password === "") {
                    alert("Email dan password wajib diisi!");
                    return false;
                }

                // Data login admin
                let adminEmail = "niken@admin.ac.id";
                let adminPassword = "nikencantik";

                // Cek email dan password
                if (email === adminEmail && password === adminPassword) {

                    // Login berhasil
                    window.location.href = "/admin";
                    return false;

                } else {

                    // Login gagal
                    alert("Email atau password salah!");
                    return false;
                }
            }
        </script>

    </body>
</html>