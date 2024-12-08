<?php
// Kết nối cơ sở dữ liệu
include 'connect.php';

// Kiểm tra xem có tham số 'controller' và 'action' trong URL hay không
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';  // Mặc định là 'home'
$action = isset($_GET['action']) ? $_GET['action'] : 'index';  // Mặc định là 'index'

// Tạo đường dẫn tới controller tương ứng
$controllerFile = 'controllers/' . ucfirst($controller) . 'Controller.php';

// Kiểm tra xem file controller có tồn tại hay không
if (file_exists($controllerFile)) {
    // Nếu tồn tại, bao gồm file controller
    include $controllerFile;

    // Tạo đối tượng controller
    $controllerClass = ucfirst($controller) . 'Controller';
    $controllerObj = new $controllerClass();

    // Gọi action tương ứng
    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();  // Gọi action của controller
    } else {
        echo 'Action không hợp lệ!';
    }
} else {
    echo 'Controller không hợp lệ!';
}
?>
