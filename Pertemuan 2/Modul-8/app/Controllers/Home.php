<?php

/**
 * Controller Default: Home
 * Mewarisi fungsionalitas dasar dari Controller utama
 */
class Home extends Controller
{
    /**
     * Method default untuk Home Controller
     */
    public function index()
    {
        // 1. Siapkan data yang akan dikirimkan ke View
        $data = [
            'judul' => 'Halaman Utama',
            'nama'  => 'User MVC' // Data dinamis yang akan digunakan di View
        ];

        // 2. Panggil metode view dari Base Controller
        // Parameter 1: lokasi file view di folder app/views/
        // Parameter 2: data dikirim ke view
        $this->view('home/index', $data);
    }
}
