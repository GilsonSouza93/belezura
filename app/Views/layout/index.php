<!doctype html>
<html lang="<?= esc($lang) ?>" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($tittle) ?></title>
    <link href="<?= base_url('assets/css/bootstrap_5.3.min.css') ?>" rel="stylesheet">
    <style>
        :root {
            --border-radius: 15px;
            --bs-body-bg-rgb: 0, 0, 0;
            --card-background-color-primary: #212529;
            --card-background-color-secondary: #1E1E1E;

            --bs-body-bg-rgb: 33,37,41;
            --bs-primary-rgb: 13,110,253;
            --bd-accent-rgb: 255,228,132;
            --bd-violet-rgb: 112.520718,44.062154,249.437846;
            --bd-pink-rgb: 214,51,132;
        }

        body {
            background-image: linear-gradient(180deg, rgba(var(--bs-body-bg-rgb), 0.01), rgba(var(--bs-body-bg-rgb), 1) 85%),radial-gradient(ellipse at top left, rgba(var(--bs-primary-rgb), 0.5), transparent 50%),radial-gradient(ellipse at top right, rgba(var(--bd-accent-rgb), 0.5), transparent 50%),radial-gradient(ellipse at center right, rgba(var(--bd-violet-rgb), 0.5), transparent 50%),radial-gradient(ellipse at center left, rgba(var(--bd-pink-rgb), 0.5), transparent 50%);

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .card {
            border-radius: var(--border-radius);
            background: rgba(0, 0, 0, 0.5) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(33, 37, 41, 0.2);
        }

        .card-2 {
            border-radius: var(--border-radius);
            background: rgba(0, 0, 0, 0.5) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(33, 37, 41, 0.2);
        }

        .gradient-1 {
            background: linear-gradient(to right, #ffbd59, #ff914d);
            margin: 0 5px;
            border-radius: var(--border-radius);
        }

        .gradient-2 {
            background: linear-gradient(to right, #00bf63, #7ed957);
            margin: 0 5px;
            border-radius: var(--border-radius);
        }

        .gradient-3 {
            background: linear-gradient(to right, #ff4e50, #f9d423);
            margin: 0 5px;
            border-radius: var(--border-radius);
        }

        .gradient-4 {
            background: linear-gradient(to right, #00aeef, #5271ff);
            margin: 0 5px;
            border-radius: var(--border-radius);
        }

    </style>
</head>

<body>
    <header>
        <nav class="card m-2 d-flex flex-row">

            <img src="<?= base_url('assets/imgs/logo.png') ?>" alt="logo" class="mx-2" style="height: 60px;">

            <div class="d-flex align-items-center">
                <?php foreach ($navigation_bar_items as $item): ?>
                    <?php if ($item['show_subitems']): ?>
                        <div class="nav-item mx-4 dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="<?= $item['href'] ?>" data-bs-toggle="dropdown">
                                <?= $item['title'] ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark mt-4 px-4" style="background: rgba(0,0,0, 0.45); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid <?=$item['color'] ?>;">
                                <?php foreach ($item['subitems'] as $subitem): ?>
                                <li><a class="dropdown-item text-white rounded my-1" href="<?= $subitem['href'] ?>"><?= $subitem['title'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div class="nav-item mx-4">
                            <a class="nav-link text-white" href="<?= $item['href'] ?>"><?= $item['title'] ?></a>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </nav>
    </header>

    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('assets/js/bootstrap_5.3.bundle.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $('.dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(200).slideUp();

        });
    </script>

    <?= $this->renderSection('script') ?>
</body>

</html>