<?php
ob_start();
?>

<div class="container mt-4">
    <!-- 欢迎横幅，带渐变+动画 -->
    <div class="card shadow border-0 mb-4" style="background: linear-gradient(135deg, #0d6efd, #0099ff); color:white;">
        <div class="card-body text-center py-5">
            <h1 class="display-4 animate-fade">Welcome to My Company</h1>
            <p class="lead mt-3 animate-fade-delay">Bicycle Sales Management System</p>
            <hr class="my-4" style="border-color:#fff;">
        </div>
    </div>

    <!-- 功能卡片，hover上浮效果 -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card h-100 shadow-sm card-hover">
                <div class="card-body text-center py-4">
                    <h3 class="text-primary">🚲</h3>
                    <h5 class="mt-2">Products</h5>
                    <p class="text-muted">Manage all bicycle products</p>
                    <a href="products.php" class="btn btn-primary mt-2">Go to Products</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm card-hover">
                <div class="card-body text-center py-4">
                    <h3 class="text-success">👥</h3>
                    <h5 class="mt-2">Customers</h5>
                    <p class="text-muted">Customer information list</p>
                    <a href="customers.php" class="btn btn-success mt-2">Go to Customers</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm card-hover">
                <div class="card-body text-center py-4">
                    <h3 class="text-warning">👨‍💼</h3>
                    <h5 class="mt-2">Staffs</h5>
                    <p class="text-muted">Staff management page</p>
                    <a href="staffs.php" class="btn btn-warning mt-2">Go to Staffs</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm card-hover">
                <div class="card-body text-center py-4">
                    <h3 class="text-danger">📋</h3>
                    <h5 class="mt-2">Orders</h5>
                    <p class="text-muted">View and manage orders</p>
                    <a href="orders.php" class="btn btn-danger mt-2">Go to Orders</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 底部装饰小区域 -->
    <div class="mt-5 text-center text-muted">
        <p>🚴 Explore our high quality bicycles 🚴</p>
    </div>
</div>

<style>
    /* 卡片悬浮上浮特效 */
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    }
    /* 淡入动画 */
    .animate-fade {
        animation: fadeIn 0.8s ease-in-out;
    }
    .animate-fade-delay {
        animation: fadeIn 1.2s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
