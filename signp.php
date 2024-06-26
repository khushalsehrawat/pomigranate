<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Cuprum:ital,wght@0,400..700;1,400..700&family=Macondo&family=Pacifico&display=swap"
    rel="stylesheet">
  <style type="text/css">
 /*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v8.4.14,
* Autoprefixer: v10.4.7
* Browsers: last 4 version
*/

   body {
    background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.259)), url(signbg.jpg) no-repeat center;
    -webkit-background-size: cover;
      height: 100vh;
      background-color: rgba(27, 27, 27, 0.137);
    }

    #sign {
      border: 0.5px rgba(18, 17, 17, 0.326) solid;
      background-color: transparent;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(2px);
      border-radius: 5%;
      left: 50px;
      color: black;
    }

    button {
      margin: 15px;
    }

    .btn {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
    }

    #quote {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      font-family: "Macondo", cursive;
      font-size: 40px;
      color: aliceblue;
    }

    .container {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);

    }

    @media only screen and (max-width: 576px) {
      #main {
        background-repeat: no-repeat;
        width: 100%;
        /* adjust the width to fit the screen */
      }

      .container {
        width: 100%;
        /* adjust the width to fit the screen */
      }

      .col-md-6 {
        width: 100%;
        /* adjust the width to fit the screen */
      }

      .well {
        width: 100%;
        /* adjust the width to fit the screen */
      }

      .form-group {
        width: 100%;
        /* adjust the width to fit the screen */
      }

      button {
        width: 100%;
        /* adjust the width to fit the screen */
        
      }

      h4 {
        font-size: 1.5em;
        /* adjust the font size to fit the screen */
      }

      /* adjust other elements as needed */
    
    #quote {
      font-size: 1.5em;
    }
    #btnn{
      margin-right: 25px;
    }
    #quote{
      margin-top: 100px;
    }
    #loog{
      margin-top: 15px;
    }
}
    @media only screen and (min-width: 577px) and (max-width: 991px) {
      #emai{
        width: 194px;
      }
      }
      @media only screen and (min-width: 576px) and (max-width: 767px) {
        #emai{
          width: 388px;
          }

        }
    

  </style>
</head>

<body>
  <div id="main">
    <div id="head">
    <a href="index.html">
    <img src="pogo.png" alt="logo" width="5%" style="margin: 15px;" >
    </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6" id="quote">
          "Food is our common ground, a universal experience." <br> - James Beard
        </div><!--quote div-->
        <div class="col-md-6" id="sign">
          <h1 style="font-weight: 600; color: #FEFCFF;">Sign Up</h1>
          <h3 style="font-weight: 400; color: #FEFCFF;">It's free and always will be.</h3>
          <br>
          <center>
            <form method="POST" action="sign.php">
              <div class="form-group">
                <input class="well well-sm" style="background-color: white;" type="text" name="first"
                  placeholder="First name">
                <input class="well well-sm" style="background-color: white;" type="text" name="last"
                  placeholder="Last name">
                <br>
                <input class="well well-sm" class="mail" id="emai" type="text" name="mail" size="48"
                  style="background-color: white;" placeholder="enter your email"> <br>
                <input class="well well-sm" class="mail" type="password" name="pass" style="background-color: white;"
                  placeholder="Enter New Password">
                <input class="well well-sm" class="mail" type="password" name="pass" style="background-color: white;"
                  placeholder="Confirm New Password">
                <br>
                <h4 style="text-align: left; font-size: 25px; font-weight: 600; color: #FEFCFF;">Birthday</h4><br>
                <input class="well well-sm" style="background-color: rgba(214, 162, 162, 0.516);" type="date" name="date" min="1" max="31" step="1">
                <i><a href="#"  style="color: #FFFFFF; letter-spacing: 2px;">Why I need to provide my birthday?</a><br></i>
                <br><div style="color: #FEFCFF;">
                By clicking Sign Up, you agree to our <a href="#" style="color: #071952"> Terms, Data Policy</a> and <a href="#" style="color: #071952"> Cookies
                  Policy.</a> You may receive SMS Notifications from us and can opt out any time.
                  </div>
                <br><br>
                <div id="btnn">
                  <button class="btn btn-primary btn-lg col-md-4" name="signup" style="font-size: 20px;">Sign Up</button>
                  <button class="btn btn-success btn-lg col-md-4" id="loog" name="login" style="font-size: 20px;"><a href="login"></a> Login</button>
                  <p style="margin-top: 5%; color: wheat;"><em>already a user!<br> click login</em></p><br>
                </div>
            </form>
          </center>
        </div><!--sign div-->
      </div>
    </div>
  </div><!--main div-->
  
  </div>
  
</body>

</html>