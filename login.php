<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Login</title>
      <link rel="stylesheet" href="bootstrap.css" type="text/css">
      
   </head>
<body>
   
   <div class="login">
      
      <form id="login" method="post" action="login_cs.php" name="f1" >
         <div class="Holder">
            <h2>Login</h2>
            </div>
         <label><b></b></label>
         <input type="text"  id="Username" name="email" placeholder="Username" required="required"/>
         
         <br><br><br/>
         <label><b></b></label>
         <input type="Password"  id="Password" name="Password" placeholder="Password" required="required"/>
         <br><br><br/>
         
         <input type="submit" name="sub" value="Login" class="btn">
         <br><br>
         
         <br><br>
          </form>
          <h5>New here?<a href="create.php">Sign Up.</a></h5><br>
            <a href="ForgotPassword.php">Forgot Password?</a>
     
   
        </div>
   
        

</body>
</html>