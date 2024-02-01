<?php

namespace Minhquan\Asm\Controllers\Admin;

use Minhquan\Asm\Controller;

class DashboardController extends Controller
{
    
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {        
        $this->renderAdmin('dashboard');
    }
}
