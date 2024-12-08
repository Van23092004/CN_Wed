<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Tin Tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Thanh điều hướng -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Trang Tin Tức</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=home&action=search">Tìm kiếm</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tiêu đề trang -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh Sách Tin Tức</h1>

        <!-- Form tìm kiếm tin tức -->
        <form action="index.php?controller=home&action=search" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm tin tức..." required>
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </form>

        <!-- Hiển thị danh sách tin tức -->
        <div class="row">
            <?php if (empty($news)): ?>
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        Không có tin tức nào để hiển thị.
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($news as $item): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?= htmlspecialchars($item['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($item['title']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($item['title']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars(substr($item['content'], 0, 150)) ?>...</p>
                                <a href="index.php?controller=home&action=detail&id=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Trang Tin Tức. Tất cả quyền lợi được bảo lưu.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
