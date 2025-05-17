<?php

namespace App\Http\Controllers;

use App\Models\Up2k;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Exports\Up2kExport;
use Maatwebsite\Excel\Facades\Excel;

class Up2kController extends Controller
{
    public function up2k()
    {
        return view('admin/up2k/list');
    }

    public function tambah_up2k()
    {
        return view('admin/up2k/add');
    }

    public function edit_up2k($id)
    {
        $up2k = Up2k::findOrFail($id);

        $data = [
            "up2k" => $up2k,
        ];

        return view('admin/up2k/edit', $data);
    }

    public function _list_up2k()
    {
        $up2k = Up2k::with('kategori:id,nama')->get();
        $data = $up2k->map(function ($item) {
            return [
                'id' => $item->id,
                'nama_produk' => $item->nama_produk,
                'nama' => $item->nama,
                'kategori' => $item->kategori->nama,
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    public function _tambah_up2k(Request $request)
    {
        $messages = [
            'nama_produk.required' => 'Nama Produk wajib diisi.',
            'nama.required' => 'Nama Pemilik/Toko wajib diisi.',
            'telepon.required' => 'Telepon wajib diisi.',
            'perizinan.required' => 'Perizinan wajib diisi.',
            'pemasaran.required' => 'Pemasaran wajib diisi.',
            'keterangan.required' => 'Keterangan wajib diisi.',
            'kecamatan.required' => 'Kecamatan wajib diisi.',
            'kelurahan.required' => 'Kelurahan wajib diisi.',
            'kategori.required' => 'Kategori wajib diisi.',
            'image.max' => 'Image maksimal 10MB.',
            'image.mimes' => 'Format image harus jpg, jpeg, atau png.',
        ];

        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'perizinan' => 'required',
            'pemasaran' => 'required',
            'keterangan' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kategori' => 'required',
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
                $encryptedName = md5($request->nama_produk . $request->nama . time());
                $fotoName = substr($encryptedName, 0, 40);
                $fotoExtension = $request->file('image')->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName;
                $foto = $request->file('image');
                $foto->move(public_path('image_up2k'), $fotoNameWithPrefix . '.' . $fotoExtension);

                $fotoNameWithExtension = $fotoNameWithPrefix . '.' . $fotoExtension;
            }

            Up2k::create([
                'nama_produk' => $request->nama_produk,
                'id_kategori' => $request->kategori,
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'perizinan' => $request->perizinan,
                'pemasaran' => $request->pemasaran,
                'keterangan' => $request->keterangan,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
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

    public function _edit_up2k(Request $request)
    {
        if ($request->image === '') {
            $request->merge(['image' => null]);
        }

        $messages = [
            'nama_produk.required' => 'Nama Produk wajib diisi.',
            'nama.required' => 'Nama Pemilik/Toko wajib diisi.',
            'telepon.required' => 'Telepon wajib diisi.',
            'perizinan.required' => 'Perizinan wajib diisi.',
            'pemasaran.required' => 'Pemasaran wajib diisi.',
            'keterangan.required' => 'Keterangan wajib diisi.',
            'kecamatan.required' => 'Kecamatan wajib diisi.',
            'kelurahan.required' => 'Kelurahan wajib diisi.',
            'kategori.required' => 'Kategori wajib diisi.',
            'image.max' => 'Image maksimal 10MB.',
            'image.mimes' => 'Format image harus jpg, jpeg, atau png.',
        ];

        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'perizinan' => 'required',
            'pemasaran' => 'required',
            'keterangan' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kategori' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $up2k = Up2k::findOrFail($request->id);

            if ($request->hasFile('image')) {
                if ($up2k->image && file_exists(public_path('image_up2k/' . $up2k->image))) {
                    unlink(public_path('image_up2k/' . $up2k->image));
                }

                $encryptedName = md5($request->nama_produk . $request->nama . time());
                $fotoName = substr($encryptedName, 0, 40);
                $fotoExtension = $request->file('image')->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName;
                $foto = $request->file('image');
                $foto->move(public_path('image_up2k'), $fotoNameWithPrefix . '.' . $fotoExtension);

                $up2k->image = $fotoNameWithPrefix . '.' . $fotoExtension;
            }

            $up2k->nama_produk = $request->nama_produk;
            $up2k->id_kategori = $request->kategori;
            $up2k->nama = $request->nama;
            $up2k->telepon = $request->telepon;
            $up2k->perizinan = $request->perizinan;
            $up2k->pemasaran = $request->pemasaran;
            $up2k->keterangan = $request->keterangan;
            $up2k->kecamatan = $request->kecamatan;
            $up2k->kelurahan = $request->kelurahan;

            $up2k->save();

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

    public function _delete_up2k($id)
    {
        try {
            $up2k = Up2k::findOrFail($id);
            $up2k->delete();

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

    public function _export()
    {
        $up2k = Up2k::with('kategori:id,nama')->get();

        $data = $up2k->map(function ($item) {
            return [
                'id' => $item->id,
                'nama_produk' => $item->nama_produk,
                'nama' => $item->nama,
                'telepon' => $item->telepon,
                'kategori' => $item->kategori->nama,
                'perizinan' => $item->perizinan,
                'pemasaran' => $item->pemasaran,
                'keterangan' => $item->keterangan,
                'kecamatan' => $item->kecamatan,
                'kelurahan' => $item->kelurahan,
                'alamat' => $item->alamat,
                'image' => $item->image ? asset('image_up2k/' . $item->image) : '',
            ];
        });

        return Excel::download(new Up2kExport($data), 'Data UP2K.xlsx');
    }
}
