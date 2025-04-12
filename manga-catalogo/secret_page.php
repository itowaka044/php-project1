<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");   
}

echo "<h3>sucesso</h3><br>";
echo "<a href='logout.php'>Sair</a>";
?>