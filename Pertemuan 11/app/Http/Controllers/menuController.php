<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index() {

        $menus = [
            [
                "nama" => "Ayam Palekko + Nasi",
                "harga" => "IDR 13K",
                "gambar" => "IMG/MENU/ayam-palekko.jpeg",
            ],
            [
                "nama" => "Ayam Bakar 1 Ekor",
                "harga" => "IDR 80K",
                "gambar" => "IMG/MENU/ayam-bakar-1-ekor.jpeg",
            ],
            [
                "nama" => "Ayam Rame Rame",
                "harga" => "IDR 75K",
                "gambar" => "IMG/MENU/ayam-rame-rame.jpeg",
            ],
            [
                "nama" => "Ayam Lalapan",
                "harga" => "IDR 25K",
                "gambar" => "IMG/MENU/ayam-lalapan.jpeg",
            ],
            [
                "nama" => "Ayam Goreng + Sop Ceker",
                "harga" => "IDR 25K",
                "gambar" => "IMG/MENU/ayam-goreng-ceker.jpeg",
            ],
            [
                "nama" => "Ayam Bakar + Sop Ceker",
                "harga" => "IDR 25K",
                "gambar" => "IMG/MENU/ayam-bakar-ceker.jpeg",
            ],
            [
                "nama" => "Ayam Geprek S-Ijo + Nasi",
                "harga" => "IDR 12K",
                "gambar" => "IMG/MENU/ayam-geprek-sambal-ijo.jpeg",
            ],
            [
                "nama" => "Ayam Geprek S-Merah + Nasi",
                "harga" => "IDR 12K",
                "gambar" => "IMG/MENU/ayam-geprek-sambal-merah.jpeg",
            ],
            [
                "nama" => "Ayam Geprek S-Kemangi + Nasi",
                "harga" => "IDR 12K",
                "gambar" => "IMG/MENU/ayam-geprek-sambal-kemangi.jpeg",
            ],
            [
                "nama" => "Ayam Geprek Tanpa Nasi",
                "harga" => "IDR 9K",
                "gambar" => "IMG/MENU/ayam-geprek.jpeg",
            ],
            [
                "nama" => "Es Teh",
                "harga" => "IDR 3K",
                "gambar" => "IMG/MENU/es-teh.jpeg",
            ],
            [
                "nama" => "Es Jeruk",
                "harga" => "IDR 5K",
                "gambar" => "IMG/MENU/es-jeruk.jpeg",
            ],
        ];

        return view('index', compact('menus'));
    }
}
