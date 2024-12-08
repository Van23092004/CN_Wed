<?php
// Kết nối cơ sở dữ liệu
include 'connect.php';

// Lấy tất cả bài viết tin tức
$stmt = $pdo->query("SELECT * FROM news ORDER BY created_at DESC");
$newsList = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Tin Tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Trang Chủ - Tin Tức</h1>
    
    <!-- Hiển thị danh sách tin tức -->
    <div class="row">
        <?php foreach ($newsList as $news): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $news['image'] ?>" class="card-img-top" alt="Ảnh tin tức">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                        <p class="card-text"><?= substr($news['content'], 0, 100) ?>...</p>
                        <a href="news/detail.php?id=<?= $news['id'] ?>" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

