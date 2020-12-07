<?php include "header.php";?>
<body>
  <style>
    body{background-color: black}
  </style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div id="logo">
            <h1><a href="index.php"><img style="width:30%;height:30%;" src="../images/logo2.png" alt="Akazi" /></a>Register Now</h1>
            </div>

            <div class="auto-form-wrapper">
              <form action="save_applicants.php" method="POST">
                <!-- <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="zan_id" placeholder="Ikiraka ID" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="form-group">
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail but op" >
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div> -->

                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="number" class="form-control" name="mobile" placeholder="Mobile No" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="password1" placeholder="Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="password2" placeholder="Re-Enter Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">

                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="index.php" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
