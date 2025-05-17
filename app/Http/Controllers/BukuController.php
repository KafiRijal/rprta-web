<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    public function buku()
    {
        return view('admin/buku/list');
    }

    public function tambah_buku()
    {
        return view('admin/buku/add');
    }

    public function edit_buku($id)
    {
        $buku = Buku::findOrFail($id);

        $data = [
            "buku" => $buku,
        ];

        return view('admin/buku/edit', $data);
    }

    public function _list_buku()
    {
        $buku = Buku::with('kategori:id,nama')->get();
        $data = $buku->map(function ($item) {
            return [
                'id' => $item->id,
                'penulis' => $item->penulis,
                'judul' => $item->judul,
                'penerbit' => $item->penerbit,
                'kategori' => $item->kategori->nama,
                'jumlah' => $item->jumlah,
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    public function _tambah_buku(Request $request)
    {
        $messages = [
            'judul.required' => 'Judul wajib diisi.',
            'penulis.required' => 'Penulis buku wajib diisi.',
            'penerbit.required' => 'Penerbit buku wajib diisi.',
            'kategori.required' => 'Kategori buku wajib diisi.',
            'jumlah.required' => 'Jumlah buku wajib diisi.',
            'image.max' => 'Image maksimal 10MB.',
            'image.mimes' => 'Format image harus jpg, jpeg, atau png.',
        ];

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $fotoNameWithExtension = null;

            if ($request->hasFile('image')) {
                $encryptedName = md5($request->judul . $request->penulis . time());
                $fotoName = substr($encryptedName, 0, 40);
                $fotoExtension = $request->file('image')->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName;
                $foto = $request->file('image');
                $foto->move(public_path('image_buku'), $fotoNameWithPrefix . '.' . $fotoExtension);

                $fotoNameWithExtension = $fotoNameWithPrefix . '.' . $fotoExtension;
            }

            Buku::create([
                'judul' => $request->judul,
                'id_kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'jumlah' => $request->jumlah,
                'image' => $fotoNameWithExtension,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Disimpan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function _edit_buku(Request $request)
    {
        if ($request->image === '') {
            $request->merge(['image' => null]);
        }

        $messages = [
            'judul.required' => 'Judul wajib diisi.',
            'penulis.required' => 'Penulis buku wajib diisi.',
            'penerbit.required' => 'Penerbit buku wajib diisi.',
            'kategori.required' => 'Kategori buku wajib diisi.',
            'jumlah.required' => 'Jumlah buku wajib diisi.',
            'image.max' => 'Image maksimal 10MB.',
            'image.mimes' => 'Format image harus jpg, jpeg, atau png.',
        ];

        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'kategori' => 'required',
            'jumlah' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $buku = Buku::findOrFail($request->id);

            if ($request->hasFile('image')) {
                if ($buku->image && file_exists(public_path('image_buku/' . $buku->image))) {
                    unlink(public_path('image_buku/' . $buku->image));
                }

                $encryptedName = md5($request->judul . $request->penulis . time());
                $fotoName = substr($encryptedName, 0, 40);
                $fotoExtension = $request->file('image')->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName;
                $foto = $request->file('image');
                $foto->move(public_path('image_buku'), $fotoNameWithPrefix . '.' . $fotoExtension);

                $buku->image = $fotoNameWithPrefix . '.' . $fotoExtension;
            }

            $buku->judul = $request->judul;
            $buku->id_kategori = $request->kategori;
            $buku->deskripsi = $request->deskripsi;
            $buku->penulis = $request->penulis;
            $buku->penerbit = $request->penerbit;
            $buku->jumlah = $request->jumlah;

            $buku->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function _delete_buku($id)
    {
        try {
            $buku = Buku::findOrFail($id);
            $buku->delete();

            return response()->json([
                'message' => 'Data berhasil dihapus.'
            ], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
