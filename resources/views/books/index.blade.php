@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2 class="mb-0">Katalog Buku</h2>
            <p class="text-muted">Jelajahi koleksi lengkap buku kami</p>
        </div>
        <div class="col-md-4">
            <form action="{{ route('books.search') }}" method="GET" class="d-flex">
                <input type="text" name="query" class="form-control me-2" placeholder="Cari buku...">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    @if ($books->isEmpty())
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i> Belum ada buku yang ditambahkan ke katalog.
    </div>
    @else
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($books as $book)
        <div class="col">
            <div class="card h-100 book-card shadow-sm">
                <div class="position-relative">
                    <img src="{{ $book->cover_image_path ?? 'https://placehold.co/600x900/3d405b/FFFFFF?text=No+Cover' }}"
                        class="card-img-top" alt="{{ $book->title }} Cover" style="height: 220px; object-fit: cover;">

                    @if ($book->publication_year >= date('Y'))
                    <span class="badge bg-warning position-absolute top-0 end-0 mt-2 me-2">
                        Akan Terbit
                    </span>
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title book-title">{{ $book->title }}</h5>
                    <p class="card-text book-author text-muted mb-1">oleh {{ $book->author->name ?? 'Unknown' }}</p>
                    <p class="card-text mb-2"><small
                            class="text-muted">{{ $book->genre->name ?? 'Uncategorized' }}</small></p>

                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-star text-warning"></i>
                            <span>4.5</span> {{-- Nanti bisa diganti dengan rata-rata rating asli --}}
                        </div>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $books->links() }}
    </div>
    @endif
</div>
@endsection

@push('styles')
<style>
.book-card {
    transition: transform 0.2s;
}

.book-card:hover {
    transform: translateY(-5px);
}
</style>
@endpush