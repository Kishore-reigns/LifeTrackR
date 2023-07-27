<!DOCTYPE html>
<html>
  <head>
    <script src="loginpg javascript.js"></script>
    <link rel="stylesheet" href="loginpageCSS.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <nav class="navbar">
      <a class="top_links" style="margin-top: 8px" href="../About USS/aboutus.html"> About </a>
      <a class="top_links" style="margin-top: 8px" href="../services/serviceIndex.html"> Services </a>
      <a class="top_links" style="margin-top: 8px" href="../Contact/contactindex.html"> Contact </a>
      <button class="login_button" onclick="disp_log()">Login</button>
    </nav>


    <form id="loginbox" method="post" action="loginpgPHP.php" >
      <h2 style="font-weight: 1000; text-align: center">Login</h2>
      <div class="vertical_center">
        <div class="inputbox">
          <input
            type="text"
            id="username"
            class="input_text"
            placeholder="User Name"
            name="username"
            required
          />
          <img src="images_login page/user_icon.webp" class="lockicon" style="width: 33px; right: 38px;" alt="">

        </div>
        <div class="inputbox">
          <input
            type="password"
            class="input_text"
            id="pass1"
            placeholder="Password"
            name="password"
            required
          />
          <img src="images_login page/lock-icon-11.png" style="cursor: pointer;" onclick="toggle_password(1)" class="lockicon" alt="" />
        </div>
        <!---------------------------------------------------------------------------------------------------------------------->
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	  <?php } ?>
        <!---------------------------------------------------------------------------------------------------------------------->
        <div
          style="
            margin: auto;
            display: flex;
            justify-content: space-between;
            transform: translateX(-14px);
          "
        >
        </div>
        <input type="submit" class="login_button_2" value="Login"> 
        <p style="text-align: center">
          Don't Have An Account? <a href="#" onclick="disp_reg()">Register</a>
        </p>
      </div>
    </form>


    <form id="registerbox" method="post" action="registerPHP.php" >
      <h2 style="font-weight: 1000; text-align: center">Register</h2>
      <div class="vertical_center">
        <div class="inputbox">
          <input
            type="email"
            id="username"
            class="input_text"
            placeholder="E-mail ID"
            name="email"
          /> 
          <img src="images_login page/email.png" class="lockicon" style="height: 32px;width: 33px; right: 38px;" alt="">
        </div>
          <div class="inputbox">
            <input
              type="text"
              id="username"
              class="input_text"
              placeholder="User Name"
              name="username"
            />
            <img src="images_login page/user_icon.webp" class="lockicon" style="width: 33px; right: 38px;" alt="">
        </div>
        <div class="inputbox">
          <input
            type="password"
            class="input_text"
            id="pass2"
            placeholder="Password"
            name="password"
          />
          <img src="images_login page/lock-icon-11.png" style="cursor: pointer;" onclick="toggle_password(2)" class="lockicon" alt="" />
        </div>
        <br>
        <h4>Account Recovery Question : </h4>
        <div class="inputbox">
          <input
            type="text"
            class="input_text"
            id=""
            placeholder="What is the name of your first school?"
            name="recovery"
          />
        </div>

        <input type="submit" class="login_button_2" value="Register"> 

        <p style="text-align: center;transform: translateX(-19px);">
           Have An Account Already? <a href="#" onclick="disp_log()">Login</a>
        </p>
     </form>
  </body>
</html>
