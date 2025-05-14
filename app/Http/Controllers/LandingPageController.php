<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function buku()
    {
        return view('buku');
    }
    public function tanaman()
    {
        return view('tanaman');
    }
    public function up2k()
    {
        return view('up2k');
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function login()
    {
        return view('login');
    }
    public function daftar()
    {
        return view('daftar');
    }
    public function detailBuku()
    {
        return view('buku-detail');
    }
    public function detailUp2k()
    {
        return view('up2k-detail');
    }
    public function detailTanaman()
    {
        return view('tanaman-detail');
    }
}
