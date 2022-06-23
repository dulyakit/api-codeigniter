<!DOCTYPE html>
<html lang="en">
<?php
$psermis_admin = false;
$psermis_user = false;

if (count($_SESSION) > 1) {
    if ($_SESSION['user_info']->permission_type == 'admin') {
        $psermis_admin = true;
    } else {
    }
    if ($_SESSION['user_info']->permission_type == 'user') {
        $psermis_user = true;
    } else {
    }
}

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <script>
        var base_url = '<?php echo base_url(); ?>'
    </script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'theme/startbootstrap-agency-gh-pages/css'; ?>/styles.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="<?php echo base_url() . 'theme/startbootstrap-agency-gh-pages'; ?>/assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>

                    <?php if ($psermis_admin) { ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'admin' ?>">ADMIN</a></li>
                    <?php } ?>


                    <?php if ($psermis_admin || $psermis_user) { ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'login/logout' ?>">LOGOUT</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() . 'login' ?>">LOGIN</a></li>
                    <?php } ?>



                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <!-- <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
            </div>
        </div>
    </header>
    <script src="<?php echo base_url() . 'theme/startbootstrap-agency-gh-pages/js' ?>/scripts.js"></script>