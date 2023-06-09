<!doctype html>
<html lang="<?= esc($lang) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($tittle) ?></title>
    <link href="<?= base_url('assets/css/bootstrap_5.3.min.css') ?>" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #0d1117;
        }
    </style>
</head>

<body>
    <header>
        <nav class="card m-2 bg-black d-flex flex-row">

            <img src="<?= base_url('assets/imgs/logo.png') ?>" alt="logo" style="height: 70px;">

            <div class="d-flex align-items-center">
                <?php foreach ($navigation_bar_items as $item): ?>
                    <?php if ($item['show_subitems']): ?>
                        <div class="nav-item mx-4 dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="<?= $item['href'] ?>" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $item['title'] ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark mt-2" aria-labelledby="navbarDarkDropdownMenuLink" style="background: rgba(0,0,0, 0.7); backdrop-filter: blur(5px); border-radius: 10px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); border: 2px solid <?= $item['color'] ?>;">
                                <?php foreach ($item['subitems'] as $subitem): ?>
                                    <li><a class="dropdown-item text-white" href="<?= $subitem['href'] ?>"><?= $subitem['title'] ?></a></li>
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
        //hover a dropdown show

        $('.dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(200).slideUp();

        });
    </script>
</body>

</html>