@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Kontak Kami</h2>
    <p class="text-center">Silakan hubungi salah satu admin kami untuk informasi lebih lanjut.</p>

    <div class="row">
        @foreach ($admins as $admin)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center p-3">
                    <h5>{{ $admin['nama'] }}</h5>
                    <p class="text-muted">{{ $admin['jabatan'] }}</p>
                    <p>
                        <a href="https://wa.me/{{ $admin['whatsapp'] }}" target="_blank" class="btn btn-success btn-sm">
                            <i class="fa fa-whatsapp"></i> Chat WhatsApp
                        </a>
                    </p>
                    <p>
                        <a href="mailto:{{ $admin['email'] }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-envelope"></i> Kirim Email
                        </a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
