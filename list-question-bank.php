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
                  <li class="breadcrumb-item active">List</li>
                </ol>
              </nav>
            </div>
            <div class="card">
              <!-- content goes here -->

              <div class="card-body">
                <div id="alert-div" class="mb-3 col-md-8 mx-auto  d-none"></div>

                <div class="mb-3">

                  <a href="./create-question-bank.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create Question Bank</a>
                  <button id="download-csv" class="btn btn-primary  float-end">
                    <i class="fas fa-download"></i> Download
                  </button>
                </div>


                <div class="card-body p-1" id="my-container">
                  <div id="example-table"></div>
                </div>

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

  <script src="./assets/js/filter/checkLogin.js"></script>

  <script src="./assets/js/api/all-api.js"></script>
  <script src="./assets/js/api/fetchApi.js"></script>
  <script src="./assets/js/filter/list-questionbank.js"></script>
  <script src="./assets/js/filter/questionBank/tableData.js"></script>

  <script src="./assets/js/reusable/commonClass.js"></script>
  <script src="./assets/js/reusable/tabulatorTable.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const tabulatorTable = new TabulatorTable(
        "example-table",
        `${server}teacher/listAllExam`,
        tableData
      );
      document.getElementById("download-csv").addEventListener("click", function() {
        tabulatorTable.downloadTableData("csv", "Question-Bank.csv");
      });
    });
  </script>

  <script>
    listquestionBank();
    $(document).ready(function() {});
  </script>

</body>

</html>