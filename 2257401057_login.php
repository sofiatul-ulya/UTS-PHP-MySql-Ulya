<!DOCTYPE html>
<html>
<head>
<title>Form Login</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 80vh;
}

.container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  padding: 20px;
  width: 280px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

input[type="text"], input[type="password"] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 20px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type="text"]:focus, input[type="password"]:focus {
  background-color: #ddd;
  outline: none;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

button:hover {
  opacity: 1;
}

.container span {
  display: inline-block;
  font-size: 12px;
  color: #888;
  margin: 5px 0;
}

</style>
</head>
<body>

<div class="container">
  <h2>Form Login</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Username" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit">Login</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "ulya" && $password == "ulya123") {
      echo "<p style='color:green;'>Login Berhasil</p>";
    } else {
      echo "<p style='color:red;'>Username atau Password tidak sesuai</p>";
    }
  }
  ?>
</div>

</body>
</html>