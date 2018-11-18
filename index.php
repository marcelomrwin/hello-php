<html>
  <head>
  <title>PHP Hello page</title>
  <style>
    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
    }
  </style>
  </head>
  <body>
    <h1>VERSÃO 1</h1>
  <br/> Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?>
  <br/>
  <hr/>
  <div>
  <?php
    $conn = new mysqli($_ENV['mysql_svc'], $_ENV['mysql_user'], $_ENV['mysql_pass'], $_ENV['mysql_db']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("SELECT nome FROM cidade");
    if ($result->num_rows > 0) {
        echo "<table><th><h2>Cidades cadastradas no Banco de Dados</h2></th>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td><h3>" . $row["nome"] . "</h3></td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
  ?>
  </div>
  </body>
</html>
