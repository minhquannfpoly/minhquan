<?php

namespace Minhquan\Asm\Controllers\Client;

use Minhquan\Asm\Controller;
use Minhquan\Asm\Models\Product;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        // Tạo một thể hiện của mô hình Product
        $productModel = new Product();

        // Lấy 10 sản phẩm mới nhất
        $latestProducts = $productModel->getLatestLimit10();

        // Lấy tất cả sản phẩm trong một danh mục cụ thể (thay thế 1 bằng ID danh mục mong muốn)
        $categoryProducts = $productModel->getAllByCategoryID($_GET['category_id'] ?? 1);

        // Chuyển dữ liệu vào chế độ xem
        $this->render('client/home', compact('latestProducts', 'categoryProducts'));
    }
}
