<?php
// Kết nối cơ sở dữ liệu
include 'connect.php';

// Lấy tổng số tin tức
$query_news = $pdo->query("SELECT COUNT(*) as total_news FROM news");
$total_news = $query_news->fetch();

// Lấy tổng số danh mục
$query_categories = $pdo->query("SELECT COUNT(*) as total_categories FROM categories");
$total_categories = $query_categories->fetch();

// Lấy tổng số người dùng
$query_users = $pdo->query("SELECT COUNT(*) as total_users FROM users");
$total_users = $query_users->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Quản Trị TluNews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Dashboard Quản Trị</h1>

    <div class="row mt-4">
        <!-- Tổng số tin tức -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số Tin Tức</h5>
                    <p class="card-text"><?= $total_news['total_news'] ?></p>
                </div>
            </div>
        </div>

        <!-- Tổng số danh mục -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số Danh Mục</h5>
                    <p class="card-text"><?= $total_categories['total_categories'] ?></p>
                </div>
            </div>
        </div>

        <!-- Tổng số người dùng -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số Người Dùng</h5>
                    <p class="card-text"><?= $total_users['total_users'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <a href="news/add.php" class="btn btn-primary">Thêm Tin Tức Mới</a>
            <a href="news/edit.php" class="btn btn-warning">Sửa Tin Tức</a>
        </div>
    </div>
</div>

</body>
</html>
