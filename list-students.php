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
                    <a href="./list-Student.php">Student</a>
                  </li>
                  <li class="breadcrumb-item active">List</li>
                </ol>
              </nav>
            </div>
            <div class="card">
              <!-- content goes here -->

              <div class="card-body">
                <div id="alert-div" class="mb-3 col-md-8 mx-auto  d-none"></div>
                <div class="row mb-4">
                  <div class="col">
                    <label for="institute_id" class="form-label ">Institute<sup class="text-danger">*</sup></label>
                    <div class="input-group">
                      <select class="form-select" name="institute_id" id="institute_id" aria-label="">

                      </select>
                      <button class="btn btn-outline-primary" id="search-btn" type="button">Search</button>
                    </div>
                    </select>
                  </div>

                  <div class="col d-flex align-items-end justify-content-end">
                    <button id="download-csv" class="btn btn-primary me-2">
                      <i class=" fas fa-download"></i> Download
                    </button>
                    <a href="./register-students.php" class="btn btn-primary">
                      <i class="fas fa-plus"></i> Register Student</a>
                  </div>
                </div>


                <!-- <div class="" style="overflow-x: auto;">
                  <table id="listStudentTable" class="table table-bordered table-responsive">
                    <thead class="  ">
                      <tr>
                        <th class="text-center">Sr. No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Institute</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Contact number</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Actions</th>
                      </tr>


                    </thead>
                    <tbody id="listStudentData">

                    </tbody>
                  </table>
                </div> -->
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
  <script src="./assets/js/filter/delete-student.js"></script>
  <script src="./assets/js/filter/list-institute-select.js"></script>
  <!-- <script src="./assets/js/filter/list-student.js"></script> -->
  <script src="./assets/js/filter/student/tableData.js"></script>

  <script src="./assets/js/reusable/commonClass.js"></script>
  <script src="./assets/js/reusable/tabulatorTable.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const tabulatorTable = new TabulatorTable(
        "example-table",
        `${server}students/listAll/0`,
        tableData
      );
      tabulatorTable.onSearchInstituteStudentName()
      document.getElementById("download-csv").addEventListener("click", function() {
        tabulatorTable.downloadTableData("csv", "Student.csv");
      });
    });
  </script>
  <script>
    appendInstitutes();
    $(document).ready(function() {
      // let table = new DataTable('#instTable');
    });
  </script>
</body>

</html>