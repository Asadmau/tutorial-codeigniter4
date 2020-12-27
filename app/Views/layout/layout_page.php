<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />

    <!-- STYLES -->
    <!-- bosstrapp css -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>
        <div class="menu">
            <ul>
                <li class="logo"><a href="<?= base_url('/') ?>">CodingCuk!</a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
                <li class="menu-item hidden"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('about') ?>">About Us</a>
                </li>
                <li class="menu-item hidden"><a href="<?= base_url('contact') ?>">Contact</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('login') ?>" target="_blank">Login</a>
                </li>
            </ul>
        </div>

        <div class="heroe">

            <h1>Hii !! <?= basename($name) ?> Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

            <h2>The small framework with powerful features</h2>

        </div>

    </header>

    <!-- CONTENT -->
    <?= $this->renderSection('content') ?>


    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>
        <div class="environment">

            <p>Page rendered in {elapsed_time} seconds</p>

            <p>Environment: <?= ENVIRONMENT ?></p>

        </div>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
                open source licence.</p>

        </div>

    </footer>

    <!-- SCRIPTS js-->
    <script src="<?= base_url('js/script.js') ?>"></script>

</body>

</html>