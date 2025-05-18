<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Buku;
use App\Models\Tanaman;
use App\Models\Up2k;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBuku = Buku::count();
        $totalTanaman = Tanaman::count();
        $totalUp2k = Up2k::count();

        return view('admin/dashboard', compact('totalBuku', 'totalTanaman', 'totalUp2k'));
    }
}
