<!DOCTYPE html>
<html>
<head>
  <title>Form Profil</title>
  <style>
    body {
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: sans-serif;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 250px;
    }

    h2 {
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }

    textarea {
      height: 100px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #0062cc;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Profil</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="nim">NIM:</label>
      <input type="text" id="nim" name="nim" required>

      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="kelas">Kelas:</label>
      <input type="text" id="kelas" name="kelas" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="nomor_hp">Nomor HP:</label>
      <input type="text" id="nomor_hp" name="nomor_hp" required>

      <button type="submit">Simpan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nim = $_POST["nim"];
      $nama = $_POST["nama"];
      $kelas = $_POST["kelas"];
      $email = $_POST["email"];
      $nomor_hp = $_POST["nomor_hp"];

      echo "<h3>Data Profil:</h3>";
      echo "<p>NIM: " . $nim . "</p>";
      echo "<p>Nama: " . $nama . "</p>";
      echo "<p>Kelas: " . $kelas . "</p>";
      echo "<p>Email: " . $email . "</p>";
      echo "<p>Nomor HP: " . $nomor_hp . "</p>";
    }
    ?>
  </div>
</body>
</html>