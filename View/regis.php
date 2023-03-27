<section class="vh-200" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="index.php?action=regis&act=insert" method="post">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="txttenkh" class="form-control" value="<?php echo $tenkh?>"/>
                      <label class="form-label" for="form3Example1c">Your name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="txtusername" class="form-control"  value="<?php echo $tendn?>"/>
                      <label class="form-label" for="form3Example1c">Username</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="txtemail" class="form-control"  value="<?php echo $email?>"/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="txtpass" class="form-control"  value="<?php echo $pass?>"/>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="retypepassword" class="form-control"  value="<?php echo $rpass?>"/>
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="txtdiachi" class="form-control"  value="<?php echo $diachi?>"/>
                      <label class="form-label" for="form3Example4cd">Address</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="txtsodt" class="form-control"  value="<?php echo $sodt?>"/>
                      <label class="form-label" for="form3Example4cd">Phone</label>
                    </div>
                  </div>
                  <?php foreach($errors as $value){?>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0 text-danger">
                      <?php echo $value?>
                    </div>
                  </div><?php } ?>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="./content/Img/regis.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>