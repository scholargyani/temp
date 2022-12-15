<!DOCTYPE html>  
 <html lang="en">  
  <head>  
   <meta charset="UTF-8" />  
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
   <title>Log In / Sign Up </title>  
   <link rel="stylesheet" href="loginpage.css">  
  </head>  
  <body>  
    <header>
      <p><img class="logo" src="logo1.png"> </p>
      <input type="checkbox" name="" class="btn"/>
      <div class="nav">
        <ol>
          <li><a href="home1.html">HOME</a></li>
          <!-- <li><a href="about.html">ABOUT</a></li> -->
          <li><a href="Scholarships1.html">SCHOLARSHIPS</a></li>
          <li><a href="loginpage.html">Login/Signup</a></li>
        </ol>
      </div>
    </header>
    <div class="section">  
      <div class="container">  
        <div class="row full-height justify-content-center">  
          <div class="col-12 text-center align-self-center py-5">  
            <div class="section pb-5 pt-5 pt-sm-2 text-center">  
              <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>  
              <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>  
              <label for="reg-log"></label>  
                <div class="card-3d-wrap mx-auto">  
                  <div class="card-3d-wrapper">  
                    <div class="card-front">  
                      <div class="center-wrap">  
                        <div class="section text-center">  
                          <h4 class="mb-4 pb-3">Log In</h4>  
                         <form id="loginf" action="log.php" method="POST">
                          <div class="form-group">  
                            <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">  
                            <i class="input-icon uil uil-at"></i>  
                          </div>       
                          <div class="form-group mt-2">  
                            <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">  
                            <i class="input-icon uil uil-lock-alt"></i>  
                          </div>  

                          <button type="submit" class="btn btn-primary btn-lg">Log In</button>
                          <?php if(isset($_GET['error'])) { ?>
                          <p class="err" style="color:red;"><?php echo $_GET['error']; echo "<h1>  </h1>";?></p>
                          <?php } ?>
                          <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>  
                        </div>
                        </form>  
                      </div>  
                    </div>  
                    <div class="card-back">  
                      <div class="center-wrap">  
                        <div class="section text-center">  
                          <h4 class="mb-4 pb-3">Sign Up</h4>  
                          <form action="signup.php" method="POST">
                          <div class="form-group">  
                           
                            <input type="text" name="signame" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">  
                            <i class="input-icon uil uil-user"></i>  
                          </div>       
                          <div class="form-group mt-2">  
                            <input type="email" name="sigmail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">  
                            <i class="input-icon uil uil-at"></i>  
                          </div>       
                          <div class="form-group mt-2">  
                            <input type="password" name="sigpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">  
                            <i class="input-icon uil uil-lock-alt"></i>  
                          </div>  
                          <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                        </div>  
                      </form>
                    </div>  
                  </div>  
                </div>  
                
              </div>  
              </div>  
            </div>  
          </div>  
        </div>  
      </div>  
    </body>  
 </html>