<?php
ob_start();
?>

<style>
    body {
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .pet-card {
        transition: all 0.3s ease;
        border-radius: 16px;
        overflow: hidden;
    }

    .pet-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.18);
    }

    .welcome-banner {
        background: linear-gradient(135deg, #ff9a8b, #ff6a88, #ffb199);
        color: white;
        border-radius: 16px;
    }

    .slow-feeder-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 12px;
    }
</style>

<div class="container mt-4">

    <!-- Welcome Banner -->
    <div class="card shadow border-0 mb-4 welcome-banner pet-card">
        <div class="card-body text-center py-5">
            <h1 class="display-4">Welcome to Pet Slow Feeder</h1>
            <p class="lead mt-3">Healthy Eating, Happy Pets</p>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.6);">
            <p class="mb-0">Manage your pet slow feeder products, customers and orders in one place.</p>
        </div>
    </div>

   

    <!-- Management Menu -->
    <h3 class="mb-3">Management System</h3>
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card h-100 shadow-sm pet-card">
                <div class="card-body text-center py-4">
                    <h2>🥣</h2>
                    <h5>Products</h5>
                    <p class="text-muted">Manage pet slow feeder bowls, stock and pricing</p>
                    <a href="products.php" class="btn btn-primary">Go to Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow-sm pet-card">
                <div class="card-body text-center py-4">
                    <h2>🐾</h2>
                    <h5>Customers</h5>
                    <p class="text-muted">Manage customer information and buyer records</p>
                    <a href="customers.php" class="btn btn-success">Go to Customers</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow-sm pet-card">
                <div class="card-body text-center py-4">
                    <h2>👨‍💼</h2>
                    <h5>Staffs</h5>
                    <p class="text-muted">Manage staff accounts and system access</p>
                    <a href="staffs.php" class="btn btn-warning">Go to Staffs</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow-sm pet-card">
                <div class="card-body text-center py-4">
                    <h2>📋</h2>
                    <h5>Orders</h5>
                    <p class="text-muted">View and process all customer orders</p>
                    <a href="orders.php" class="btn btn-danger">Go to Orders</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>