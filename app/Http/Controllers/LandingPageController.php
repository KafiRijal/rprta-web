<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Tanaman;
use App\Models\Up2k;
use App\Models\User;
use App\Models\Kontak;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $buku = Buku::orderBy('id', 'desc')
            ->limit(4)
            ->get();
        $tanaman = Tanaman::orderBy('id', 'desc')
            ->limit(4)
            ->get();
        $up2k = Up2k::orderBy('id', 'desc')
            ->limit(4)
            ->get();
        $petugas = User::with('jabatan:id,jabatan')->where('role_id', 2)->get();


        $data = [
            "buku" => $buku,
            "tanaman" => $tanaman,
            "up2k" => $up2k,
            "petugas" => $petugas,
        ];

        return view('index', $data);
    }
    public function tentang()
    {
        $petugas = User::with('jabatan:id,jabatan')->where('role_id', 2)->get();


        $data = [
            "petugas" => $petugas,
        ];

        return view('tentang', $data);
    }

    public function buku(Request $request)
    {
        $query = Buku::with('kategori:id,nama');

        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        $buku = $query->paginate(9)->appends($request->all());

        $data = [
            "buku" => $buku,
        ];

        return view('buku', $data);
    }

    public function tanaman(Request $request)
    {
        $query = Tanaman::query();

        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $tanaman = $query->paginate(9)->appends($request->all());

        $data = [
            "tanaman" => $tanaman,
        ];


        return view('tanaman', $data);
    }

    public function up2k(Request $request)
    {
        $query = Up2k::with('kategori:id,nama');

        if ($request->filled('search')) {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        $up2k = $query->paginate(9)->appends($request->all());

        $data = [
            "up2k" => $up2k,
        ];

        return view('up2k', $data);
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function detailBuku($slug)
    {
        $buku = Buku::where('slug', $slug)->with('kategori:id,nama')->get();

        $data = [
            "buku" => $buku,
        ];

        return view('buku-detail', $data);
    }
    public function detailUp2k($slug)
    {
        $up2k = Up2k::where('slug', $slug)->with('kategori:id,nama')->get();

        $data = [
            "up2k" => $up2k,
        ];

        return view('up2k-detail', $data);
    }
    public function detailTanaman($slug)
    {
        $tanaman = Tanaman::where('slug', $slug)->get();

        $data = [
            "tanaman" => $tanaman,
        ];

        return view('tanaman-detail', $data);
    }
    public function _kontak(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'message.required' => 'Pesan harus diisi.',
        ]);


        Kontak::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return back()->with('success', 'Pesan Anda berhasil dikirim!, Kami akan Membalasnya Via Email');
    }
}
