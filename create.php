<!DOCTYPE html>
<html>
  <head>
    <title>HTML CSS Register Form</title>
    <link rel="stylesheet" href="bootstrap1.css">
  </head>
  <body>
    <form class="signup-form" action="register.php" method="post" enctype="multipart/form-data">
      <div class="form-header">
        <h1>Create Account</h1>
      </div>
      <div class="form-body">
        <div class="horizontal">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" id="firstname" class="form-input" name="firstname" placeholder="enter your first name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name" name="lastname"/>
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input type="email" name="email" id="email" class="form-input" placeholder="enter your email" required="required">
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" id="password" class="form-input" name="password" placeholder="enter your password" required="required">
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password *</label>
            <input type="password" class="form-input" id="confirm-password" name="confirmpassword" placeholder="enter your password again" required="required">
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div>
          <div class="form-group right">
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group left" >
            <label class="label-title">Source</label>
            <select class="form-input" id="level" name="source" >
              <option ></option>
              <option value="b">school</option>
              <option value="c">college</option>
              <option value="d">other</option>
            </select>
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group left" >
            <label for="choose-file" class="label-title">Upload Profile Picture</label>
            <input type="file" id="choose-file" size="80" name="f1">
          </div>
          <div class="form-group right">
            <label for="your Age" class="label-title">Age</label>
            <input type="number" min="10"  max="80" class="form-input" name="age">
          </div>
        </div>
        <div class="form-group">
          <label for="choose-file" class="label-title">Bio</label>
          <textarea class="form-input" rows="4" cols="50" style="height:auto" name="boi"></textarea>
        </div>
      </div>
      <div class="form-footer">
        <div class="horizontal-group">
            <div class="form-group left" >
              <button type="submit" class="btn">back</button>
            </div> 
        </div> 
        <div class="form-group right">
            <span style="color: red;">* required</span>
            <button type="submit" class="btn">Create</button>

            
        </div>

    </form>
    <h5>Already have an account? <a href="Login.php">Sign In.</a></h5>
</body>
</html>