@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Tambahkan link ke file CSS -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<!-- Carousel -->
<div id="carouselHome" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/slider1.png') }}" class="d-block w-100" alt="Slider 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slider2.png') }}" class="d-block w-100" alt="Slider 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slider3.png') }}" class="d-block w-100" alt="Slider 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Kontainer Jenjang Pendidikan -->
<div class="container">
    <div class="table-header">Jenjang Pendidikan Kami</div>
    <div class="table-container">
        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th>Jenjang</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenjang as $item)
                <tr class="toggle-row" data-target="#info-{{ $item['id'] }}">
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['deskripsi'] }}</td>
                </tr>
                <tr id="info-{{ $item['id'] }}" class="info-row">
                    <td colspan="2">
                        <div class="info-card fade-in">
                            <p><strong>Usia:</strong> {{ $item['usia'] }} Tahun</p>
                            <p><strong>Fasilitas:</strong> {{ $item['fasilitas'] }}</p>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Video Profil -->
<h2 class="text-center mt-5 mb-4">Video Profil</h2>
<div class="container">
    <div class="row justify-content-center">
        @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card border-0 shadow-sm w-100">
                    <div class="card-body text-center">
                        <iframe width="100%" height="200" src="{{ str_replace('watch?v=', 'embed/', $video['url']) }}" frameborder="0" allowfullscreen></iframe>
                        <h6 class="mt-2">{{ $video['title'] }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Kontak Admin -->
<section class="container my-5">
    <h2 class="text-center mt-5 mb-4">Hubungi Kami</h2>
    <div class="row text-center">
        @foreach ($admins as $admin)
            <div class="col-md-4 mb-3" data-aos="fade-up">
                <div class="card shadow-lg p-4 border-0 rounded-4">
                    <h5 class="fw-bold text-primary"><i class="fas fa-user-circle"></i> {{ $admin['nama'] }}</h5>
                    <p class="text-muted">{{ $admin['jabatan'] }}</p>
                    <a href="https://wa.me/{{ $admin['wa'] }}" class="btn btn-success rounded-pill px-4 py-2" target="_blank">
                        <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Tambahkan AOS (Animate On Scroll) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>

<script>
    document.querySelectorAll('.toggle-row').forEach(row => {
        row.addEventListener('click', function() {
            let target = document.querySelector(this.getAttribute('data-target'));
            document.querySelectorAll('.info-row').forEach(el => {
                if (el !== target) {
                    el.style.display = "none";
                }
            });
            if (target.style.display === "none" || target.style.display === "") {
                target.style.display = "table-row";
                target.classList.add("fade-in");
            } else {
                target.style.display = "none";
            }
        });
    });
</script>
@endsection
