<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Maintenance";
    include 'partials/title-meta.php'; ?>

     <?php include 'partials/head-css.php'; ?>
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="mb-4">
                        <img src="assets/images/svg/under_maintenance.png" alt="" class="img-fluid">
                    </div>
                    <div class="text-center">
                        <h2 class="mb-3 text-muted">Sorry we are under maintenance</h2>
                        <p class="text-dark-emphasis fs-15 mb-1">Our website currently undergoing maintenance.</p>
                        <p class="text-dark-emphasis fs-15 mb-4">We should be a back shotly. thankyou for patience.</p>
                    </div>

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark-emphasis">
            <script>document.write(new Date().getFullYear())</script> © Velonic - Theme by Techzaa
        </span>
    </footer>
    <?php include 'partials/footer-scripts.php'; ?>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>