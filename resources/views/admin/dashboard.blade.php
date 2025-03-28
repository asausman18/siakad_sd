@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, Admin!</p>
</div>
@endsection

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .menu-container {
            display: flex;
            gap: 20px;
        }
        .menu-item {
            width: 150px;
            height: 150px;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .menu-item:hover {
            transform: rotateY(10deg) rotateX(10deg) scale(1.1);
        }
        .menu-item i {
            font-size: 50px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <a href="#" class="menu-item text-center text-dark">
            <i class="fas fa-book"></i>
            <span>E-Learning</span>
        </a>
        <a href="#" class="menu-item text-center text-dark">
            <i class="fas fa-qrcode"></i>
            <span>Absensi QR</span>
        </a>
        <a href="#" class="menu-item text-center text-dark">
            <i class="fas fa-library"></i>
            <span>Perpustakaan</span>
        </a>
    </div>
</body>
</html>
