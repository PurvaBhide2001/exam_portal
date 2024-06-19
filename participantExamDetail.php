<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
    <title>Admin Dashboard</title>
    <?php include_once("./include-common-style.php") ?>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php
            include_once("./include-sidebar.php");
            ?>
            <div class="layout-page">
                <?php include_once("./include-top-nav.php") ?>

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="d-flex justify-content-end">
                        <nav aria-label="breadcrumb text-end">
                            <ol class="breadcrumb breadcrumb-style1">
                                <li class="breadcrumb-item">
                                    <a href="./index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="./list-Question Bank.php">Question Bank</a>
                                </li>
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row" id="studentInfo">

                    </div>

                    <div class=" mt-4" id="questionsAnswerSection">
                        <div class="card-body">
                            <h3>Exam Questions</h3>
                            <div class="mb-3">
                                <strong>Question 1:</strong> What is your name?
                            </div>
                            <div class="mb-3">
                                <strong>Question 2:</strong> What is your favorite color?
                            </div>
                        </div>

                    </div>

                    <?php include_once("./include-copy-right.php") ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
            <?php
            include_once("./include-delete-modal.php")
            ?>
            <?php include_once("./include-copy-right.php") ?>
            <div class="content-backdrop fade"></div>
        </div>
    </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <?php include_once("./include-common-scripts.php") ?>
    <script src="./libs/datatable/datatables.min.js"></script>
    <script src="assets/js/parseData.js"></script>
    <script src="./assets/js/api/all-api.js"></script>
    <script src="./assets/js/api/fetchApi.js"></script>
    <script src="./assets/js/filter/list-participants.js"></script>

    <script>
        detailParticipantEntry()
    </script>
</body>

</html>