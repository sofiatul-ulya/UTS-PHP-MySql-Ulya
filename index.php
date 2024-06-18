<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      margin: 0;
    }
    .container {
      border: 1px solid #ccc;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    label {
      display: block;
      margin-top: 10px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      margin-top: 10px;
    }
    button:hover {
      background-color: #3e8e41;
    }
    .menu {
      display: flex;
      justify-content: space-around;
      margin-bottom: 20px;
    }
    .menu button {
      background-color: #f44336;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    .menu button:hover {
      background-color: blue;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome My Project</h1>
    <div class="menu">
      <button onclick="window.location.href='index.php'">Beranda</button>
      <button onclick="window.location.href='2257401057_login.php'">Login</button>
      <button onclick="window.location.href='2257401057_loop.php'">Loop</button>
      <button onclick="window.location.href='2257401057_profil.php'">Profil</button>
    </div>
  </div>
</body>
</html>