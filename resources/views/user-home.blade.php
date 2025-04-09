@extends('layouts.guest') {{-- Ganti ke layout lain jika perlu, misal layouts.app --}}

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Welcome back, {{ Auth::user()->first_name ?? 'User' }}!</h1>

    <div class="row">
        <div class="col-md-8">
            {{-- Kolom Utama: Aktivitas, Rekomendasi, dll. --}}
            <div class="card mb-4">
                <div class="card-header">
                    Currently Reading
                </div>
                <div class="card-body">
                    <p>You are currently reading...</p>
                    {{-- TODO: Tampilkan buku yang sedang dibaca --}}
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    Recent Activity
                </div>
                <div class="card-body">
                    <p>Your recent reviews and updates...</p>
                    {{-- TODO: Tampilkan aktivitas terbaru --}}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            {{-- Sidebar: Statistik, Teman, dll. --}}
            <div class="card mb-4">
                <div class="card-header">
                    Reading Stats
                </div>
                <div class="card-body">
                    <p>Books read this month: 5</p>
                    {{-- TODO: Tampilkan statistik membaca --}}
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    Friend Activity
                </div>
                <div class="card-body">
                    <p>See what your friends are reading...</p>
                    {{-- TODO: Tampilkan aktivitas teman --}}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection