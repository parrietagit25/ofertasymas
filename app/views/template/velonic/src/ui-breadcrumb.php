<?php include 'partials/main.php'; ?>

    <head>
        <?php
    $title = "Breadcrumb";
    include 'partials/title-meta.php'; ?>

         <?php include 'partials/head-css.php'; ?>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <?php include 'partials/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                         <?php
                    $sub_title = "Base UI";
                    $page_title = "Breadcrumb";
    include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-12">  
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title">Example</h4>
                                        <p class="text-muted mb-0">
                                            Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.
                                            Please read the official <a target="_blank" href="https://getbootstrap.com/docs/5.3/components/breadcrumb/">Bootstrap</a> documentation for more options.
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-0 py-2">
                                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                                            </ol>
                                        </nav>
                                            
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-0 py-2">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                            </ol>
                                        </nav>
                                            
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-0 py-2">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                                            </ol>
                                        </nav>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-12">  
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title">With Icons</h4>
                                        <p class="text-muted mb-0">
                                            Optionally you can also specify the icon with your breadcrumb item.
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-1 p-2 bg-light-subtle">
                                                <li class="breadcrumb-item active" aria-current="page"><i class="ri-home-4-line me-1"></i>Home</li>
                                            </ol>
                                        </nav>
                                            
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-1 p-2 bg-light-subtle">
                                                <li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line"></i> Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                            </ol>
                                        </nav>
                                            
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-0 p-2 bg-light-subtle">
                                                <li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line"></i> Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                                            </ol>
                                        </nav>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                        </div> <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include 'partials/footer.php'; ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <?php include 'partials/right-sidebar.php'; ?>

        <?php include 'partials/footer-scripts.php'; ?>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html>
