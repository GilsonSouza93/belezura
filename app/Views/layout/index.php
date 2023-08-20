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
            --bs-body-bg-rgb: 33, 37, 41;
            --bs-primary-rgb: 13, 110, 253;
            --bd-accent-rgb: 255, 228, 132;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bd-pink-rgb: 214, 51, 132;
        }

        body {
            background-image: linear-gradient(180deg, rgba(var(--bs-body-bg-rgb), 0.01), rgba(var(--bs-body-bg-rgb), 1) 85%), radial-gradient(ellipse at top left, rgba(var(--bs-primary-rgb), 0.5), transparent 50%), radial-gradient(ellipse at top right, rgba(var(--bd-accent-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center right, rgba(var(--bd-violet-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center left, rgba(var(--bd-pink-rgb), 0.5), transparent 50%);

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .card {
            border-radius: var(--border-radius);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(33, 37, 41, 0.2);
        }

        .border {
            border-radius: var(--border-radius);
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

        .table tr {
            background-color: transparent;
        }

        select {
            background: rgba(255, 255, 255, 0.1) !important;
        }
    </style>
</head>

<body>
    <header>
        <nav class="m-3 d-flex flex-row">
            <img src="<?= base_url('assets/imgs/logo.png') ?>" alt="logo" class="mx-2" style="height: 60px;">

            <div class="d-flex flex-row align-items-center">
                <?php foreach ($navigation_bar_items as $item) : ?>
                    <?php if ($item['show_subitems']) : ?>
                        <div class="nav-item mx-3 subitems">
                            <a class="nav-link dropdown-toggle text-white" href="<?= $item['href'] ?>" data-bs-toggle="dropdown">
                                <?= $item['title'] ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark mt-4 px-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid <?= $item['color'] ?>;">
                                <?php foreach ($item['subitems'] as $subitem) : ?>

                                    <?php if (isset($subitem['subitems'])) : ?>
                                        <div class="subitems btn-group dropend ms-3">
                                            <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                                                <?= $subitem['title'] ?>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-dark ms-6" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(7px); border-radius: 15px; border: 2px solid <?= $item['color'] ?>;">
                                                <?php foreach ($subitem['subitems'] as $subsubitem) : ?>
                                                    <li><a class="dropdown-item text-white rounded my-1" href="<?= $subsubitem['href'] ?>"><?= $subsubitem['title'] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>

                                    <?php else : ?>
                                        <li><a class="dropdown-item text-white rounded" href="<?= $subitem['href'] ?>"><?= $subitem['title'] ?></a></li>
                                    <?php endif ?>

                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php else : ?>
                        <div class="nav-item mx-4">
                            <a class="nav-link text-white" href="<?= $item['href'] ?>"><?= $item['title'] ?></a>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </nav>
    </header>

    <div class="m-3">
        <?= $this->renderSection('content') ?>
    </div>

    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/js/bootstrap_5.3.bundle.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $('.subitems').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(200).slideUp();
        });

        const createToast = (borderColor, message) => {
            const div = document.createElement('div');
            div.classList.add('position-fixed', 'bottom-0', 'start-0', 'p-3');

            const toast = document.createElement('div');
            toast.classList.add('toast', 'card', 'text-white', 'p-1', 'fs-6', 'w-100', 'bg-transparent');
            toast.style.borderLeft = `3px solid ${borderColor}`;
            toast.style.backdropFilter = 'blur(7px)';

            const toastBody = document.createElement('div');
            toastBody.classList.add('toast-body', 'text-white');

            toastBody.innerText = message;

            toast.appendChild(toastBody);
            div.appendChild(toast);

            document.body.appendChild(div);
        }

        const showToast = (message, type) => {
            $('.toast').remove();

            const borderColor = type === 'success' ? '#00bf63' : type === 'error' ? '#ff4e50' : type === 'warning' ? '#ffbd59' : '#00aeef';
            createToast(borderColor, message);

            $('.toast').toast({
                animation: true,
                autohide: true,
                delay: 5000
            });

            $('.toast').toast('show');
        }

        const showLoading = () => {
            const div = document.createElement('div');
            div.classList.add('position-fixed', 'top-0', 'start-0', 'p-3', 'w-100', 'h-100', 'd-flex', 'justify-content-center', 'align-items-center', 'bg-transparent', 'fade');
            div.style.zIndex = '10';
            div.style.backdropFilter = 'blur(7px)';
            div.style.transition = 'opacity 0.5s ease-in-out';

            const spinner = document.createElement('div');
            spinner.classList.add('spinner-border', 'text-success');
            spinner.setAttribute('role', 'status');

            const span = document.createElement('span');
            span.classList.add('visually-hidden');
            span.innerText = 'Loading...';

            spinner.appendChild(span);
            div.appendChild(spinner);

            document.body.appendChild(div);

            setTimeout(() => {
                div.style.opacity = '1';
            }, 10);
        };

        const hideLoading = () => {
            const loadingDiv = document.querySelector('.fade');
            if (loadingDiv) {
                loadingDiv.style.opacity = '0';

                loadingDiv.addEventListener('transitionend', () => {
                    loadingDiv.remove();
                });
            }
        };
    </script>

    <?= $this->renderSection('script') ?>
</body>

</html>