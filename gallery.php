<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "gallery_management");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Paginasi
$items_per_page = 3;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

// Query data gallery
$total_items_query = "SELECT COUNT(*) AS total FROM gallery";
$total_items_result = $conn->query($total_items_query);
$total_items = $total_items_result->fetch_assoc()['total'];
$total_pages = ceil($total_items / $items_per_page);

$query = "SELECT * FROM gallery LIMIT $items_per_page OFFSET $offset";
$result = $conn->query($query);

// Fungsi Hapus Data
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $conn->query("DELETE FROM gallery WHERE id = $id");
    header("Location: gallery_management.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Manajemen Gallery</h1>

    <a href="add_gallery.php" class="btn btn-success mb-3">Tambah Gallery</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><img src="<?= htmlspecialchars($row['image_url']) ?>" alt="Image" style="width: 100px;"></td>
                <td><?= htmlspecialchars($row['description']) ?></td>
                <td>
                    <a href="edit_gallery.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <nav>
        <ul class="pagination">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>
</body>
</html>
