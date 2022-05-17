<?php include ('x-function/redirect_if_login.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Join us | NotesGlossary</title>

    <link rel="icon" href="assets/images/Icon.png" type="image/icon type">

    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style type="text/css">
      #error_show,#error_show_r{
        display: none;
      }
    </style>

  </head>

<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="assets/images/signup.jpg" alt="" /></div>
        <div class="formBx">
          <form >
            <h2>Sign In</h2>
            <a href="index.php"><span class="close">&times;</span></a>
            <div class="alert alert-success" role="alert" id="error_show"></div>
            <input type="text" name="useremail" id="useremail" placeholder="Email"/>
            <input type="password" name="password" id="password" placeholder="Password" />
            <input type="button" id="btn_login" name="login_user" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form >
            <h2>Create an account</h2>
            <div class="alert alert-success" role="alert" id="error_show_r"></div>
            <input class="input_fields" type="text" name="" placeholder="Username" id="user_name" value="" />
            <input class="input_fields" type="email" name="" placeholder="Email Address" id="user_email" value=""/>
            <input class="input_fields" type="password" name="pass_1" id="user_password" placeholder="Create Password" />
            <input class="input_fields" type="password" name="pass_2" id="user_password_2" placeholder="Confirm Password" />
            <input  type="button" id="btn_registration" name="reg_user" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="assets/images/login.jpg" alt="" /></div>
      </div>
    </div>
  </section>
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/login.js"></script>
    <script>
        $(document).ready(function() {
            function validateEmail($email) {
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              return emailReg.test( $email );
            }
            function validatepassword(password) {
                return /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])[A-Za-z0-9]{8,}$/.test(password);
            }
            $('#btn_login').click(function (e) {
                $('#error_show').hide();
                var useremail = $('#useremail').val();
                var password = $('#password').val();

                if(useremail == ''){
                  $('#error_show').show();
                  $('#error_show').html("Please Enter Email Address");

                }
                else if(!validateEmail(useremail)){

                  $('#error_show').show();
                  $('#error_show').html("Please Enter Valid Email Address");

                }
                else if(password == ''){

                  $('#error_show').show();
                  $('#error_show').html("Please Enter Password");

                }else{
                  $.get('x-function/data_get.php',{
                      useremail:useremail,
                      password:password,

                  }, function(data) {
                      var get_data = data.trim();
                      if(get_data == "Credentials were not valid."){
                          $('#error_show').show();
                          $('#error_show').html(get_data);
                      }else{
                          window.location.assign("index.php");
                      } 
                  });

                }


            });

            $('#btn_registration').click(function (e) {
                $('#error_show_r').hide();

                var user_name     = $('#user_name').val();
                var useremail     = $('#user_email').val();
                var password      = $('#user_password').val();
                var password_2    = $('#user_password_2').val();

                if(user_name == ''){

                  $('#error_show_r').show();
                  $('#error_show_r').html('Please Enter Username');

                }else if(useremail == ''){
                  $('#error_show_r').show();
                  $('#error_show_r').html('Please Enter Email Address');

                }
                else if(!validateEmail(useremail)){

                  $('#error_show_r').show();
                  $('#error_show_r').html("Please Enter Valid Email Address");

                }
                else if(password == ''){
                  $('#error_show_r').show();
                  $('#error_show_r').html('Please Enter Password');

                }else if(password != password_2 || password_2 == '' || password == '' || password.length < 8){
                  $('#error_show_r').show();
                  if(!(password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/))){
                    $('#error_show_r').html('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
                  }
                  else if(password == ''){
                    $('#error_show_r').html('Please Enter Password');
                  }else if(password_2 == ''){
                    $('#error_show_r').html('Please Enter Confirm Password');
                  }
                  else{
                    $('#error_show_r').html('Password and Confirm Password is not match');
                  }


                }
                else{
                  $.get('x-function/data_get.php',{
                      user_name:user_name,
                      useremails:useremail,
                      passwords:password,

                  }, function(data) {
                      var get_data = data.trim();
                      if(get_data != ''){

                          $('#error_show_r').show();
                          $('#error_show_r').html(get_data);
                          if(get_data == "Registration Successfully"){
                            $('.input_fields').val('');
                          }
                      }
                  });

                }

            });
        });
    </script>
</body>
</html>