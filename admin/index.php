<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-4">
                <h3 class="text-secondary text-center mb-4">Admin Login</h3>
                <form class="pt-1" action="/admin/login.php" method="post">
                  <div class="form-group">
                    <input type="email" name="email" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" required class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3 text-center">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">LOG IN</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
  </body>
</html>