<!DOCTYPE html>
<html>
<head>
  <title>Form Perulangan</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 80vh;
      background-color: #f4f4f4;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    #result {
      margin-top: 20px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Perulangan</h2>
    <form method="post" action="">
      <label for="teks">Teks:</label><br>
      <input type="text" id="teks" name="teks" required><br>

      <label for="jumlah">Jumlah Perulangan:</label><br>
      <input type="number" id="jumlah" name="jumlah" required><br>

      <button type="submit">Cetak</button>
    </form>

    <div id="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teks = $_POST["teks"];
        $jumlah = $_POST["jumlah"];

        for ($i = 1; $i <= $jumlah; $i++) {
          echo "$i - $teks <br>";
        }
      }
      ?>
    </div>
  </div>
</body>
</html>