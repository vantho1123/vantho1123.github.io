
<form class="w-25 p-3 m-auto" action="index.php?action=login&act=login_action" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" name="txtusername" class="form-control" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="txtpassword" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="index.php?action=regis">Register</a></p>
    <p> <a href="index.php?action=forgetpass">Foget Password</a></p>
  </div>
</form>
