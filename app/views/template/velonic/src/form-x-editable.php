<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "X-Editable";
    include 'partials/title-meta.php'; ?>

    <!-- Plugins css -->
    <link href="assets/css/vendor/bootstrap-editable.css" rel="stylesheet" type="text/css" />

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
                    $sub_title = "Forms";
                    $page_title = "X-Editable";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Inline Examples</h4>

                                    <table class="table table-bordered table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Simple text field</td>
                                                <td style="width: 65%;"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                                            </tr>
                                            <tr>
                                                <td>Empty text field, required</td>
                                                <td>
                                                    <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Select, local array, custom display</td>
                                                <td>
                                                    <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Select, remote array, no buttons</td>
                                                <td><a href="#" id="inline-group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
                                            </tr>
                                            <tr>
                                                <td>Select, error while loading</td>
                                                <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                                            </tr>

                                            <tr>
                                                <td>Combodate (date)</td>
                                                <td>
                                                    <a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Combodate (datetime)</td>
                                                <td>
                                                    <a href="#" id="inline-event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time"></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                                                <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                                            </tr>

                                            <tr>
                                                <td>Checklist</td>
                                                <td>
                                                    <a href="#" id="inline-fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

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


    <script src="assets/js/vendor/moment.min.js"></script>
    <script src="assets/js/vendor/bootstrap-editable.min.js"></script>

    <!-- Init js-->
    <script src="assets/js/pages/form-xeditable.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>