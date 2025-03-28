<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - SIAKAD SD</title>

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">SIAKAD SD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('ppdb')); ?>"><i class="fas fa-user-graduate"></i> PPDB</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>"><i class="fas fa-address-book"></i> Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<!-- Bagian Footer -->
<div class="container-fluid px-0">
    <footer class="py-5 text-white w-100" style="background: #0066FF;">
        <div class="container-fluid px-5">
            <div class="row text-center text-md-start align-items-center">
                
                <!-- Bagian Media Sosial -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Ikuti Kami</h5>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a href="#" class="text-white me-3 social-icon">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="#" class="text-white me-3 social-icon">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="#" class="text-white social-icon">
                            <i class="fas fa-envelope fa-2x"></i>
                        </a>
                    </div>
                </div>

                <!-- Bagian Map Lokasi -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="fw-bold">Lokasi Sekolah</h5>
                    <div class="ratio ratio-16x9 border rounded overflow-hidden shadow-lg">
                        <iframe 
                            src="https://www.google.com/maps/embed?..." 
                            width="100%" height="200" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Hak Cipta -->
                <div class="col-md-4 text-center text-md-end">
                    <h5 class="fw-bold">&copy; 2025 SIAKAD SD</h5>
                    <p class="mb-0">Semua hak dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>
</div>




<!-- Font Awesome untuk ikon -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

<!-- Tambahkan CSS untuk efek hover ikon -->
<style>
    .social-icon {
        transition: transform 0.3s ease, color 0.3s ease;
    }
    .social-icon:hover {
        transform: scale(1.2);
        color: #f8d210;
    }
</style>

<!-- Font Awesome untuk ikon -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>


<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- CoreUI JS -->
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\siakad_sd\resources\views/layouts/app.blade.php ENDPATH**/ ?>