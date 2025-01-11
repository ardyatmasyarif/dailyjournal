<?php
session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: halaman.php"); 
    exit();
}

$username = $_SESSION['username']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Selamat datang di Daily Journal. Anda telah berhasil login.</p>
        
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <?php if (isset($_GET['logged_out']) && $_GET['logged_out'] == 1) { ?>
        <div class="alert alert-success mt-3 text-center">
            Anda telah berhasil logout.
        </div>
    <?php } ?>


    
</body>
</html>