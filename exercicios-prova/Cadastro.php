<?php
  $nome = $_POST['nome'];


  $conn = mysqli_connect("localhost", "root", "root", "revisao");
  // $query = "SELECT * from cliente";

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // mysqli_query($conn, $query);
  // echo mysqli_query($conn, "INSERT INTO cliente (nome) VALUES ('$nome')");
mysqli_query($conn, "SELECT * FROM estado");
echo mysqli_query($conn, "SELECT * FROM estado");
  // echo $x;
  // $conn->close();
  mysqli_close($conn);
?>
