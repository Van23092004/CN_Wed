<?php
// Đảm bảo rằng người dùng đã đăng nhập
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// Lấy thông tin quản trị viên từ session
$admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Quản trị viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Thanh điều hướng -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quản trị viên</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">Quản lý tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nội dung dashboard -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Chào mừng, <?= htmlspecialchars($admin['username']) ?></h1>

        <!-- Thông tin tổng quan -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Số lượng tin tức</h5>
                        <p class="card-text">Đang có 50 bài viết.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng số người dùng</h5>
                        <p class="card-text">Đang có 200 người dùng.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tin tức mới nhất</h5>
                        <p class="card-text">Cập nhật tin tức từ hôm qua.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thống kê chi tiết -->
        <div class="row">
            <div class="col-md-12">
                <h3>Quản lý tin tức</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách tin tức</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tiêu đề</th>
                                    <th>Ngày đăng</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dữ liệu tin tức sẽ được hiển thị ở đây -->
                                <tr>
                                    <td>1</td>
                                    <td>Tin tức 1</td>
                                    <td>01/01/2024</td>
                                    <td>
                                        <a href="edit_news.php?id=1" class="btn btn-warning">Chỉnh sửa</a>
                                        <a href="delete_news.php?id=1" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tin tức 2</td>
                                    <td>02/01/2024</td>
                                    <td>
                                        <a href="edit_news.php?id=2" class="btn btn-warning">Chỉnh sửa</a>
                                        <a href="delete_news.php?id=2" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                <!-- Thêm nhiều tin tức tại đây -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Trang Quản Trị. Tất cả quyền lợi được bảo lưu.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
