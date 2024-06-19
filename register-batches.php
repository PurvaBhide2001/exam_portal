<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Admin dashboard</title>

  <meta name="description" content="" />
  <?php include_once("./include-common-style.php") ?>
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

        <!-- / Navbar -->
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
                    <a href="./list-batchs.php">batch</a>
                  </li>
                  <li class="breadcrumb-item active">Register</li>
                </ol>
              </nav>
            </div>

            <div class="card">
              <!-- content goes here -->
              <form id="batchesForm" action="">
                <!-- SELECT2 EXAMPLE -->



                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="text-center">Register batch </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body mt-2">
                    <div class="row pt-3">
             
                      <div class="col-md-4 mb-3">
                        <label for="institute_id" class="form-label ">Institute<sup class="text-danger">*</sup></label>
                        <select name="institute_id" class="form-control" id="institute_id">
                        </select>
                      </div>
                      <div class="col-md-4 mb-3 form-group">
                        <label for="" class="form-label">Batch title<sup class="text-danger">*</sup></label>
                        <input type="text" name="batch_name" class="form-control" id="batch_name" placeholder="Batch title" required>
                      </div>
                      <div class="col-md-4 mb-3 form-group">
                        <label for="" class="form-label">Year<sup class="text-danger">*</sup></label>
                        <input type="text" name="year" class="form-control" id="year" placeholder="Year" required>
                      </div>
                      <div id="alert-div" class="mb-3 col-md-8 mx-auto  d-none"></div>
                    <div class="row">
                      <div class="col-md-12 d-flex justify-content-center" id="">
                        <button type="submit" class="btn btn-primary my-2" id="submit" value="">Register </button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
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
  <script src="assets/js/parseData.js"></script>

  <!-- page scripts -->
  <script src="./assets/js/filter/checkLogin.js"></script>
  <script src="./assets/js/filter/list-institute-select.js"></script>




  <script>    
    const id = getQueryParamValue("id");
    appendInstitutes()
  </script>
  <script src="./assets/js/filter/register-batch.js"></script>
</body>

</html>