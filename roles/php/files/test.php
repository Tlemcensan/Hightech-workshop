<?php
echo "Hello from Ansible!";
$mysqli = new mysqli("localhost", "user", "password", "database");
if ($mysqli->connect_errno) {
  echo "Échec de la connexion à MySQL: " . $mysqli->connect_error;
} else {
  echo "Connexion réussie à MySQL!";
}
?>
