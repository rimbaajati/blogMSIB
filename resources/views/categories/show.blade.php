@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategori</h1>

        <div class="card mt-4">
            <div class="card-header">
                <h3>{{ $category->name }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Deskripsi:</strong> {{ $category->description }}</p>
                <p><strong>Ditambahkan pada:</strong> {{ $category->created_at->format('d M Y') }}</p>
                <p><strong>Diperbarui pada:</strong> {{ $category->updated_at->format('d M Y') }}</p>

                <a href="{{ route('categories.index') }}" class="btn btn-primary">Kembali ke Daftar Kategori</a>
            </div>
        </div>
    </div>
@endsection
