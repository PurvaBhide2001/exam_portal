<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin dashboard</title>

    <meta name="description" content="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include_once("./include-common-style.php") ?>
    <link rel="stylesheet" href="./libs/datatable/dataTables.bootstrap5.min.css">
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php
            include_once("./include-sidebar.php");
            ?>

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <?php include_once("./include-top-nav.php") ?>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

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
                        <div class="card">
                            <div class="card-body">
                                <div id="alert-div" class="mb-3 col-md-8 mx-auto  d-none"></div>

                                <form action="" id="questionBankForm">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto mb-3">
                                            <label for="institute_id" class="form-label ">Question bank title<sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control" name="title" id="title">
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="question-holder">

                                        <div class="border p-2 rounded question-temp mb-2">
                                            <div class="row">
                                                <div class="col-12  d-flex justify-content-end">

                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)">

                                                            <i onclick="deleteQuestionTemp(this)" style="font-size: 1.2rem;" class='bx bx-trash-alt text-danger '></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10 row pe-0 me-0 justify-content-end">

                                                    <div class="col-4 pe-0 me-0 ms-1 mb-2">

                                                        <label for="institute_id" class="form-label ">Question type</label>
                                                        <select onchange="ChangeQuestionType(this)" name="question_type" class="form-control question-type">
                                                            <option value="mcq">Multiple choice question </option>
                                                            <option value="text">Text </option>
                                                            <option value="text">Long text </option>
                                                            <option value="dropdown">Dropdown</option>
                                                            <option value="file">File </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex">

                                                    <div class="col-10">
                                                        <div class="editor-wrap">
                                                            <div id="toolbar-container"></div>
                                                            <textarea id="editor" class="form-control" rows="4" placeholder="Add question here"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="img-icon mt-1 ms-1 d-flex align-items-center ">
                                                        <a href="javascript:void(0)">

                                                            <i style="font-size: 1.8rem;" class='bx bxs-image-alt text-primary'></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="option-disc">
                                                <div class="ans-field d-flex">
                                                    <div class="form-check col-10 mt-3 d-flex align-items-center">
                                                        <input name="default-checkbox-1" class="form-check-input" type="checkbox" value="" id="que" readonly>
                                                        <!-- <input name="default-radio-1" class="form-check-input" type="radio" value="" id="que" readonly> -->
                                                        <input type="text" class="form-control mx-2" placeholder="Enter your answer here">
                                                    </div>
                                                    <div class="mt-1 d-flex align-items-center ">

                                                        <i style="font-size: 1.8rem;" class='bx bxs-image-alt text-primary'></i>
                                                    </div>
                                                    <div class="answer-acn-btns d-flex align-items-center">
                                                        <a href="javascript:void(0)" onclick="addAnswerOption(this)" class=" mx-2 text-secondary"> <i style="font-size:1.5rem" class='bx bxs-plus-circle'></i> </a>
                                                        <a href="javascript:void(0)" onclick="removeAnswerOption(this)" class=" mx-2 text-secondary"> <i style="font-size:1.5rem" class='bx bx-minus-circle'></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-btns mx-auto text-center mt-5">
                                        <a href="javascript:void(0)" onclick="addQuestionTemp()" class="btn btn-primary">Add Question</a>
                                    </div>
                                    <div class="top-btns mx-auto text-center mt-5">
                                        <!-- <button onclick="submit()" type="submit" class="btn btn-primary">Submit</button> -->
                                        <a href="javascript:void(0)" onclick="submitQuestionBank()" class="btn btn-primary">Submit Question Bank</a>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <?php
                    include_once("./include-delete-modal.php")
                    ?>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include_once("./include-copy-right.php") ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <?php include_once("./include-common-scripts.php") ?>
    <script src="./libs/datatable/datatables.min.js"></script>
    <script src="assets/js/parseData.js"></script>
    <script src="./libs/ckeditor/ekeditor.js"></script>
    <script src="./assets/js/filter/create-question-bank.js"></script>
    <script>
        let editorContentValues = [];

        // Add event listener for changes
        document.getElementById('editor').addEventListener('input', () => {
            const questionContent = document.getElementById('editor').value;
            console.log('Question entered:', questionContent);
            // Store the questionContent in the array
            editorContentValues.push(questionContent);
            // Log all questions
            console.log('All Questions:', editorContentValues);
        });
    </script>

    <!-- <script>
        let editorContentValue = [];

        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['bold', 'italic', 'link'],
                placeholder: 'Add question here'
            })
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);

                // Add event listener for changes
                editor.model.document.on('change', () => {
                    const questionContent = editor.getData();
                    console.log('Question entered:', questionContent);

                    // Store the questionContent in the array
                    editorContentValue.push(questionContent);

                    // You can also call a function or perform other actions with questionContent here
                    // For example: submitQuestionBank(questionContent);
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script> -->
    </script>
    <script src="./assets/js/filter/checkLogin.js"></script>
    </script>
</body>

</html>