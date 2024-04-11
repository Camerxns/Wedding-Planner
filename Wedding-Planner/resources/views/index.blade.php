<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Ace and Cameron's Wedding</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style>
      /* Additional CSS */
      body, html {
          height: 100%;
          margin: 0;
          font-family: 'Poppins', sans-serif; /* Using Poppins font */
          position: relative;
      }
      .container {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 100vh; /* Use 100vh for full height of the viewport */
          position: relative; /* Added */
      }
      h1, h2 {
          text-align: center;
          animation: pop 0.5s ease-out; /* Animation */
          animation-fill-mode: forwards; /* Maintain the end state of animation */
          opacity: 0; /* Initially hide the text */
      }
      @keyframes pop {
          0% {
              transform: scale(0.5); /* Initial scale */
              opacity: 0; /* Initial opacity */
          }
          100% {
              transform: scale(1); /* Final scale */
              opacity: 1; /* Final opacity */
          }
      }
      .login-button, .register-button {
          position: absolute; /* Position absolute for fixed positioning */
          top: 10px; /* Adjust top position */
          padding: 10px 20px;
          background-color: #fff;
          color: black;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }
      .register-button {
          right: 10px; /* Adjust right position */
      }
      .login-button {
          right: 90px; /* Adjust right position */
      }
  </style>
  
</head>
<body>
<div class="container">
    <h1>Welcome to the website for</h1>
    <h2>Ace and Cameron's Wedding</h2>
</div>
<div>
   <a href="{{route('login')}}" class="login-button">Login</a>
   <a href="{{route('register')}}" class="register-button">Sign Up</a>
</div>
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
