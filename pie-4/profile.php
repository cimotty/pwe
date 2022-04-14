<?php
session_start();
require '_includes/db.php';

if (isset($_SESSION['is_login'])) :
?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>Dasbor UKM XYZ</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
        </style>
    </head>

    <body>
        <div class="container py-3">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                    <a href="dashboard.php" class="d-flex align-items-center text-dark text-decoration-none">
                        <img src="images/himatif_6000_small.png" alt="Logo" class="img-fluid" style="width: 10%;">
                        <span class="fs-4">HIMATIF UNIB</span>
                        <a href="#" class="d-flex">
                            <img src="./images/profile.png" alt="Profile" class="img-fluid rounded-circle" style="width: 10%; margin-left: auto; margin-right: 20px;">
                        </a>
                    </a>

                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <a class="py-2 text-dark text-decoration-none" href="logout.php">Logout</a>
                    </nav>
                </div>

                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-4">
                            <img src="images/profile.png" alt="Profile" style="width: 100%;" class="border rounded border-2 border-dark">
                        </div>
                        <div class="col-4">
                            <form action="update-profile.php" method="post">
                                <label for="nama">Nama</label>
                                <br>
                                <input type="text" name="nama" value="<?= $_SESSION['nama']; ?>">
                                <br>
                                <fieldset disabled="disabled">
                                    <label for="NPM">NPM</label>
                                    <br>
                                    <input type="text" name="NPM" value="G1A020063" placeholder="NPM [wip-feature]">
                                    <br>
                                    <label for="email">Email</label>
                                    <br>
                                    <input type="text" name="email" value="rizky63@gmail.com" placeholder="Email [wip-feature]">
                                    <br>
                                    <label for="password">Password</label>
                                    <br>
                                    <input type="password" name="password" value="login" placeholder="Password [wip-feature]">
                                    <br>
                                </fieldset>
                                <br>
                                <button type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </div>

    </body>

    </html>

<?php else : ?>
    <!-- karena belum login, arahkan ke halaman login -->
    <?php header('Location: login.php'); ?>
<?php endif; ?>