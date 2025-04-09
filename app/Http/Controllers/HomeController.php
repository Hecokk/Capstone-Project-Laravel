<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\GoogleBooksService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Service untuk Google Books API
     */
    protected GoogleBooksService $googleBooksService;

    /**
     * Constructor
     */
    public function __construct(GoogleBooksService $googleBooksService)
    {
        $this->googleBooksService = $googleBooksService;
    }

    /**
     * Menampilkan halaman utama.
     */
    public function index(): View
    {
        // Ambil buku dari database lokal
        $localBooks = Book::with('author')->latest()->take(6)->get();

        // Ambil buku trending dari Google Books API
        $trendingBooks = $this->googleBooksService->getTrendingBooks(6, 'fiction');

        // Pengecekan apakah data trending kosong, jika ya gunakan data lokal
        if (empty($trendingBooks)) {
            $trendingBooks = $localBooks;
        }

        // Kirim data ke view welcome
        return view('welcome', compact('trendingBooks', 'localBooks'));
    }

    /**
     * Show the user-specific home page (for logged-in users).
     *
     * @return View
     */
    public function userHome(): View
    {
        // Di sini Anda bisa mengambil data spesifik untuk user, e.g.:
        // - Buku yang sedang dibaca
        // - Aktivitas teman (jika ada fitur sosial)
        // - Rekomendasi personal

        // Untuk saat ini, kita tampilkan view sederhana
        return view('user-home'); // Nama view baru
    }
}
