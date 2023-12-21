<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>login/css/main.css">
    <!--===============================================================================================-->
</head>


<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url() ?>login/images/bg-01.jpg');">
            <div class="wrap-login100">

                <form class="login100-form validate-form" method="post" action="<?= base_url('auth/registration'); ?>">
                    <div class="login100-form-logo mb-4">
                        <img style="max-width: 130px;" class=" align-items-center justify-content-center mt-3" src="<?= base_url('assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png'); ?>">
                    </div>

                    <span class="login100-form-title p-b-34 p-t-27">
                        DESA KUALA DUA KABUPATEN KUBU RAYA
                    </span>

                    <div class="wrap-input100">
                        <input class="input100" type="text" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                        <span class=" focus-input100" data-placeholder="&#xf207;"></span>
                        <?= form_error('name', '<medium class="text-warning">', '</medium>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <span class="focus-input100" data-placeholder="&#xf2c3;"></span>
                        <?= form_error('email', '<medium class="text-warning">', '</medium>'); ?>
                    </div>


                    <div class="wrap-input100">
                        <input class="input100" type="password" id="password1" name="password1" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <?= form_error('password1', '<medium class="text-warning">', '</medium>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" id="password2" name="password2" placeholder="Konfirmasi Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <?= form_error('password2', '<medium class="text-warning">', '</medium>'); ?>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Daftar Akun
                        </button>
                    </div>

                    <div class="text-center p-t-70">
                        <a class="txt1" href="<?= base_url('auth'); ?>">
                            Login!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id=" dropDownSelect1">
    </div>

    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>login/js/main.js"></script>

</body>

</html>