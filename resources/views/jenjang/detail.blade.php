@extends('layouts.app')

@section('title', $jenjang['title'])

@section('content')
<div class="container">
    <h2 class="text-center">{{ $jenjang['title'] }}</h2>
    <p class="text-center"><strong>Visi & Misi:</strong> {{ $jenjang['visi_misi'] }}</p>

    <h3>Program Unggulan</h3>
    <ul>
        @foreach ($jenjang['program'] as $program)
            <li>{{ $program }}</li>
        @endforeach
    </ul>

    <div class="text-center mt-4">
        <a href="{{ asset('brosur/' . $jenjang['brosur']) }}" class="btn btn-primary" download>Download Brosur</a>
    </div>
</div>
@endsection
