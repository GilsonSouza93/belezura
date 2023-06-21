<!doctype html>
<html lang="<?= esc($lang) ?>" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= esc($tittle) ?>
    </title>
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
            background: rgba(0, 0, 0, 0.5);
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

        .form-group {
            background: transparent;
        }

        input {
            border: 1px solid #fff;
            background: transparent;
            border: none;
            border-bottom: 1px solid #fff;
            width: 100%;
            text-indent: 15px;
            margin: 0.2rem;
        }

        form > * {
            margin-bottom: 3rem;
        }


        input::placeholder {
            color: #fff;
            font-size: 1.2rem;
            margin: 0.2rem;
        }
    </style>
</head>

<body>
    <div class="row d-flex justify-content-center" style="height: 100vh">
        <div class="col-md-4">
            <form id="form" class="d-flex flex-column justify-content-center" style="margin-top: 40%;">
                <div class="d-flex justify-content-center">
                    <img src="<?= base_url('assets/imgs/logo.png') ?>" alt="logo" style="height: 110px;">
                </div>

                <input type="email" id="email" required placeholder="Email" >

                <input type="password" id="password" required placeholder="Senha">

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-light btn-lg px-4">Entrar</button>
                </div>
            </form>
        </div>
    </div>


    <script src="<?= base_url('assets/js/bootstrap_5.3.bundle.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault();

                var email = $('#email').val();
                var password = $('#password').val();

                $.ajax({
                    url: '<?= base_url('login') ?>',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(result) {
                        if (result.status == '200') {
                            window.location.href = '<?= base_url('dashboard') ?>';
                        } else {
                            alert(result.messages);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>