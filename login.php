<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="asik.css">
</head>
<body>
  
  <div class="wrapper">
    <form method="POST" action="aksi_login.php">
      <h1>Login admin</h1>
      <div class="input-box">
        <input type="text" placeholder="Username"  type="text" name="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" type="password" name="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      
      <button value="simpan" type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>