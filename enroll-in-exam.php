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
                    <div class="card" id="examDetail">
                        <div class="card-body">
                            <h3>Enroll in Exam</h3>
                            <!-- Dummy exam details -->
                            <p><strong>Exam Title:</strong> Dummy Exam</p>
                            <p><strong>Date:</strong> January 1, 2024</p>
                            <p><strong>Duration:</strong> 2 hours</p>

                            <!-- Enroll button -->
                            <form id="enrollForm" action="enroll-process.php" method="post">

                                <button type="button" id="enrollButton" class="btn btn-primary" onclick="showQuestions()">Enroll</button>
                            </form>
                        </div>
                    </div>

                    <!-- Display questions (initially hidden) -->
                    <div class="card mt-4" id="questionsSection" style="display: none;">
                        <div class="card-body">
                            <h3>Exam Questions</h3>
                            <div class="mb-3">
                                <strong>Question 1:</strong> What is your name?
                            </div>
                            <div class="mb-3">
                                <strong>Question 2:</strong> What is your favorite color?
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" id="submitExam">Submit</button>
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
    <script src="./libs/ckeditor/ekeditor.js"></script>
    <script src="./assets/js/api/all-api.js"></script>
    <script src="./assets/js/api/fetchApi.js"></script>
    <!-- <script src="./assets/js/filter/detailExam.js"></script> -->
    <script src="./assets/js/filter/list-questionbank.js"></script>

    <script>
        const params = new URLSearchParams(window.location.search);
        const teacher_id = params.get('id');
        const exam_title = params.get('exam_title');

        // Log the data
        console.log('Teacher ID:', teacher_id);
        console.log('Exam Title:', exam_title);

        // Call the detailExam function with teacher_id and exam_title
        detailenrollInExam(teacher_id, exam_title)
            .then((apiResponse) => {
                console.log("API Response outside the function:===", apiResponse);
                applyToQuestionBank(apiResponse);
            })
            .catch((error) => {
                console.error("Error outside the function:", error);
            });
    </script>


    <script>
        function showQuestions() {
            document.getElementById('questionsSection').style.display = 'block';
            document.getElementById('enrollButton').disabled = true;
        }
    </script>
    <script>

    </script>
</body>

</html>