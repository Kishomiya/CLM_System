<?php
session_start();
include('includes/header.php');
?>




<div class="container mt-20">

  <!-- Outer Row -->
  <div class="row justify-content-center ">

    <div class="col-xl-6 col-lg-6 col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 mb-4 font-weight-bold text-primary">LOGIN</h1>

                </div>

                <form class="form-group">

                  <div class="form-group">
                    <label class="font-weight-bold" for="email">Username</label>
                    <input type="text" name="username" class="form-control form-control-user">
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold" for="email">Password</label>
                    <input type="password" name="passwordd" class="form-control form-control-user">
                  </div>

                  <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                  <hr>
                  <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <style>
    .links {
      margin-bottom: 15px;
    }
  </style>

</div>


<?php
include('includes/scripts.php');
?>