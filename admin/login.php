<!DOCTYPE html>
<html>
<head>
  <title>Username and Password Validation in PHP using AJAX</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="ajaxValidation.js"></script>
  <style type="text/css">
    body {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      font-weight: bold;
    }
    #message {
      margin-top: 15px;
      font-size: 16px;
    }
    .btn-custom {
      background-color: #dc3545;
      color: #ffffff;
      font-weight: bold;
    }
    .btn-custom:hover {
      background-color: #c82333;
      color: #ffffff;
    }
    .home-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      font-weight: bold;
      color: #007bff;
      text-decoration: none;
    }
    .home-link:hover {
      text-decoration: underline;
    }
    li {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container col-md-5">
    <h2 class="text-center mb-4">Login</h2>
    <div class="mb-3">
      <label for="userEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="userEmail" placeholder="Enter your email">
    </div>
    <div class="mb-3">
      <label for="userPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="userPassword" placeholder="Enter your password">
    </div>
    <p id="message" class="text-center"></p>
    <div class="mb-3">
      <button class="form-control btn btn-custom" id="checkValidation">Login</button>
    </div>
  </div>
</body>
</html>
