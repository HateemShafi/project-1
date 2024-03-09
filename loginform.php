<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #e0e0e0;
  }

  form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius:px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-top: 100px;
  }

  form div {
    margin-bottom: 10px;
  }

  form input[type="text"],
  form input[type="password"],
  form input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
  }

  form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    line-height: 1.5;
  }

  form input[type="submit"]:hover {
    background-color: #0069d9;
  }

  form a {
    display: block;
    text-align: center;
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
    margin-top: 10px;
  }

  form a:hover {
    text-decoration: underline;
  }
</style>

<body>
<form>
  <div>
    Username:<br>
    <input type="text" name="username">
  </div>
  <div>
    Password:<br>
    <input type="password" name="password">
  </div>
  <div>
    <input type="submit" value="Login">
  </div>
  <div>
    <a href="#forgot-password">Forgot Password?</a>
  </div>
</form>

<p>Not a Member? <a href="#signup">Signup</a></p>

<!-- Forgot Password Form -->
<div id="forgot-password" style="display:none;">
  <form>
    <div>
      Enter your email address to reset your password:<br>
      <input type="email" name="email">
    </div>
    <div>
      <input type="submit" value="Reset Password">
    </div>
  </form>
</div>

<!-- Signup Form -->
<div id="signup" style="display:none;">
  <form>
    <div>
      Choose a username:<br>
      <input type="text" name="signup-username">
    </div>
    <div>
      Create a password:<br>
      <input type="password" name="signup-password">
    </div>
    <div>
      <input type="submit" value="Signup">
    </div>
  </form>
</div>
</body>
</html>