<?php
echo "<h1>Hello world</h1> ";
echo "IP Interno: " . $_SERVER['SERVER_ADDR'];
echo "<br>";

$conn = new mysqli("mysql", "admin", "redhat@123", "clientdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT nome FROM cidade");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>" . $row["nome"];
    }
} else {
    echo " - 0 results";
}
$conn->close();
?>