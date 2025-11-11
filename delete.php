<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    require_once 'connection.php';

    $deleteStmt = $connection->prepare("DELETE FROM products WHERE id = ?");
    $deleteStmt->execute([$_POST['id']]);
    echo "<script>
        alert('Product deleted successfully!');
        window.location.href='list.php?added=1';
    </script>";
   


    exit;
} else {
    header('Location: list.php?error=Unauthorized or invalid request');
    exit;
}
?>